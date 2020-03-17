<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="wp-content/themes/ekvatoria/css/bootstrap.css">
	<link rel="stylesheet" href="wp-content/themes/ekvatoria/css/main.css">
	<link rel="stylesheet" href="wp-content/themes/ekvatoria/css/swiper.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="container-fluid block-main-backGround">
    <nav class="container block-nav">
      <div class="offset-lg-0 col-lg-2 offset-md-0 col-md-2 offset-sm-1 col-sm-4 col-xs-3 col-6 block-nav-icon">
        <a href="<?php echo get_home_url(); ?>"><img src="/wp-content/themes/ekvatoria/img/img-logoNav.svg" alt="икон"></a>
      </div>
      <div class="col-lg-7 col-md-7 col-sm-10 block-nav-page">
					<?php wp_nav_menu( [
						'menu'            => 'menu-1',
						'container_class' => 'menu-header',
						'items_wrap'      => '<ul class="nav-list">%3$s</ul>'
						 ] ); ?>
      </div>
			<div class="block-nav-burgerBtn">
				<div></div>
				<div></div>
				<div></div>
			</div>
      <div class="col-lg-2 offset-md-0 col-md-2 offset-sm-2 col-sm-4 offset-0 col-6 nav-button">
        <button id="communication-btn-fos" type="button" name="button">Зв’язатися з нами</button>
      </div>
    </nav>
    <div class="container block-main">
      <div class="col-lg-12 ">
        <div class="main-h1">
          <img src="../wp-content/themes/ekvatoria/img/h1-dec1.svg" alt="">
          <h1><span>проектно-монтажна організація</span><br>з власним виробництвом та імпортом </h1>
          <img src="../wp-content/themes/ekvatoria/img/h1-dec2.svg" alt="">
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container-general">
        <div class="gallery-wrap wrap-effect-1">
          <div class="item">
            <div class="item-wrapp">
              <span>01</span><br><span class="item-wrapp-txt">Тепла підлога</span>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapp">
              <span>02</span><br><span class="item-wrapp-txt">КОМПЛЕКСНІ СИСТЕМИ ОПАЛЕННЯ</span>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapp">
              <span>03</span><br><span class="item-wrapp-txt">КАНАЛІЗАЦІЙНІ СПОРУДИ</span>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapp">
              <span>04</span><br><span class="item-wrapp-txt">ВОДОПОСТАЧАННЯ І ОЧИСТКА</span>
            </div>
          </div>
          <div class="item">
            <div class="item-wrapp">
              <span>05</span><br><span class="item-wrapp-txt">ВЕНТИЛЯЦІЯ</span>
            </div>
          </div>
        </div>
      </div>
    </div>

		<div class="container-fluid">
			<div class="container block-general-mob">
					<a class="block-general-mob-item" href="#"><span>Тепла <br> підлога</span><span class="block-general-mob-item-number">01</span></a>
					<a class="block-general-mob-item" href="#"><span>КОМПЛЕКСНІ <br> СИСТЕМИ ОПАЛЕННЯ</span><span class="block-general-mob-item-number">02</span></a>
					<a class="block-general-mob-item" href="#"><span>КАНАЛІЗАЦІЙНІ <br> СПОРУДИ</span><span class="block-general-mob-item-number">03</span></a>
					<a class="block-general-mob-item" href="#"><span>ВОДОПОСТАЧАННЯ <br> І ОЧИСТКА</span><span class="block-general-mob-item-number">04</span></a>
					<a class="block-general-mob-item" href="#"><span>ВЕНТИЛЯЦІЯ</span><span class="block-general-mob-item-number">05</span></a>
			</div>
		</div>

    <div class="container-fluid block-content-man">
      <img class="content-man-img" src="/wp-content/themes/ekvatoria/img/img-etapMan.png" alt="">
      <div class="container block-content">
        <div class="offset-lg-3 col-lg-8 offset-md-1 col-md-10 offset-sm-0 col-sm-12">
          <h2 class="content-h2">Відповідальність <span class="content-span">на кожному етапі</span> і <br><span class="content-span">за кінцевий результат</span></h2>
        </div>
        <div class="row content-step">
          <div class="offset-lg-1 col-lg-3 offset-md-0 col-md-6 col-sm-6 col-xs-6 col-6">
            <div class="content-step_item">
              <img src="/wp-content/themes/ekvatoria/img/img-etap1.svg" alt="">
              <span>Власне <br> виробництво</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
            <div class="content-step_item">
              <img src="/wp-content/themes/ekvatoria/img/img-etap4.svg" alt="">
              <span>Власний склад <br> і логістика</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
            <div class="content-step_item">
              <img src="/wp-content/themes/ekvatoria/img/img-etap3.svg" alt="">
              <span>Власний <br> монтаж</span>
            </div>
          </div>

          <div class="offset-lg-1 col-lg-3 offset-md-0 col-md-6 col-sm-6 col-xs-6 col-6">
            <div class="content-step_item">
              <img src="/wp-content/themes/ekvatoria/img/img-etap2.svg" alt="">
              <span>Власний <br> імпорт</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
            <div class="content-step_item">
              <img src="/wp-content/themes/ekvatoria/img/img-etap5.svg" alt="">
              <span>Гарантія</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">
            <div class="content-step_item">
              <img src="/wp-content/themes/ekvatoria/img/img-etap6.svg" alt="">
              <span>Постгарантійне <br> обслуговування</span>
            </div>
          </div>
					  </div>
      </div>
    </div>
  </div>

	<div id="content" class="site-content">
