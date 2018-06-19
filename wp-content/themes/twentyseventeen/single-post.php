<?php
/**
 * The template for displaying all single posts.
 *
 * @package Wholesome Child
 */

get_header(); ?>


<?php
$taxonomy= get_post_taxonomies( );
//  print_r( $taxonomy_names );
  echo wp_get_object_terms();
 exit;?>
 <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="wrapper blog-content default-post">
				<!--div class="inner-wrap-head">
                <h1 class="blog-title "><?php the_title(); ?></h1>
				<?php $postdate = get_the_date('F d, Y'); ?>
                <p class="posted-by xs-visible">Posted by <span><?php the_author(); ?></span> on <?php echo $postdate; ?></p>
				</div-->
				<div class="wrapper-content"></div>
				<?php
					$url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
					$fimage_url = $url[0];
					$imageId = get_post_thumbnail_id(get_the_ID());
						$curImage 	= wp_get_attachment_image_src($imageId , 'custom-single-page-banner',array("left","top"));
						$curimgUrl 	= '';
					//	if($curImage && count($curImage) && $curImage[1] == 980 && $curImage[2] == 409){
							$curimgUrl = $curImage[0];
					///	}else{
						//	$curimgUrl = aa_resized_image($imageId,980, 409,true);
					//	}
				?>
                <!-- <img src="<?php echo $fimage_url; ?>" alt="<?php the_title(); ?>"> -->
				<div class="default-img">
					<div class="thumb" style="background-image: url('<?php echo $curimgUrl; ?>')" title="<?php the_title(); ?>"> </div>
				</div>
				<p class="posted-by xs-hidden">Posted by <span><?php the_author(); ?></span> on <?php the_date('F d, Y'); ?></p>
				<div class="inner-wrap inner-wrap-last ">
					<div class="blog-text">
						<?php the_content(); ?>
					</div>
				</div>

            </div>
			<?php endwhile; endif; ?>
			<?php // $userm = get_the_author_meta('',get_the_author_id()); echo '--- <pre>'; print_r($userm); exit; ?>
			<?php // echo get_the_author_id(). ' --- <pre>'; print_r(get_userdata(get_the_author_id())); exit; ?>

             <div class="blog-social hide-mobile wrapper">
				<!-- <hr class="desk-show" /> -->
				 <?php // comments_template(); ?>

                 <div class="blog-share desktop-screen">
                     <p>Share this on:</p>
                     <div>
                        <?php
						/* if($_SERVER['REMOTE_ADDR'] == '114.69.235.39') { */
						  $sharify_post_title  =  urlencode(get_the_title());
						  $sharify_buttons .= '<div class="sharify-container">';
						  $sharify_buttons .= '<ul>';

						  if ( 1 == get_option('sharify_use_shortlink') ){
							$sharify_share_link = wp_get_shortlink();
							$sharify_share_link_url = wp_get_shortlink();
						  } else{
							$sharify_share_link = get_permalink();
							$sharify_share_link_url = urlencode(get_permalink());
						  }

							if (get_option('sharify_twitter_via')):
								$sharify_twitter_mention = " - via:" . get_option('sharify_twitter_via');
							else:
								$sharify_twitter_mention = "";
							endif;

							if ( 1 == get_option('display_button_twitter') )
								$sharify_buttons .='<li class="sharify-btn-twitter">
														<a title="Tweet on Twitter" href="https://twitter.com/intent/tweet?text='.$sharify_post_title.': '.$sharify_share_link. $sharify_twitter_mention . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;">
															<span class="sharify-icon"><img alt="twitter" src="'.get_stylesheet_directory_uri().'/images/twitter_white.png"></span>
															<!--<span class="sharify-title">Tweet</span>
															<span class="sharify-count" data-url="'.$sharify_share_link.'" data-text="'.get_the_title().' - " >0</span>-->
														</a>
													</li>';
							if ( 1 == get_option('display_button_facebook') )
								$sharify_buttons .='<li class="sharify-btn-facebook">
														<a title="Share on Facebook" href="http://www.facebook.com/sharer.php?u=' . $sharify_share_link_url . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;">
															<span class="sharify-icon"><img alt="facebook" src="'.get_stylesheet_directory_uri().'/images/facebook-white.png"></span>
															<!--<span class="sharify-title">Share</span>
															<span class="sharify-count facebook" data-url="'.$sharify_share_link.'" data-text="'.get_the_title().' - " ></span>-->
														</a>
													</li>';
							if ( 1 == get_option('display_button_pinterest') )
								$sharify_buttons .= '<li class="sharify-btn-pinterest">
								<a title="Share on Pinterest" href="http://pinterest.com/pin/create/button/?url=' . $sharify_share_link . '&media=' . sharify_catch_that_image() . '' . '&description='. get_the_title() .' - ' . $sharify_share_link. '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;">

									<span class="sharify-icon"><img alt="mail" src="'.get_stylesheet_directory_uri().'/images/pinterest-white.png"><!--<i class="sharify sharify-pinterest"></i>--></span>
									<span class="sharify-title">Pinterest</span>
								</a>
							</li>';
							if ( 1 == get_option('display_button_email') )
							$sharify_buttons .= '<li class="sharify-btn-email">
													<a title="Share via mail" href="mailto:?subject='.get_the_title().'&body='.get_option('sharify_custom_email_msg'). ' - ' . $sharify_share_link.'">
														<span class="sharify-icon"><img alt="mail" src="'.get_stylesheet_directory_uri().'/images/mail-white.png"></span>
														<!--<span class="sharify-title">Email</span>
														<span class="sharify-count mail" data-url="'.$sharify_share_link.'" data-text="'.get_the_title().' - " >0</span>-->
													</a>
												</li>';

							$sharify_buttons .= '</ul>';
							$sharify_buttons .= '</div>';
							echo $sharify_buttons;
						?>
                         <br class="clear" />
                     </div>
					 <?php //echo do_shortcode('[simple-social-share]'); ?>
                 </div><!-- block-share-->
                 <div class="social-media xs-visible">
                     <a href="#" class="ico-twitter">Twitter</a>
                     <a href="http://www.facebook.com/wholesomechildau/" class="ico-facebook">Facebook</a>
                     <a href="http://www.instagram.com/wholesome_child/" class="ico-instagram">Instagram</a>
                     <a href="https://www.pinterest.com/" class="ico-pinterest">Pinterest</a>
                     <a href="#" class="ico-mail">Mail</a>
                     <br class="clear" />
                 </div>
 <div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				 <div class="blog-share mobile-screen">
                     <p>Share this on:</p>
                     <div>
                        <?php
						/* if($_SERVER['REMOTE_ADDR'] == '114.69.235.39') { */
						  $sharify_post_title  =  urlencode(get_the_title());
						  $sharify_buttons = '<div class="sharify-container">';
						  $sharify_buttons .= '<ul>';

						  if ( 1 == get_option('sharify_use_shortlink') ){
							$sharify_share_link = wp_get_shortlink();
							$sharify_share_link_url = wp_get_shortlink();
						  } else{
							$sharify_share_link = get_permalink();
							$sharify_share_link_url = urlencode(get_permalink());
						  }

							if (get_option('sharify_twitter_via')):
								$sharify_twitter_mention = " - via:" . get_option('sharify_twitter_via');
							else:
								$sharify_twitter_mention = "";
							endif;

							if ( 1 == get_option('display_button_twitter') )
								$sharify_buttons .='<li class="sharify-btn-twitter">
														<a title="Tweet on Twitter" href="https://twitter.com/intent/tweet?text='.$sharify_post_title.': '.$sharify_share_link. $sharify_twitter_mention . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;">
															<span class="sharify-icon"><img alt="twitter" src="'.get_stylesheet_directory_uri().'/images/twitter_white.png"></span>
															<!--<span class="sharify-title">Tweet</span>
															<span class="sharify-count" data-url="'.$sharify_share_link.'" data-text="'.get_the_title().' - " >0</span>-->
														</a>
													</li>';
							if ( 1 == get_option('display_button_facebook') )
								$sharify_buttons .='<li class="sharify-btn-facebook">
														<a title="Share on Facebook" href="http://www.facebook.com/sharer.php?u=' . $sharify_share_link_url . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;">
															<span class="sharify-icon"><img alt="facebook" src="'.get_stylesheet_directory_uri().'/images/facebook-white.png"></span>
															<!--<span class="sharify-title">Share</span>
															<span class="sharify-count facebook" data-url="'.$sharify_share_link.'" data-text="'.get_the_title().' - " ></span>-->
														</a>
													</li>';
							if ( 1 == get_option('display_button_pinterest') )
								$sharify_buttons .= '<li class="sharify-btn-pinterest">
								<a title="Share on Pinterest" href="http://pinterest.com/pin/create/button/?url=' . $sharify_share_link . '&media=' . sharify_catch_that_image() . '' . '&description='. get_the_title() .' - ' . $sharify_share_link. '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;">

									<span class="sharify-icon"><img alt="mail" src="'.get_stylesheet_directory_uri().'/images/pinterest-white.png"><!--<i class="sharify sharify-pinterest"></i>--></span>
									<span class="sharify-title">Pinterest</span>
								</a>
							</li>';
							if ( 1 == get_option('display_button_email') )
							$sharify_buttons .= '<li class="sharify-btn-email">
													<a title="Share via mail" href="mailto:?subject='.get_the_title().'&body='.get_option('sharify_custom_email_msg'). ' - ' . $sharify_share_link.'">
														<span class="sharify-icon"><img alt="mail" src="'.get_stylesheet_directory_uri().'/images/mail-white.png"></span>
														<!--<span class="sharify-title">Email</span>
														<span class="sharify-count mail" data-url="'.$sharify_share_link.'" data-text="'.get_the_title().' - " >0</span>-->
													</a>
												</li>';

							$sharify_buttons .= '</ul>';
							$sharify_buttons .= '</div>';
							echo $sharify_buttons;
						?>
                         <br class="clear" />
                     </div>
					 <?php //echo do_shortcode('[simple-social-share]'); ?>
                 </div><!-- block-share-->


				<!--
				<a class="btn-blue xs-visible back-recipe" href="<?php echo (get_permalink( get_page_by_path( 'blog' ) ) !=''? get_permalink( get_page_by_path( 'blog' ) )."?postid=".get_the_ID() : 'javascript:void(0)'); ?> ">Back to all posts</a> -->
				<form  action="<?php echo get_permalink( get_page_by_path( 'blog' )); ?>" method="post" id="fbacktolist">
					<input type="hidden" name="postid" value="<?php echo get_the_ID(); ?>" />
					<!-- <a class="btn-blue xs-visible back-recipe" data-refer="<?php echo $strRefer; ?>"  data-href="<?php echo get_permalink( get_page_by_path( 'blog' ))."?postid=".get_the_ID(); ?>" href="<?php echo get_permalink( get_page_by_path( 'show-recipes' ))."?postid=".get_the_ID(); ?>">Back to all recipes</a> -->
					<input class="btn-blue xs-visible back-recipe formbackto" type="submit" value="Back to all posts" />
				</form>
             </div>
			<!-- <hr class="wrapper">-->
			 <?php
				$cat_id = array();
				$categories = get_the_category();
				foreach($categories as $category) {
					$cat_id[] = $category->cat_ID;
				}

				$strCatId = implode(',',$cat_id);

			$args = array(
				'post_type' => 'post',
				'post__not_in' => array($post->ID),
				'posts_per_page'=> -1,
				//'cat' => $strCatId,
				'caller_get_posts'=>1
				);

				$my_query = new WP_Query($args);
			 ?>
			<div class="recipe-also grey-bg">
             <div class="blog-block xs-hidden">
                 <p class="hding">Other Posts</p>
                <div class="container-slider">
                     <div id="other-posts-4" class=" wrapper"    >
						<?php
						if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<div class="item">
								<?php
									$url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
									$fimage_url = "";
									if($url && isset($url[0])) $fimage_url = $url[0];
								?>
                                <div class="thumb" style="background-image: url('<?php echo $fimage_url; ?>')">
                                    <a href="<?php the_permalink();?>"><div class="view-active">
                                        <span>Read post</span>
                                    </div></a>
                                </div>
                                <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><span class="blog-title"><?php echo get_the_title(); ?></span></a>
								<?php  $sepr_recipe = ""; if(get_field( "preparation_time" ) && get_field( "servings" )) { $sepr_recipe = "|"; }?>
								<?php  if(get_field( "preparation_time" ) || get_field( "servings" )) { ?>
                                <p class="blog-date"><?php if(get_field( "preparation_time" )) echo get_field( "preparation_time" ).'<span  class="min-right"> minutes</span> '.$sepr_recipe; if(get_field( "servings" )) echo '<span  class="min-left">Serves </span> '.get_field( "servings" ); else  echo '&nbsp;';  ?></p>
								<?php } ?>
                            </div>

							<?php
							endwhile;
						}
						wp_reset_query();
						?>
                    </div>
                   <!-- <span id="next"></span>
                    <span id="prev"></span>-->
                </div>
                <hr class="wrapper"/>
			 </div>
			 <!--MANDY SECTION-->
			<?php
				$userInfo = get_userdata(get_the_author_id());
				$username = $userInfo->data->display_name;
				$userUrl = ''; //$userInfo->data->user_url;
				$userDesc = get_the_author_meta('description');
				$userDesignation = get_field('designation', 'user_'.get_the_author_id());
				$userImgUrl = get_avatar_url(get_the_author_id())? get_avatar_url(get_the_author_id()) : get_stylesheet_directory_uri().'/images/placeholder.png';
				if(get_the_author_id() == 1) {
					$userImgUrl = get_field('ha_image', 4);
					$username = get_field('ha_title',4);
					$userDesignation = get_field('designation',4);
					$userDesc = get_field('ha_content',4);
					$userUrl = get_permalink(130);
				}


			?>
             <div class=" xs-hidden">
                <!-- <p>About the Author</p> -->
              <!--  <div class="mandy-block">
                    <img src="<?php echo $userImgUrl; ?>" alt="<?php echo $username; ?>" />
					<div class="left-bgmd" style='background:url("<?php echo $userImgUrl; ?>") no-repeat ' ></div>
                    <div class="mandy-info">
                        <h1><?php echo $username; ?></h1>

						<?php if($userDesc) { ?>
                        <p><?php echo $userDesc; ?> </p>
						<?php } ?>
						<?php if($userUrl) { ?>
							<a href="<?php echo $userUrl; ?>">Read more</a>
						<?php } ?>
                    </div>
                </div>    -->
             </div>
			 <!--
			<div class="blog-check-out">
            <div class="check-out wrapper">
                <p>ALSO CHECK OUT</p>
                <div class="item">
                    <a href="<?php echo get_permalink(89); ?>">
                        <div class="thumb" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/consultation.png')">
                            <div class="view-active"></div>
                            <span>Consultation</span>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo get_permalink(126); ?>">
                        <div class="thumb" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/workshop.jpeg')">
                            <div class="view-active"></div>
                            <span>Workshop</span>
                        </div>
                    </a>
                </div>
                <hr class="wrapper"/>
            </div>
			</div>
			-->
	<script type="text/javascript">
	$postid = jQuery("form#fbacktolist input[name='postid']").val()
	curent = location.href
	window.onpopstate = function(event) {
		window.location.href = document.location;
	};
	list_cookie = '<?php echo $_COOKIE["list_id_".get_the_ID()."_visiblecount"]; ?>'
	if(list_cookie != "")
	{
			history.pushState({}, "1", home_url+"/blog/?postid="+$postid);
			history.pushState({}, "",curent );
	}
	</script>
<?php get_footer(); ?>
