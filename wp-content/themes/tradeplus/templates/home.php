<?php /* Template Name: Главная */ ?>
<?php get_header() ?>

<section class="intro">
  <div class="swiper-container">
    <div class="swiper-wrapper">
    <?php
      // check if the repeater field has rows of data
      if( have_rows('slider') ):

        // loop through the rows of data
        while ( have_rows('slider') ) : the_row(); ?>

        <div class="swiper-slide">
          <div style="background-image: url(<?php the_sub_field('image'); ?>)" class="intro__block"><img src="<?php the_sub_field('image'); ?>" alt="" class="hidden-md">
            <div class="main section">
              <div class="container">
                <div class="row middle-xs">
                  <div class="col-md-5 col-xs-12">
                    <h1 class="wow fadeInDown"><?php the_sub_field('title'); ?></h1>
                    <p data-wow-delay=".5s" class="wow fadeIn"><?php the_sub_field('description'); ?></p>
                    <div class="flex"><a href="<?php the_sub_field('btn_link'); ?>" data-wow-delay=".7s" class="wow fadeIn btn btn-home"><?php the_sub_field('btn_text'); ?></a></div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php endwhile;

      endif;
    ?>
    </div>
  </div>
</section>

<?php
  while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  endwhile; // End of the loop.
?>

<?php get_footer() ?>