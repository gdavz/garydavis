<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garydavis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'garydavis' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-nav">
			<div class="site-branding">
					<a href="https://davisgary.com/"><?php echo get_bloginfo('name'); ?></a>
			</div><!-- .site-branding -->

			 <nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'garydavis' ); ?></button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav> <!-- #site-navigation -->
		</div>
		
		   <div class="mobile-nav">
				<div class="navWrapper mobileNav">
					<div class="logo-mobile">
					<a href="https://davisgary.com/"><?php echo get_bloginfo('name'); ?></a>
					</div>
					<div class="right">
						<div id="nav-icon" id="menuIcon">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="overlay">
							<div class="overlayContent">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								<p class="open-text">© GARY DAVIS 2022.</p>	
								<!-- <a href="#" id="services">Services</a>
								<a href="#" id="work">Our work</a>
								<a href="#" id="contact">Contact</a>
								<p>Copyright 2022</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		
	</header><!-- #masthead -->
