<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Каталог</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="img/favicon.ico">
	<meta property="og:image" content="img/screenshot.png">
	<link rel="stylesheet" href="css/main.min.css?v=1">
</head>

<body>

	<header class="header">
		<div class="header__container">

			<a href="/" class="header__logo">auto<b>nomera</b></a>

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

			<nav class="header__nav nav">
				<ul>
					<li><a href="#">Каталог номеров</a></li>
					<li><a href="#">Наши работы</a></li>
					<li><a href="#">Отзывы о нас</a></li>
				</ul>
				<div class="header__nav_soc header__soc">
					<a href="tel:+71234567890" class="header__soc_tel">+7 123 456 7890</a>
					<a href="#" class="header__soc_link header__soc_vk">
						<img src="img/svg/vk.svg" alt="">
					</a>
					<a href="#" class="header__soc_link header__soc_telegram">
						<img src="img/svg/telegram.svg" alt="">
					</a>
					<a href="#" class="header__soc_link header__soc_viber">
						<img src="img/svg/viber.svg" alt="">
					</a>
					<a href="#" class="header__soc_link header__soc_whatsapp">
						<img src="img/svg/whatsapp.svg" alt="">
					</a>
				</div>
				<a href="#" class="header__nav_btn btn">Запрос на поиск номера</a>
			</nav>

			<div class="header__soc">
				<a href="tel:+71234567890" class="header__soc_tel">+7 123 456 7890</a>
				<a href="#" class="header__soc_link header__soc_vk">
					<img src="img/svg/vk.svg" alt="">
				</a>
				<a href="#" class="header__soc_link header__soc_telegram">
					<img src="img/svg/telegram.svg" alt="">
				</a>
				<a href="#" class="header__soc_link header__soc_viber">
					<img src="img/svg/viber.svg" alt="">
				</a>
				<a href="#" class="header__soc_link header__soc_whatsapp">
					<img src="img/svg/whatsapp.svg" alt="">
				</a>
			</div>

			<a href="#" class="header__btn btn">Запрос на поиск номера</a>

		</div>
	</header>

	<section class="work page">
		<div class="container">

			<h2>Наши работы</h2>

			<div class="work__list">
				<a href="#" class="page--work__item work__item">
					<img src="img/work1.png" alt="">
				</a>
				<a href="#" class="page--work__item work__item">
					<img src="img/work2.png" alt="">
				</a>
				<a href="#" class="page--work__item work__item">
					<img src="img/work3.png" alt="">
				</a>
				<a href="#" class="page--work__item work__item">
					<img src="img/work4.png" alt="">
				</a>
				<a href="#" class="page--work__item work__item">
					<img src="img/work5.png" alt="">
				</a>
				<a href="#" class="page--work__item work__item">
					<img src="img/work6.png" alt="">
				</a>
			</div>

			<a href="#" class="page--work__more">
				<img src="img/svg/load.svg" alt="">
				<b>Посмотреть остальные</b>
			</a>

		</div>
	</section>

	<footer class="footer">
		<div class="footer__container container">
			
			<div class="footer__col">
				<a href="/" class="header__logo">auto<b>nomera</b></a>
				<p class="footer__copy">copyright © 2020 all rights reserved</p>
			</div>

			<div class="footer__col">
				<ul class="footer__nav">
					<li><a href="#">Каталог</a></li>
					<li><a href="#">Наши работы</a></li>
					<li><a href="#">Отзывы о нас</a></li>
				</ul>
				<p class="footer__soc header__soc">
					<a href="#" class="header__soc_link header__soc_vk">
						<img src="img/svg/vk.svg" alt="">
					</a>
					<a href="#" class="header__soc_link header__soc_telegram">
						<img src="img/svg/telegram.svg" alt="">
					</a>
					<a href="#" class="header__soc_link header__soc_viber">
						<img src="img/svg/viber.svg" alt="">
					</a>
					<a href="#" class="header__soc_link header__soc_whatsapp">
						<img src="img/svg/whatsapp.svg" alt="">
					</a>
				</p>
			</div>

			<div class="footer__info footer__col">
				<p><b><a href="tel:+0(123)4567890">+0 (123) 456 78 90</a></b></p>
				<p><b><a href="mailto:adress@gmail.com">adress@gmail.com</a></b></p>
				<p><b>г. Город, ул. Улица 123/45</b></p>
			</div>

		</div>
	</footer>

	<div class="modal" id="order">
		<form action="sendmail.php" class="form" method="post">

			<button class="close order_close" type="button">
				<span></span>
				<span></span>
			</button>

			<h3>Оставьте заявку, <br>мы свяжемся с Вами</h3>
			<input type="hidden" name="subject" value="Узнать подробнее!">

			<div class="">
				<input type="text" name="name" placeholder="Имя" required>
			</div>
			<div class="">
				<input type="tel" name="phone" placeholder="Телефон" required>
			</div>
			<div class="">
				<button type="submit" class="btn" name="submit">Отправить</button>
			</div>
		</form>
	</div>

	<div class="modal" id="thanks">
		<button class="close thanks_close" type="button">
			<span></span>
			<span></span>
		</button>
		<h3>Спасибо за доверие!</h3>
		<p>Мы обязательно с вами свяжемся!</p>
	</div>

	<script src="js/scripts.min.js"></script>

</body>
</html>
