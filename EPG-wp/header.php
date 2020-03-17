<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EPG
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EPG</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="/wp-content/themes/epg-theme/css/app.css" rel="stylesheet"></head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
<header>
	<div class="container-fluid block-header">
		<div class="block-header-grad"></div>
		<div class="container">
			<div class="row block-topnav">
				<div class="block-topnav-img">
					<img src="/wp-content/themes/epg-theme/img/logo.png" alt="">
				</div>
				<div class="block-topnav-nav">
					<ul>
						<li><a href="#">УКР</a></li>
						<li><a href="#">ENG</a></li>
					</ul>
					<div class="block-topnav-nav-number">
						<a href="tel:380986049109">38 (098) 60-49-109</a>
						<a href="#">Передзвонити вам?</a>
					</div>
				</div>
			</div>
			<div class="row block-nav">
				<ul class="block-nav-ua">
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Про компанію</a><span></span>
						<ul class="nav-drop">
							<li><a href="#">Нормативні документи</a></li>
							<li><a href="#">Сертифікати</a></li>
							<li><a href="#">FAQ’s</a></li>
							<li><a href="#">Брошури</a></li>
							<li><a href="#">Типові рішення</a></li>
						</ul>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Прес-центр</a><span></span>
						<ul class="nav-drop">
							<li><a href="#">Новини</a></li>
							<li><a href="#">Статті</a></li>
							<li><a href="#">Вакансії</a></li>
						</ul>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Акції</a><span></span>
						<ul class="nav-drop">
							<li><a href="#">Газові котли</a></li>
							<li><a href="#">Інші котли</a></li>
						</ul>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Котли промислові</a><span></span>
						<ul class="nav-drop">
							<li><a href="#">Котельні газові</a></li>
							<li><a href="#">Котельні інші</a></li>
						</ul>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Котельні</a><span></span>
						<ul class="nav-drop">
							<li><a href="#">Теплопостачання</a></li>
							<li><a href="#">Газопостачання</a></li>
						</ul>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Послуги</a><span></span>
						<ul class="nav-drop">
							<li><a href="#">Пальники</a></li>
							<li><a href="#">Насоси</a></li>
							<li><a href="#">Теплообмінники</a></li>
						</ul>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Поставка газа і теплової енергії</a><span></span>
						<ul class="nav-drop">
							<li><a href="#">Проектування</a></li>
							<li><a href="#">Монтаж</a></li>
							<li><a href="#">Пуск</a></li>
							<li><a href="#">Обслуговування</a></li>
							<li><a href="#">Продаж</a></li>
						</ul>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Інженерні системи</a><span></span>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Інше обладнання</a><span></span>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Реалізовані проекти</a><span></span>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Сервіс </a><span></span>
					</li>
					<li class="block-nav-ul-li">
						<a class="block-nav-ul-li-a" href="#">Контакти</a><span></span>
					</li>
				</ul>
			</div>
			<div class="row block-mainH2">
				<h2>Ми - більше, ніж <span>виробник</span></h2>
			</div>
			<div class="row block-header-list">
				<ul>
					<li>Комплексні інженерні рішення</li>
					<li>Виробництво котлів і котелень</li>
					<li>Газифікація. Трубопроводи</li>
				</ul>
			</div>
		</div>
		<div class="row nav-MainSlider">
			<div class="nav-MainSlider-item Slider-item1">
				<h3>01</h5>
				<p>Комплексні <br> інженерні рішення</p>
				<span></span>
				<div class="Slider-item1-bg"></div>
			</div>
			<div class="nav-MainSlider-item Slider-item2">
				<h3>02</h5>
				<p>Виробництво котлів і котелень</p>
				<span></span>
				<div class="Slider-item2-bg"></div>
			</div>
			<div class="nav-MainSlider-item Slider-item3">
				<h3>03</h5>
				<p>Газифікація. <br> Трубопроводи</p>
				<span></span>
				<div class="Slider-item3-bg"></div>
			</div>
			<div class="nav-MainSlider-item Slider-item4">
				<h3>04</h5>
				<p>Поставки <br> енергоносіїв</p>
				<span></span>
				<div class="Slider-item4-bg"></div>
			</div>
		</div>
	</div>
</header>
