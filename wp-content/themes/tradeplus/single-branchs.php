<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tradeplus
 */

get_header();
?>

	<div class="page branch content-area">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	<?php
		$next_post = get_next_post();
		$prev_post = get_previous_post();
	?>


	<?php if($prev_post || $next_post): ?>
	<section class="navigate">
		<div class="container">
			<div class="row between-xs">

				<?php if( get_adjacent_post(false, '', true) ) : ?>
					<div class="col-md-6 col-xs-12">
						<a href="<? echo get_permalink( $prev_post ) ?>" class="prev wow fadeInLeft"><i class="icon icon-arrow"></i>
							<p><?php echo $prev_post->post_title ?></p>
						</a>
					</div>
				<? else: ?>
						<? $first = new WP_Query('post_type=branchs&posts_per_page=1&order=DESC'); $first->the_post(); ?>
						<div class="col-md-6 col-xs-12">
							<a href="<? the_permalink(); ?>" class="prev wow fadeInLeft"><i class="icon icon-arrow"></i>
								<p><? the_title() ?></p>
							</a>
						</div>
						<? wp_reset_postdata(); ?>
				<? endif; ?>

				<?php if( get_adjacent_post(false, '', false) ) : ?>
					<div class="col-md-6 col-xs-12 end-xs flex wow fadeInRight">
						<a href="<?php echo get_permalink( $next_post ) ?>" class="next">
							<p><?php echo $next_post->post_title ?></p><i class="icon icon-arrow"></i>
						</a>
					</div>
				<? else: ?>
						<? $first = new WP_Query('post_type=branchs&posts_per_page=1&order=ASC'); $first->the_post(); ?>
						<div class="col-md-6 col-xs-12 end-xs flex wow fadeInRight">
							<a href="<? the_permalink(); ?>" class="next">
								<p><?php the_title() ?></p>
								<i class="icon icon-arrow"></i>
							</a>
						</div>
						<? wp_reset_postdata(); ?>
				<? endif; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
