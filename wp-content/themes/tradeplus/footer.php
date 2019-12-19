<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tradeplus
 */

?>

	<footer class="footer">
		<div class="container">
			<div class="row middle-xs">
				<div class="col-xs-12">
					<p>© <?php echo date('Y'); ?> TpadePlus. Все права защищены. Все права на материалы, опубликованные на сайте, охраняются в соответствии с законодательством РФ. При использовании материалов - активная ссылка на источник обязательна. Согласие на обработку персональных данных</p>
				</div>
				<!-- <div class="col-md-2 col-xs-12 end-md"><a href="https://excv.ru?utm_sourse=tradeplus.ru"><img src="<?php echo get_template_directory_uri(); ?>/img/excv-logo.svg" alt=""></a></div> -->
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

<script>
new Swiper('.swiper-container', {
  speed: 1000,
  effect: 'fade',
  autoplay: {
    delay: 4000,
  },
  loop: true,
  fadeEffect: {
    crossFade: true
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  breakpoints: {
    // when window width is <= 320px
    768: {
      autoHeight: true
    },
  }
});
</script>

<script>
	new WOW().init();
</script>
</body>
</html>
