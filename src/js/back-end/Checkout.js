import Cookies from 'js-cookie';
import Fancybox from '../utilities/Fancybox';
import Swal from 'sweetalert2';
import jqueryValidation from 'jquery-validation';
// import CCounter from '../../js/components/c-counter';

let products = {};
document.querySelectorAll('.js-product').forEach((item, key) => {
  let product = $(item);
  products[product.find('a').data('id')] = {
    id: product.find('a').data('id'),
    image: product.find('.js-image').attr('src'),
    price: +product.find('a').attr('data-price'),
    title: product.find('.js-title').html(),
  };
});
console.log(products);

function toastError(text) {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
  });

  Toast.fire({
    icon: 'error',
    title: text,
  });
}
// let products = {
// 	0: {
// 		price: 350,
// 	},
// 	1: {
// 		price: 650,
// 	},
// 	2: {
// 		price: 3100,
// 	},
// 	3: {
// 		price: 400,
// 	},
// };

export default class Checkout {
  constructor() {
    if (Cookies.get('cart') === undefined) {
      this.setCart({
        items: 0,
        productItems: products,
      });
    }
    console.log(this.getCart());
  }

  changeItemsCart() {
    $('.c-btn-cart span').text(this.getCart().items);
  }

  events() {
    let self = this;

    // Load
    $(window).on('load', function (e) {
      self.changeItemsCart();
      self.renderItems();
    });

    // Open Cart
    $('.c-btn-cart').on('click', function (e) {
      e.preventDefault();
      if (self.getCart().items) {
        self.changeItemsCart();
        self.renderItems();
        new Fancybox().openModal('#c-modal_checkout', 'awd');
      } else {
        Swal.fire('Товаров в Корзине не найдено!');
      }
    });
    $('.c-input').on('focus', function (e) {
      $(this).removeClass('error');
    });

    // 	$(".validate").validate({
    //   rules: {
    //     name: "required",
    //     email: {
    //       required: true,
    //       email: true
    //     }
    //   },
    //   messages: {
    //     name: "Please specify your name",
    //     email: {
    //       required: "We need your email address to contact you",
    //       email: "Your email address must be in the format of name@domain.com"
    //     }
    //   }
    // });

    $('.js-form').on('submit', function (e) {
      e.preventDefault();
      let form = $(this);

      if (form[0].elements.name.value === '') {
        form[0].elements.name.classList.add('error');
        toastError('Введите свое имя');
        return;
      }
      if (form[0].elements.phone.value === '') {
        form[0].elements.phone.classList.add('error');
        toastError('Введите номер телефона');
        return;
      }
      form.find('button').addClass('disabled');
      form[0].elements.name.classList.remove('error');
      form[0].elements.phone.classList.remove('error');
      $.ajax({
        url: './telegram.php',
        type: 'POST',
        data: form.serialize(),
      }).done(function (data) {
        if (data === 'ok') {
          Swal.fire({
            icon: 'success',
            title: 'Спасибо за заказ!',
            showConfirmButton: false,
            timer: 3000,
            willClose: function () {
              $.fancybox.close();
              form.trigger('reset');
              self.setCart({
                items: 0,
                productItems: products,
              });
              self.updateCart();
              form.find('button').removeClass('disabled');
            },
          });
        }
      });
    });

    // Cookies.set('foo', ['awd','2323',2323]);

    // console.log(JSON.parse(Cookies.get('foo')));

    $('.js-add-to-cart').on('click', function (e) {
      e.preventDefault();
      let cart = self.getCart();
      let id = $(this).data('id');

      // ++cart.items;

      // console.log(cart]);

      cart.productItems[id] = self.updateProduct(id, 1);
      // Set
      self.setCart(cart);
      // Update
      self.updateCart();

      // console.log(self.getCart());

      new Fancybox().openModal('#c-modal_checkout', 'awd');

      self.renderItems();
    });
  }
  updateCart() {
    this.changeItemsCart();
  }
  updateProduct(id, count = 1) {
    let cart = this.getCart();
    console.log(cart.productItems[id]);
    return {
      item: cart.productItems[id].item === undefined ? 1 : count,
      ...products[id],
    };
  }

  renderItems() {
    let cart = this.getCart();
    let productItems = cart.productItems;
    let html = '';
    let total = 0;
    for (var prop in productItems) {
      if (
        productItems[prop].item !== undefined &&
        productItems[prop].item >= 1
      ) {
        total += productItems[prop].item;
        let template = `<li class="mb-5">
				<div class="c-cart-product">
					<div class="c-cart-product__image">
						<img src="${productItems[prop].image}" alt="">
					</div>
					<div class="c-cart-product__content">
						<p class="text-5">
							${productItems[prop].title}
						</p>
						<div class="c-counter js-c-counter">
							<div class="c-counter__btn minus"></div>
						    <input data-id="${
                  productItems[prop].id
                }" type="text" class="c-counter__input input-Qty" value="${
          productItems[prop].item
        }">
						    <div class="c-counter__btn plus"></div>
						</div>
						<p class="text-5">${
              productItems[prop].price * productItems[prop].item
            } грн <br>  ${
          Math.floor(productItems[prop].price * 2.63) * productItems[prop].item
        } руб</p>
					</div>
				</div>
				<input type="hidden" name="${productItems[prop].id}" value="(${
          productItems[prop].title
        } | ${productItems[prop].item} штук | ${
          productItems[prop].price * productItems[prop].item
        } грн / ${
          Math.floor(productItems[prop].price * 2.63) * productItems[prop].item
        } руб)">
			</li>`;
        html += template;
      }
    }
    cart.items = total;
    this.setCart(cart);
    this.changeItemsCart();
    $('.js-products').html(html);

    // $('.js-c-counter input').change();
  }

  setCart(array) {
    Cookies.set('cart', array);
  }
  getCart() {
    return JSON.parse(Cookies.get('cart'));
  }
}

new Checkout().events();
