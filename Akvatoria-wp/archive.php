<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ekvatoria
 */

get_header('ua');
?>
<link rel="stylesheet" href="/wp-content/themes/ekvatoria/css/archive.css">

	<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="col-3 page-header-title">
					<?php
						printf( __('%s', 'akvatoria'), '<span class="archive-title">' . single_cat_title(' ', false) . '<span>' );
					?>
				</div>
				<div class="col-9 page-header-icons">
					<img id="btn-news-table" src="/wp-content/themes/ekvatoria/img/table-view.svg" alt="">
					<img id="btn-news-list" src="/wp-content/themes/ekvatoria/img/list-view.svg" alt="">
				</div>
			</header><!-- .page-header -->
			<div class="block-breadcrumbsRybrika">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-12 breadcrumbsRybrika-bread">
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php if(function_exists('bcn_display'))
							{
								bcn_display();
							}?>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-12 breadcrumbsRybrika-rybrika">
						<?php wp_nav_menu( [
							'menu'            => 'Рубрики-UA',
							'container_class' => 'menu-rybrika',
							'items_wrap'      => '<ul class="nav-list">%3$s</ul>'
							 ] ); ?>
					</div>
				</div>
			</div>
			<div class="row block-post">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>
		<?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); ?>
	</div>
	<div class="container block-lastProject">
	  <h2>Останні <span>проекти</span></h2>
	  <div class="row">
	    <div class="col-1 block-lastProject-prev">
	      <div class="swiper-button-prev2">
	        <svg width="30" height="37" viewBox="0 0 30 37" fill="none" xmlns="http://www.w3.org/2000/svg">
	          <path d="M28.5 33.6229L2.94529 18.5L28.5 3.37713L28.5 33.6229Z" stroke="#D2C9CE" stroke-width="3" />
	        </svg>
	      </div>
	    </div>
	    <div class="col-10">
	      <div class="swiper-container-lastProject">
	        <div class="swiper-wrapper">
	          <div class="swiper-slide swiper-slide2">
	            <img src="/wp-content/themes/ekvatoria/img/img-sliderLast.jpg" alt="">
	            <p>Назва проекту №1 <br> Назва об’єкта/клієнта</p>
	          </div>
	          <div class="swiper-slide swiper-slide2">
	            <img src="/wp-content/themes/ekvatoria/img/img-sliderLast.jpg" alt="">
	            <p>Назва проекту №2 <br> Назва об’єкта/клієнта</p>
	          </div>
	          <div class="swiper-slide swiper-slide2">
	            <img src="/wp-content/themes/ekvatoria/img/img-sliderLast.jpg" alt="">
	            <p>Назва проекту №3 <br> Назва об’єкта/клієнта</p>
	          </div>
	          <div class="swiper-slide swiper-slide2">
	            <img src="/wp-content/themes/ekvatoria/img/img-sliderLast.jpg" alt="">
	            <p>Назва проекту №4 <br> Назва об’єкта/клієнта</p>
	          </div>
	          <div class="swiper-slide swiper-slide2">
	            <img src="/wp-content/themes/ekvatoria/img/img-sliderLast.jpg" alt="">
	            <p>Назва проекту №5 <br> Назва об’єкта/клієнта</p>
	          </div>
	          <div class="swiper-slide swiper-slide2">
	            <img src="/wp-content/themes/ekvatoria/img/img-sliderLast.jpg" alt="">
	            <p>Назва проекту №6 <br> Назва об’єкта/клієнта</p>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-1 block-lastProject-next">
	      <div class="swiper-button-next2">
	        <svg width="30" height="37" viewBox="0 0 30 37" fill="none" xmlns="http://www.w3.org/2000/svg">
	          <path d="M1.5 3.37713L27.0547 18.5L1.5 33.6229L1.5 3.37713Z" stroke="#D2C9CE" stroke-opacity="0.8" stroke-width="3" />
	        </svg>
	      </div>
	    </div>
	  </div>
	</div>
<div class="container-fluid block-cf7">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-0 block-contacForm-man">
				<img src="/wp-content/themes/ekvatoria/img/img-cf7-man.png" alt="">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="block-contacForm-h2">
					<h2>Виникли питання?</h2>
					<p>Заповніть форму <span>і ми зв’яжемося з Вами</span></p>
				</div>
				<div class="block-contacForm">
					<?php echo do_shortcode( '[contact-form-7 id="64" title="Виникли питання?"]' ); ?>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-0 block-img-cfR">
				<img src="/wp-content/themes/ekvatoria/img/img.png" alt="">
			</div>
		</div>
	</div>
</div>
	<div class="container-fluid block-contact">
	  <div class="container block-contact-lineL">
	    <div class="row">
	      <div class="offset-lg-1 col-lg-8">
	        <h2>Контакти</h2>
	        <div class="block-contact-left">
	          <div class="block-contact-left_items">
	            <div class="left_item">
	              <img src="/wp-content/themes/ekvatoria/img/point-img.svg" alt="">
	              <p>Україна, м. Київ, <br> вул. Сирецько-Садова, 35</p>
	            </div>
	            <div class="left_item">
	              <img src="/wp-content/themes/ekvatoria/img/phone-img.svg" alt="">
	              <p>8 (800) 111-2222</p>
	            </div>
	            <div class="left_item">
	              <img src="/wp-content/themes/ekvatoria/img/mail-img.svg" alt="">
	              <p>info@acvatoria.com</p>
	            </div>
	            <div class="left_item">
	              <img src="/wp-content/themes/ekvatoria/img/time-img.svg" alt="">
	              <p>Графік роботи <br> Пн - Пт з 9.00 до 18.00</p>
	            </div>
	            <div class="left_item-button">
	              <button id="block-call" type="button">Замовити дзвінок</button>
	            </div>
	          </div>
	          <div class="block-contact-left_map">
	            <iframe id="plugin-google-map"
	              src=""
	              width="" height="" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	          </div>
	        </div>

	      </div>
	      <div class="col-3">
	        <div class="block-contact-right">
	          <div class="block-contact-right_fboock">
	            <iframe id="plugin-fb" src=""
	              width="269" height="" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>


<?php get_footer('uaArchive');?>
