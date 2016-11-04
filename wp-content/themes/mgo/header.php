<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="site-branding">
					<?php if (is_active_sidebar('sidebar-1')) : ?>
		                    <?php dynamic_sidebar('sidebar-1');
		                    ?>
		            <?php endif; ?>
				</div>
	<button type="button" id="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
      </button>
				<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'main-menu')); ?>
	
			</div>
	
		</header><!-- .site-header -->


	<div id="content" class="site-content">
