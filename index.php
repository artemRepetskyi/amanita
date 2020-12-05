<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/dist/main.css">
	<!-- <link rel="stylesheet" type="text/css" href="dist/main.css"> -->
</head>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="c-nav">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<a href="" class="c-logo">
							<img src="images/views/components/c-logo/logo.svg" alt="">
						</a>
					</div>
					<div class="col-auto d-flex align-items-center">
						<ul class="c-menu c-menu--mobile js-c-menu pr-7">
							<li>
								<a href="#header">Главная</a>
							</li>
							<li>
								<a href="#about-us">О нас</a>
							</li>
							<li>
								<a href="#shop">Магазин</a>
							</li>
							<li>
								<a href="#more-information">Материалы</a>
							</li>
							<li>
								<a href="" class="js-contacts">Контакты</a>
							</li>
							<li class="d-xl-none">
								<a href="mailto:kostyakeys@gmail.com">kostyakeys@gmail.com</a>
							</li>
							<li class="d-xl-none">
								<a href="tel:+380930333821">+380 93 033 38 21</a>
							</li>
							<li class="d-xl-none">
								<div class="c-burger active">
									<div class="c-burger__block">
										<div class="c-burger__line"></div>
									</div>
								</div>
							</li>
						</ul>
						<a href="" class="c-btn-cart">
							<span>0</span>
							<img src="images/views/components/c-btn-cart/cart.png" alt="">
						</a>
						<div class="c-burger js-c-burger ml-4">
							<div class="c-burger__block">
								<div class="c-burger__line"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- Header -->
		<header id="header" class="s-header bg-cover bg-fixed" style="background-image: url(images/views/sections/s-header/bg.jpg); ;">
			<div class="container d-flex justify-content-center flex-column align-items-lg-center">
				<div><img src="images/logos/logo-1.svg" alt=""></div>
				<h1 class="text-0 font-family-zero my-6 color-default">ДОБРО ПОЖАЛОВАТЬ В МАГАЗИН</h1>
				<a href="#shop" class="c-btn c-btn--width c-btn--spacing">КУПИТЬ</a>
			</div>
			<div class="s-header__contact d-lg-flex justify-content-between d-none">
				<a href="mailto:kostyakeys@gmail.com" class="d-flex align-items-center color-default font-7">
					<img src="images/views/sections/s-header/icon.png" alt="">
					<span class="pl-3">kostyakeys@gmail.com</span>
				</a>
				<a href="tel:+380930333821" class="d-flex align-items-center color-default font-7">
					<img src="images/views/sections/s-header/icon-1.png" alt="">
					<span class="pl-3">+380 93 033 38 21</span>
				</a>
			</div>
			<!-- s-header__scroll -->
			<div class="s-header__scroll"></div>
		</header>
		<!-- Section 1 -->
		<section id="about-us" class="pt-7">
			<div class="container d-flex flex-column align-items-center">
				<img class="img-scale" src="images/views/sections/section-1/image.svg" alt="">
				<h2 class="text-0 font-family-zero mt-5 mb-7">О нас</h2>
				<div class="js-opacity-texts-1 text-3">
					<p class="item-1 mb-7">Добро пожаловать в наш интернет магазин . Здесь вы можете приобрести мухомор красный Amanita Miscaria в разных видах. Мы сами собираем плодовые тела в течении летне-осеннего периода. Собираются они на диком полуострове на територии Украины, где нету ни машин, ни дорог, практически нет людей и нет цивилизации. Собираются только шляпки, без признаков червивости или гниения. Шляпки аккуратно складываются в коробку пластинками вниз чтобы не попадал песок. Шляпки мы срезаем деревянным ножом чтобы в гриб не попадал метал. Когда грибы собраны, мы их перебираем, очищаем и затем перемещаем в специальную сушилку. Там они сушаться при температуре 35-40 градусов. После того как шляпки высушились, мы кладем их в герметизируемые пакеты, откачиваем воздух и кладем в прохладное, сухое, темное помещение на 2 месяца. Только после этих пройденных этапов, они поступают в продажу на нашем сайте. Наши шляпки имеют отличный ярко красный цвет, сильный запах и хороший вкус. </p>
					<p class="item-2 mb-7"> Наш приоритет - иметь лучший продукт, рассказывать людям о мухоморе Amanita Muscaria и помогать тем, кому нужна помощь с этим натуральным средством.
					</p>
					<p class="item-3 mb-7"> Мы гарантируем, что продукт высочайшего качества по внешнему виду и эффективности.
					</p>
					<p class="item-4 mb-7"> У нас вы сможете приобрести мухомор в нескольких видах: цельными шляпками, в порошке мелкого помола и в капсулах.
					</p>
			</div>
		</section>
		<!-- Section-2 -->
		<section id="gallery">
			<div class="container">
				<h2 class="text-0 js-title font-family-zero color-zero mb-7">Фото галерея</h2>
				<div class="c-slider">
					<div class="swiper-container gallery-top">
					    <div class="swiper-wrapper">
					      <?php for ($i=1; $i <= 20; $i++) {?> 
					      	<div class="swiper-slide"><a data-fancybox="gallery" href="images/views/sections/section-2/slide-<?= $i ?>.jpg" data-options='{"backFocus":false}'><img class="swiper-lazy" data-src="images/views/sections/section-2/slide-<?= $i ?>.jpg" alt=""><div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div></a></div>
					      <?php } ?>
					    </div>
					    <!-- Add Pagination -->
					    <div class="swiper-pagination"></div>
					  </div>
					  <div class="swiper-container gallery-thumbs">
					    <div class="swiper-wrapper">
					      <?php for ($i=1; $i <= 20; $i++) {?> 
						      <div class="swiper-slide"><img class="swiper-lazy" data-src="images/views/sections/section-2/slide-<?= $i ?>.jpg" alt=""><div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div></div>
					       <?php } ?>
					    </div>
					  </div>
				</div>
			</div>
		</section>

		<section id="shop" class="py-7">
			<div class="container">
				<h2 class="text-0 js-title font-family-zero text-center pt-7 mb-7">Магазин</h2>
				<div class="row justify-content-between">
					<!-- Product -->
					<div class="js-product col-lg-5 py-5 col-12">
						<div class="c-image mb-3">
							<img class="js-image" src="images/views/sections/section-shop/product.jpg" alt="">
						</div>
						<p class="text-3 js-title font-500 mb-3">Мухомор Красный шляпки 50 гр</p>
						<p class="text-3 font-500 mb-4">350 грн</p>
						<a href="" 
						   data-id="0" 
						   data-price="350" class="js-add-to-cart c-btn c-btn--width c-btn--spacing">КУПИТЬ</a>
					</div>
					<!-- Product 1 -->
					<div class="js-product col-lg-5 py-5 col-12">
						<div class="c-image mb-3">
							<img class="js-image" src="images/views/sections/section-shop/product-1.jpg" alt="">
						</div>
						<p class="text-3 js-title font-500 mb-3">Мухомор Красный шляпки 100 гр</p>
						<p class="text-3 font-500 mb-4">650 грн</p>
						<a href="" 
						   data-id="1" 
						   data-price="650" class="js-add-to-cart c-btn c-btn--width c-btn--spacing">КУПИТЬ</a>
					</div>
					<!-- Product 2 -->
					<div class="js-product col-lg-5 py-5 col-12">
						<div class="c-image mb-3">
							<img class="js-image" src="images/views/sections/section-shop/product-1.jpg" alt="">
						</div>
						<p class="text-3 js-title font-500 mb-3">Мухомор Красный шляпки 500 гр</p>
						<p class="text-3 font-500 mb-4">3100 грн</p>
						<a href="" 
						   data-id="2" 
						   data-price="3100" class="js-add-to-cart c-btn c-btn--width c-btn--spacing">КУПИТЬ</a>
					</div>
					<!-- Product 2 -->
					<div class="js-product col-lg-5 py-5 col-12">
						<div class="c-image mb-3">
							<img class="js-image" src="images/views/sections/section-shop/product-1.jpg" alt="">
						</div>
						<p class="text-3 js-title font-500 mb-3">Мухомор Пантерный шляпки 50 гр</p>
						<p class="text-3 font-500 mb-4">400 грн</p>
						<a href="" 
						   data-id="3" 
						   data-price="400" class="js-add-to-cart c-btn c-btn--width c-btn--spacing">КУПИТЬ</a>
					</div>
				</div>
			</div>
		</section>

		<!-- More Information -->
		<section id="more-information" class="pt-7">
			<div class="container">
				<h2 class="text-0 font-family-zero mt-5 mb-7 text-center">Еще немного информации</h2>
				<div class="row">
					<div class="col-lg-6 col-12 mb-lg-0 mb-7">
						<iframe style="width: 100%; height: 260px;" src="https://www.youtube-nocookie.com/embed/oHpIds4Timw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="col-lg-6 col-12 text-5 font-300 lh-0">
						<ul class="c-list">
							<li>Общий физиологический тоник, налаживающий работу всех систем организма</li>
							<li>снятие мышечных и суставных болей, в том числе застарелых</li>
							<li>нормализация сна, улучшение работоспособности</li>
							<li>снятие синдрома усталости, адаптогенное действие</li>
							<li>снятие депрессии (особенно сезонной),</li>
							<li>выход из пограничных психологических состояний</li>
							<li>ноотропное действие</li>
							<li>повышение либидо у мужчин и женщин</li>
							<li>снижение тяги к курению и алкоголю и избавление от этих привычек</li>
							<li>мягкий отказ от психотропных лекарственных препаратов и их замещение</li>
							<li>профилактика вирусных и бактериальных заболеваний</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="" class="pt-7 pb-7">
			<div class="container">
				<h2 class="text-0 font-family-zero mt-5 mb-7 text-center">Как осуществить заказ</h2>
				<p class="text-3 font-300 mb-4">
					Покупая у нас, Вы получаете профессиональный продукт в качественной завакуумированой, практичной 
					упаковке, с проверенным радиационным фоном.
					Доставка осуществляется по всему миру. Новой почтой или Укр Почтой а также если вам удобно другим
					способом, можем обговорить и отправить любым для Вас удобным способом.
					Также если Вы из г. Одесса, можно забрать самовывозом.
					Оплата на територии Украины: либо оплатой на карту либо наложенным платежом без предоплаты
					Оплата в другие страны: По полной предоплате + оплата за доставку
				</p>
				<p class="font-500 text-3">Также, если Вы хотите проверить наш продукт, мы можем бесплатно отправить Вам одну шляпку красного мухомора ( доставка за ваш счет).</p>
			</div>
		</section>

		<!-- Contacts -->
		<div id="contacts" class="c-modal c-modal--primary c-modal--width-1" style="display: none;">
			<div class="container">
				<h2 class="text-0 font-family-zero mt-5 mb-7 text-center">Контакты</h2>
				<div class="row justify-content-between">
					<div class="col-md-auto col-12  mb-7">
						<ul class="text-0">
							<li>
								<p><span class="color-zero">Адрес:</span> Украина, г.Одесса</p>
								
							</li>
							<li>
								<p><span class="color-zero">Телефон:</span> <a class="color-default" href="tel:+380930333821">+380 93 033 38 21</a></p>
							</li>
							<li>
								<p><span class="color-zero">Email:</span> <a href="mailto:kostyakeys@gmail.com" class="color-default">kostyakeys@gmail.com</a></p>
							</li>
							<li>
								<p><span class="color-zero">Рабочее время:</span> с 08:00 до 23:00</p>
							</li>
						</ul>
					</div>
					<div class="col-md-auto col-1lg-2 col-12">
						<ul>
							<li class="mb-5">
								<a target="_blank" class="d-flex align-items-center color-default text-0" href="https://instagram.com/amanita">
									<img src="images/views/sections/section-3/icon-instagram.png" alt="">
									<span class="pl-5">instagram.com/amanita</span>
								</a>
							</li>
							<li>
								<a target="_blank" class="d-flex align-items-center color-default text-0" href="https://teleg.run/amanitaMuscariaPNG">
									<img src="images/views/sections/section-3/icon-telegram.png" alt="">
									<span class="pl-5">@amanitaMuscariaPNG</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->

		<footer class="s-footer py-7">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-auto col-12 mb-md-0 mb-7">
						<a href="" class="c-logo">
							<img src="images/views/components/c-logo/logo.svg" alt="">
						</a>
						<ul class="text-md-6 text-3 mt-3">
							<li>
								<p><span class="color-zero">Адрес:</span> Украина, г.Одесса</p>
							</li>
							<li>
								<p><span class="color-zero">Телефон:</span> <a class="color-default" href="tel:+380930333821">+380 93 033 38 21</a></p>
							</li>
							<li>
								<p><span class="color-zero">Email:</span> <a href="mailto:kostyakeys@gmail.com" class="color-default">kostyakeys@gmail.com</a></p>
							</li>
							<li>
								<p><span class="color-zero">Рабочее время:</span> с 08:00 до 23:00</p>
							</li>
						</ul>
					</div>
					<div class="col-md-auto col-12">
						<ul class="c-menu c-menu--primary">
							<li>
								<a href="#header">Главная</a>
							</li>
							<li>
								<a href="#about-us">О нас</a>
							</li>
							<li>
								<a href="#shop">Магазин</a>
							</li>
							<li>
								<a href="#more-information">Материалы</a>
							</li>
							<li>
								<a href="" class="js-contacts">Контакты</a>
							</li>
						</ul>
						<ul class="pt-4 pl-3">
							<li class="mb-4">
								<a target="_blank" class="d-flex align-items-center color-default text-5" href="https://instagram.com/amanita">
									<img class="w-0" src="images/views/sections/section-3/icon-instagram.png" alt="">
									<span class="pl-5">instagram.com/amanita</span>
								</a>
							</li>
							<li>
								<a target="_blank" class="d-flex align-items-center color-default text-5" href="https://teleg.run/amanitaMuscariaPNG">
									<img class="w-0" src="images/views/sections/section-3/icon-telegram.png" alt="">
									<span class="pl-5">@amanitaMuscariaPNG</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div id="c-modal_checkout" class="c-modal c-modal--width p-5" style="display: none;">
		<h2 class="text-0 font-family-zero mt-5 mb-7 text-center">Ваш заказ:</h2>
		<div class="c-line my-4"></div>
		<form action="" class="js-form">
			<ul class="js-products">
				
			</ul>
			<div class="c-line my-4"></div>
			<label class="d-block mb-4 text-3">Имя</label>
			<input name="name" type="text" class="c-input mb-3">
			<label class="d-block mb-4 text-3">Телефон</label>
			<input name="phone" type="text" class="c-input mb-3">
			<label class="d-block mb-4 text-5">Если вы желаете чтобы мы вам уже отправили без предварительного звонка, напишите ниже ФИО получателя, город, склад новой почты и телефон</label>
			<textarea name="all" class="c-input c-input--textarea mb-3"></textarea>
			<button class="c-btn c-btn--height c-btn--not-hover">ОФОРМИТЬ</button>
		</form>
	</div>
	<script type="text/javascript" src="http://localhost:8080/dist/main.js"></script>
	<!-- <script type="text/javascript" src="dist/main.js"></script> -->
</body>
</html>