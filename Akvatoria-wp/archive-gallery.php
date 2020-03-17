<?php

	/*
	Template Name: Archives Галерея UA
	*/

get_header('ua');
?>

<link rel="stylesheet" href="/wp-content/themes/ekvatoria/css/archive-gallery.css">

	<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="col-3 page-header-title">
					<?php
						printf( __('%s', 'akvatoria'), '<span class="archive-title">' . single_cat_title(' ', false) . '<span>' );
					?>
				</div>
			</header><!-- .page-header -->

			<?php ekvatoria_post_thumbnail();
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			 ?>

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
					get_template_part( 'template-parts/content-akcii', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>
		<?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); ?>
	</div>

	<div class="container">
				<div class="row">
<?php
  $count_items = 8;//кол-во выводимых элементов
  $paged = get_query_var( 'paged', 1 );//Получаем текущую страницу
  $id = get_category_by_slug( 'galereya' )->cat_ID;//получаем id рубрики. У меня рубрика новости.
  $recent = new WP_Query( "cat=$id&posts_per_page=$count_items&paged=$paged" );//Сам запрос
  while ( $recent->have_posts() ) {
    $recent->the_post();
    ?>
			<div class="post_style col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12 ">
				<div class="post_style_item"><a href="<?php the_permalink()?>" rel="bookmark" class="post_a"><?php the_post_thumbnail('post_thumb')?></a>
				<div class="post-txt">
					<div class="">
						<!-- <hr style="border-top: 1px solid #3A3A3A;margin-top: 0;"> -->
						<div class="post_title">
							<a href="<?php the_permalink()?>" rel="bookmark" class="post_a"><?php the_title();?></a>
						</div>
						<div class="post_content">
							<?php the_excerpt();?>
							<!-- <a href="<?php the_permalink()?>"><br><br><button class="btn btn-green btn-marg">Подробнее</button></a> -->
						</div>
					</div>
				</div>
			</div>
			</div>
    <?php
  }
  wp_reset_postdata();
?>
</div>
<?php
  wp_pagenavi( array( 'query' => $recent ) );//вывод пагинации по вашему запросу. Все четко:))
?>
<?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); ?>
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
