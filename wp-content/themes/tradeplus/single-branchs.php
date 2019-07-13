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

	<div class="page branch">

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
			
					<div class="col-md-6 col-xs-12">
						<?php if($prev_post): ?>
							<a href="<?php echo get_permalink( $prev_post ) ?>" class="prev wow fadeInLeft"><i class="icon icon-arrow"></i>
								<p>Перейти предыдущее<br> направление:<br> «<?php echo $prev_post->post_title ?>»</p>
							</a>
						<?php endif; ?>
					</div>
				

				
					<div class="col-md-6 col-xs-12 end-xs flex wow fadeInRight">
						<?php if($next_post): ?>
							<a href="<?php echo get_permalink( $next_post ) ?>" class="next">
								<p>Перейти в следующие<br> направление:<br> «<?php echo $next_post->post_title ?>»</p><i class="icon icon-arrow"></i>
							</a>
						<?php endif; ?>
					</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
