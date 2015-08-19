<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage manageScripts
 * @since manageScripts 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php include_once("tagmanager.php") ?>
<div class="wrap">
			<div class="social">
				<a href="https://plus.google.com/b/102221474906232522506/+ManageadwordsSaveYourTime/about" target="_blank">
					<span class="genericon genericon-googleplus"></span>
				</a>
				<a href="https://www.facebook.com/pages/ManageAdwords/682981981833142" target="_blank">
					<span class="genericon genericon-facebook"></span>
				</a>
				<a href="https://twitter.com/manageadwords" target="_blank">
			 		<span class="genericon genericon-twitter"></span>
			 	</a>
			 	<!--a href="" target="_blank">
			 		<span class="genericon genericon-linkedin-alt"></span>
			 	</a-->
			 	<a href="https://github.com/manageAdwords" target="_blank">
			 		<span class="genericon genericon-github"></span>
			 	</a>
			 	<!--a href="" target="_blank">
			 		<span class="genericon genericon-bug"></span>
			 	</a-->
			 	<a href="mailto:contact@manageadwords.com" target="_blank">
			 		<span class="genericon genericon-mail"></span>
			 	</a>
			</div>	
		</div>
<div id="page" class="hfeed site">
<!-- 	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
 -->
	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					       		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="100px"  height="45px"/>
					    	</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</h1>
					<?php else : ?>
						<p class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					       		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="100px" height="45px"/>
					    	</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
