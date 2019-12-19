<?php /* Template Name: Контакты */ ?>
<?php get_header() ?>

<div class="content-area">
  <section class="intro intro-dark intro-contact">
    <div class="intro__block">
      <div class="main">
        <div id="map"></div>
        <div class="container">
          <div class="row middle-xs">
            <div class="col-md-5 col-xs-12">
              <h1 class="wow fadeInDown"><span>Контакты</span></h1>
              <ul>
                <li data-wow-delay=".5s" class="wow fadeIn">
                  <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
                </li>
                <li data-wow-delay=".6s" class="wow fadeIn">
                  <p><?php the_field('address', 'option'); ?></p>
                </li>
                <li data-wow-delay=".7s" class="wow fadeIn">
                  <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="map-mobile"></div>
</div>
<?php get_footer() ?>