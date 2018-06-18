<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>



		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<div class="bottomMenu1" style ="float:left;">
					<p>GREEN HOMES AUSTRALIA</p>
              <?php wp_nav_menu( array( 'theme_location' => 'bottom1' ) );?>
    </div>
		<div class="bottomMenu2" style ="float:left;">
			<p>GHA BUILDERS</p>
			<?php wp_nav_menu( array( 'theme_location' => 'bottom2' ) ); ?>

		</div>

		<div style="float:left">
			<p>CONTACT</p>
			<p>1300 724 661<br>support@greenhomesaustralia.com.au<br>Level 1/125 Byng Street, Orange NSW 2800 </p>

		</div>

		<div class= "certifications">
			<p>CERITIFICATIONS</P>
				<img src="<?php echo get_template_directory_uri();?>/images/Logo/iso50001.png" alt="" style="width:80.99px; height:70.76px"/>
				<img src="<?php echo get_template_directory_uri();?>/images/Logo/HIA-logo.png" alt="" style="width:70.76px; height:70.76px"/>
				<img src="<?php echo get_template_directory_uri();?>/images/Logo/MBA-logo.png" alt="" style="width:114.99px; height:42.16px"/>

		</div>

				<?php
				//get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				//get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<span>
            Green Homes Australia<span>Privacy Policy<span>Terms&Conditions<span>Website by GSquared</span>
        </span>
</body>
</html>
