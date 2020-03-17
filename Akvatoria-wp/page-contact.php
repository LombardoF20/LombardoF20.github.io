<?php
/*
Template Name: Страница Контакты UA
*/
get_header('ua'); ?>

<link rel="stylesheet" href="/wp-content/themes/ekvatoria/css/gallery.css">

<div class="container">
	<h1 class="h1"><?php the_title(); ?></h1>
	<div class=" breadcrumbsRybrika-bread">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>
	</div>
</div>

			<div id="primary" class="container">
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-akcii', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

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

<?php
get_footer(); ?>
