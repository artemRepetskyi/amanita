import Checkout from '../back-end/Checkout';
import Cookies from 'js-cookie';

export default class CCounter {

    constructor() {
        this.body = $('body');
        this.counter = '.c-counter';
        this.js_counter = '.js-c-counter';
        this.input = this.counter + '__input';
        this.events();
    }

    events() {
        let self = this;

        $(window).on('load', this.load.bind(this));

        this.body.on('click', `${this.counter} div`, function (event) {
            $(this).hasClass('plus') ? self.quantityPlus($(this)) : self.quantityMinus($(this));
        });

        this.body.on('change', `${this.js_counter} ${this.input}`, function (event) {
            self.updateCount($(this));
        });
        
        $(this.body).on('keyup change', `${this.counter} input`, function (event) {
            this.value = this.value.replace(/[^0-9\.]/g, '');
            if (!this.value || Number(this.value) <= 0) {
                this.value = 1;
            }

            setTimeout(() => {
                self.quantityActive($(this), $(this));
            }, 100);

        });
    }

    load() {
        let self = this;
        $(this.counter).each(function (index, el) {
            self.quantityActive($(el).find('div'), $(el).find('input'));
        });
    }


    quantityMinus($this) {
        let $quantityNum = $($this).closest(this.counter).find(this.input);
        if ($quantityNum.val() > 0) {
            $quantityNum.val(+$quantityNum.val() - 1);
        }
        this.quantityActive($this, $quantityNum);
        $quantityNum.trigger('change');
    }

    quantityPlus($this) {
        let $quantityNum = $($this).closest(this.counter).find(this.input);
        $quantityNum.val(+$quantityNum.val() + 1);
        this.quantityActive($this, $quantityNum);

        $quantityNum.trigger('change');
    }

    quantityActive($this, $quantityNum) {
        $($this).closest(this.counter).toggleClass('active', Number($quantityNum.val()) > 1);
    }


    updateCount(item) {
        var newQty = +item.val();
        console.log(newQty);
        var id = item.data('id');

        let checkout = new Checkout();
        let cart = checkout.getCart();
            
        ++cart.items;
        cart.productItems[id] = checkout.updateProduct(id, newQty);

        // Set
        checkout.setCart(cart);
        // Update
        checkout.updateCart();
        checkout.renderItems();
        // $.ajax({
        //     url: '/card/edit-qty',
        //     data: {
        //         id: currentProdId,
        //         qty: newQty
        //     },
        //     type: 'GET',
        //     success: function (res) {
        //         AddToCart.refreshDataInCart();
        //         AddToCart.refreshHeaderInfo();
        //     },
        //     error: function (err) {
        //         console.log(err);
        //     }
        // });
    }
}


new CCounter();