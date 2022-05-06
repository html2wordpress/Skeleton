<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skeleton
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nineteensixtysix' ); ?></a>
	
	<header id="masthead" class="p-3 bg-dark text-white">
		<nav class="navbar navbar-expand-md bg-dark text-white" role="navigation">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'skeleton' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="<?php bloginfo('url') ?>/" class="navbar-brand">							
				<?php
				// Display the Custom Logo
				the_custom_logo();

				// No Custom Logo, just display the site's name
				if (!has_custom_logo()) {
					?>
					<h3><?php bloginfo('name'); ?></h3>
					<?php
				}
				?>			
			</a>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'skeleton-main-menu',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <p>
				<label for="s"><?php _e( '' , 'nineteensixtysix' ); ?></label>
				<input class="form-control form-control-dark" type="text" name="s" id="s" value="" data-swplive="true" placeholder="<?php echo esc_attr_x( 'Type Something', 'placeholder' ) ?>"/>
			</p>
        </form>

        <div class="text-end">
          <?php dynamic_sidebar( 'header-2' ); ?>          
        </div>				
	</div>
	</nav>
	
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>	
	
  </header>			