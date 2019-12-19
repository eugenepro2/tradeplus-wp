<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tradeplus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script>
		var directory = '<?php echo get_template_directory_uri(); ?>';
	</script>
</head>

<body <?php body_class(); ?>>
	<div class="out main">
		<header class="header">
			<div class="container">
				<div class="row middle-xs">
					<div class="col-md-2 col-sm-2 col-xs-6"><a href="<?php echo get_home_url()  ?>" class="logo">
							<h1><?php the_field('logo', 'option'); ?></span></h1>
						</a></div>
					<div class="col-xs-6 end-xs hidden-md">
						<div class="menu-button"><span></span></div>
					</div>
					<div class="col-md-7 col-sm-8 h-100 hidden-xs">
						<nav class="h-100">
							<div class="slide"></div>
							<?php wp_nav_menu(
								array(
									'container' => false,
									'menu_class' => 'h-100'
								)
							); ?>
						</nav>
					</div>
					<div class="col-md-3 col-sm-2 end-xs flex hidden-xs">
						<div class="header__info"><a href="tel: <?php the_field('phone', 'option'); ?>" class="phone"><?php the_field('phone', 'option'); ?></a><a href="mailto:<?php the_field('email', 'option'); ?>" class="mail"><?php the_field('email', 'option'); ?></a></div>
					</div>
				</div>
			</div>
			<div class="header__mobile">
				<div class="block">
					<h3>Меню</h3>
					<?php wp_nav_menu(
							array(
								'container' => false,
							)
						); ?>
					<div class="header__info"><a href="tel: <?php the_field('phone', 'option'); ?>" class="phone"><?php the_field('phone', 'option'); ?></a><a href="mailto:<?php the_field('email', 'option'); ?>" class="mail"><?php the_field('email', 'option'); ?></a></div>
				</div>
			</div>
		</header>
