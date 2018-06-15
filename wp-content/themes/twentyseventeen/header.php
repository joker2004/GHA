<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
	<div class="site-header-main">
		<div class="header-logo" >
			<a id="header"href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img style="height:47px; width:143px;background:none;" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
			</a>
		</div>
    <div class="header-right" >
      <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
      <!--input type="text" style="padding-left:60px;" placeholder="Set build location"-->
      <!--input type="text"  style="padding-left:30px;" name="name" placeholder="hi" value="">
       <img role="img" src="<?php echo get_template_directory_uri();?>/images/gha-search-location.svg" /-->


</div>
<div class="locate">
  <label >
<input type="text" style="padding-left:40px;" placeholder="Set build location">
</label>
</div>
<div class = header-last>
<form>
<input type="button" value="Make an Enquiry" onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />
</form>
</div>
</div >
<div>

			<!--?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'container_class' => 'desktop-nav' ) ); ?-->
      <!--?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?-->


	</div><!-- .site-header-main -->
</header><!-- .site-header -->

<div class="site-overlay"></div>
<style>
.header-logo {
    float: left;
    padding: 20px 0 0 25px;
}
.header-right {
    float: left;
    padding: 20px 250px 0 25px;
    font-size: 15px;
    font-weight: bold;
    font-family: Lato;

}

.locate label {
  position: relative;
  float:left;
  width: 15%;
  padding-top: 20px;


}

.locate label:before {
  content: "";
  position: absolute;
  left: 10px;
  top: 20px;
  bottom: 0;
  width: 25px;
  background: url("<?php echo get_template_directory_uri();?>/images/search.svg") center / contain no-repeat ;
}

input {
  padding: 10px 30px;
}
.header-last {
  float:left;
  padding-left: 15px;
  padding-top: 20px;
}
.site-header-main a{
  width:100% !important;
}
</style>
