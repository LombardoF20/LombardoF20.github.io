<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ekvatoria
 */

?>

<div class="block-communication-fos">
	<?php echo do_shortcode( '[contact-form-7 id="79" title="Звязатися з нами"]' ); ?>
</div>
<div class="block-call-fos">
	<?php echo do_shortcode( '[contact-form-7 id="80" title="замовити дзвінок"]' ); ?>
</div>

<div class="block-alertComplict-zayava">
	<div class="close-btn">
		<img id="close-btn-zayava" class="btn-close" src="/wp-content/themes/ekvatoria/img/btn_close.svg" alt="">
	</div>
	<img src="/wp-content/themes/ekvatoria/img/popup-complict.svg" alt="">
	<span>Заявка прийнята</span>
	<p>Очікуйте, будь ласка, на дзвінок <br>
від нашого менеджера найближчим часом!</p>
</div>

<div class="block-alertComplict-comunic">
	<div class="close-btn">
		<img id="close-btn-comunic" class="btn-close" src="/wp-content/themes/ekvatoria/img/btn_close.svg" alt="">
	</div>
	<img src="/wp-content/themes/ekvatoria/img/popup-complict.svg" alt="">
	<span>Дякуємо!</span>
	<p>Ваша заявка відправлена! <br> Наш менеджер зв’яжеться з Вами в найближчий час</p>
</div>

<footer class="container-fluid block-footer">
	<div class="container">
		<div class="block-footer-items">
			<p>(с) 2020 effect-m.com Всі права захищені</p>
			<div class="block-footer-items_icon">
				<a href="#"><img src="/wp-content/themes/ekvatoria/img/icon_insta.svg" alt="инстаграм"></a>
				<a href="#"><img src="/wp-content/themes/ekvatoria/img/icon_fb.svg" alt="фейсбук"></a>
			</div>
			<p><a href="#">Політика конфіденційності</a></p>
		</div>
	</div>
</footer>
<script type="text/javascript">
window.onload = function(){
	setTimeout(function(){
		document.getElementById('plugin-fb').src = 'https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEffectMarketing%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId';
	},3000)
	setTimeout(function(){
		document.getElementById('plugin-google-map').src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2538.3304295606554!2d30.39788081573278!3d50.4908076794809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cd10cb667815%3A0x21638cd5794aff16!2z0LLRg9C70LjRhtGPINCh0LjRgNC10YbRjNC60L4t0KHQsNC00L7QstCwLCAzNSwg0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1581939650369!5m2!1sru!2sua';
	},5000)
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

<script type="text/javascript" src="/wp-content/themes/ekvatoria/js/archive.js"></script>
<?php wp_footer(); ?>

</body>
</html>
