<?php $loop = new WP_Query( array( 'post_type' => 'home', 'posts_per_page' => 10 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

<div class="entry-content">
    <?php the_content(); ?>
</div>
<?php endwhile; ?>
<div class="wrapper  blog-featured recipe-featured">
                <div class="page-subheader">
                    <h1><?php the_title(); ?></h1>

					<span class="items-number">10</span>
                    <br class="clear" />
					<?php the_content(); ?>
                </div>
				<?php
				$visibleCount = "";
				$class = array();

				if(isset($_REQUEST['postid']) && $_REQUEST['postid'] != "")
				{

					$postid = $_REQUEST['postid'];
					if($_COOKIE["list_id_".$postid."_visiblecount"])
					{
						$visibleCount = $_COOKIE["list_id_".$postid."_visiblecount"];
						if(trim($_COOKIE["list_id_".$postid."_filteropt"] != ""))
						{
							$class = (explode(",",trim($_COOKIE["list_id_".$postid."_filteropt"],",")));
							$class = array_unique($class);
						}
							delete_option("list_id_".$postid."_visiblecount_".getCurrentip());
							delete_option("list_id_".$postid."_filteropt_".getCurrentip());

					}
				}

					$cterms = get_field("Recipes_filter_by_category");
				$terms = get_terms("recipe_category", array ('orderby'=>'name','order'=>'asc'));
					$count = count($cterms); //How many are they?
					$filtersShowLIst = '';
					$availableFilter = ' ';
					$slug_t = array();
					if ( $count > 0 ){  //If there are more than 0 terms
						foreach ( $cterms as $term ) {  //for each term:
							if($term->slug != 'featured-recipes'){
								$_filter_class ="";
								if(in_array($term->slug,$class))
								{
									$_filter_class = "filter-selected selected";
								}
								$filtersShowLIst .= ' <div class="'.$_filter_class.'">'.$term->name.'<label>X</label></div> ';
								$availableFilter .= ' <div data-filter=.'.$term->slug.' data-class="'.$term->slug.'" data-count="'.$term->count.'" data-id="'.$term->term_id.'" class="filter-opt '.$_filter_class.'">'.$term->name.' <em>('.$term->count.')</em></div>';
							}
							$slug_t[] .= $term->slug;
						}
					}
				?>
				<?php  $terms = get_terms( 'category', array ('orderby'=>'name','order'=>'asc')); ?>
				<input type="hidden" value="<?php echo $visibleCount; ?>" class="visibleCount" />
				<input type="hidden" value="<?php echo count($class); ?>" class="classFilter" />
				<input type="hidden" value="<?php echo $postid; ?>" class="classpostid" />
				<div class="filter-label xs-visible">

                    <div class="wrapper mobile-fltr">
                        <span>Filter by category</span>
                       <span class="close">CLOSE</span>
                            <?php //echo '<span class="xl-hidden filtered-note">Filtered:</span>';
							echo $filtersShowLIst; ?>
                        <span class="no-post-showing">Displaying 1-5 of 10 posts</span>

                        <div class="filter-options mobile-fltr-opt">
                            <p>Choose one:</p>
                            <?php echo $availableFilter; ?>

                            <span class="close xs-visible"><em>X</em><br/>CLOSE</span>
                        </div>
                    </div>
                </div>
				<?php
				$f_args = array(
							'post_type' => 'recipes',
							'orderby' => 'ID',
							'order' => 'DESC',
							'posts_per_page' => '1',
							// 'recipe_category'=>'featured-recipes',
							'post_status' => 'publish',
							'meta_query' => array( array(
								'key' => 'is_featured_on_list',
								'value' => 1,
								'compare' => '='
							) ),
						);
				$f_query = new WP_Query( $f_args );
				$exclude_id = '';
				if ( $f_query->have_posts() ) :
					 while ( $f_query->have_posts() ) : $f_query->the_post(); $exclude_id = get_the_ID(); ?>
                <div class="blog-block featured-ingredients">
                    <div class="item">
						<?php
						$imageId = get_post_thumbnail_id(get_the_ID());
						$curImage 	= wp_get_attachment_image_src($imageId , 'custom-detail-banner',array("left","top"));
						$curimgUrl 	= '';
						if($curImage && count($curImage) && $curImage[1] == CUSTBANNERWIDTH && $curImage[2] == CUSTBANNERHEIGHT){
							$curimgUrl = $curImage[0];
						}else{
							$curimgUrl = aa_resized_image($imageId,CUSTBANNERWIDTH, CUSTBANNERHEIGHT,true);
						}
							$url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
							$fimage_url = $url[0];
						?>
						<div class="thumb" style="background-image: url('<?php echo $curimgUrl; ?>')">
                            <a href="<?php the_permalink(); ?>" data-postid="<?php echo get_the_ID();?>"><div class="view-active">
                                <span>View recipe</span>
                            </div></a>
							<p class="featured xs-visible">Featured</p>
							<a class="mobile-view" href="<?php the_permalink(); ?>"></a>
                        </div>
						<!--
						<?php if( have_rows('information') ): ?>
							<div class="ingredients">
							<?php while( have_rows('information') ): the_row();
								$label 	= get_sub_field('label');
								$imgObj = get_sub_field('value');
								$icon = '';
								if($imgObj && isset($imgObj['sizes']) && isset($imgObj['sizes']['custom-icon']) && !empty($imgObj['sizes']['custom-icon']) ) $icon = $imgObj['sizes']['custom-icon']; ?>
									<span class="<?php echo $value->slug ?>" style="background-image: url('<?php echo $icon; ?>')" ><span class="label"><?php echo $label; ?></span></span>
							<?php endwhile; ?>
							</div>
						<?php endif; ?> -->
						<?php
						$inlbs = get_field('info_label');
						?>
							<div class="ingredients">

							<?php
							if( $inlbs ):
							foreach( $inlbs as $inlb):
									//setup_postdata($inlb);
									$urlIcon = wp_get_attachment_image_src( get_post_thumbnail_id($inlb->ID), 'custom-icon' );
									if($urlIcon) {
										$fimage_url = $urlIcon[0];
									} else {
										$fimage_url = '';
									}
							?>
								<span class="<?php echo $inlb->slug ?>" style="background-image: url('<?php echo $fimage_url; ?>')" ><span class="label hide"><?php echo $inlb->post_title; ?></span></span>
							<?php endforeach; ?>
							<?php endif; ?>
							</div>
							<?php //wp_reset_postdata();  ?>

                    </div>
                </div>
                <div class="blog-short-featured">
                    <p class="featured">Featured</p>
                    <p class="featured-title"> <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); //if(strlen(get_the_title()) <= 26 ){  the_title();  }else{ echo substr(get_the_title(),0,23)."..."; } ?></a> </p>
					<?php  $sepr_recipe = ""; if(get_field( "preparation_time" ) && get_field( "servings" )) { $sepr_recipe = "|"; }?>
                    <!--p class="featured-date icon-enable" ><?php if(get_field( "preparation_time" )) echo get_field( "preparation_time" ).' <span class="min-right">minutes</span>'.$sepr_recipe; if(get_field( "servings" )) echo '<span class="min-left">Serves</span> '.get_field( "servings" );  ?></p-->
                    <!--<div class="featured-share xs-hidden">
                        <p><span>1.1K</span> SHARES</p>
                    </div>-->
					<div class="featured-short-content lg-visible"><?php echo substr(get_the_excerpt(), 0, 150); ?>...<!-- <a href="<?php the_permalink(); ?>">Read More</a> --></div>
                   <?php
						if(get_field('testimonials')) {
							$testimonialObjs = get_field('testimonials');

							if( $testimonialObjs ): ?>
							<div class="testimonial-list featured-short-content featured-testimonial">
								<?php $i = 1; foreach( $testimonialObjs as $testimonialObj):
								//print_r($testimonialObj);
								?>
										<p class="testimonial" <?php echo ($i == 1)? '': 'style="display:none"'; $i++; ?>>
										<span class="wholesome-Tdesktop1600">
										<?php
										if(trim(trim(strip_tags(get_field("short_description_1600",$testimonialObj->ID)),'"“'),"'") != "")
										{
											$content = trim(trim(strip_tags(get_field("short_description_1600",$testimonialObj->ID)),'"“'),"'");
											$content = preg_replace('/[ \t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $content));
											echo displayText($content,345);
										}else{
											$content = trim(trim(strip_tags($testimonialObj->post_content),'"“'),"'");
											$content = preg_replace('/[ \t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $content));
											echo displayText($content,345);
										}
										?>
										<br><span class="testimonial-author"> <?php echo displayText($testimonialObj->post_title,18); ?></span>
										</span>
										<span class="wholesome-Tdesktop">
										<?php

										if(trim(trim(strip_tags(get_field("short_description_1080",$testimonialObj->ID)),'"“'),"'") != "")
										{
											$content = trim(trim(strip_tags(get_field("short_description_1080",$testimonialObj->ID)),'"“'),"'");
											$content = preg_replace('/[ \t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $content));
											echo displayText($content,165);
										}else{
											$content = trim(trim(strip_tags($testimonialObj->post_content),'"“'),"'");
											$content = preg_replace('/[ \t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $content));
											echo displayText($content,165);
										}
										?><br><span class="testimonial-author"> <?php echo displayText($testimonialObj->post_title,18); ?></span></span>
										<span class="wholesome-Tmobile">
										<?php $content = trim(trim(strip_tags($testimonialObj->post_content),'"“'),"'");
										$content = preg_replace('/[ \t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $content));
										echo $content; ?><br><span class="testimonial-author"><?php echo $testimonialObj->post_title; ?></span><!-- <a href="javascript:void(0)"> - <?php echo $testimonialObj->post_title; ?></a> --> </span>
										</p>
								<?php endforeach; ?>
							</div>
							<?php endif;
						}
					?>
                </div>
				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
                <br class="clear" />
            </div>
            <div class="filter-label entry-header">

                <div class="wrapper">
                    <span >Filter by category</span>
                    <span class="close">CLOSE</span>
						<?php echo $filtersShowLIst; ?>
                    <span class="no-post-showing">Displaying 1-5 of 10 posts</span>

                    <div class="filter-options">
                        <p>Choose one:</p>
						<?php echo $availableFilter; ?>

                    </div>
                </div>
            </div>
            <div class="wrapper list-of-recipe">
                <div class="blog-block products filterable-posts">
					<div class="posts-content">
					<?php
					//$exclude_id
					$r_arg = array(
							'post_type' => 'recipes',
							'post_status' => 'publish',
							'posts_per_page'	=> -1,
							'tax_query' => array(
										array(
											'taxonomy' => 'recipe_category',
											'field' => 'slug',
											'terms' => $slug_t,
										),
									),
						);
					if($exclude_id){
						$r_arg['post__not_in'] = array($exclude_id);
					}
					$wpex_port_query = new WP_Query($r_arg);
					$hideShowClass = " active";
					$i = 0;
					$total_post = 0;
					$remainPost = 0;
					if( $wpex_port_query->posts ) {
						$total_post = $wpex_port_query->found_posts;
						$remainPost = $total_post - 6;
						 while ( $wpex_port_query->have_posts() ) : $wpex_port_query->the_post();

							$termsArray = get_the_terms( $post->ID, "recipe_category" );
							$termsString = "";
							$curTerms = array();
							foreach ( $termsArray as $term ) {
								$curTerms[] = $term->slug;
								$termsString .= $term->slug.' ';
							}
							if(count($curTerms) == 1 && $curTerms[0] == 'featured-recipes') continue;
							if($i >= 6) {
								$hideShowClass = " inactive";
							} $i++;
							$active  = "";
							if($visibleCount != "")
							{
								if(count($class)){
									foreach($class as $_c)
									{
										$hideShowClass = " inactive";
										$checkclass = explode(" ",$termsString);

										if(in_array($_c,$checkclass))
										{
											$hideShowClass = "inactive";
											$active = "active";
											break;
										}
									}
								}else if($visibleCount >= 1){

									$active = "active";
									$hideShowClass = "inactive";
								}
							}

						 ?>
						 <?php  if($visibleCount >= 1 && $active == "active"){ $visibleCount = $visibleCount - 1;  ?>
						 <div id="postid_<?php echo $post->ID; ?>" class="item <?php echo $termsString . $active; ?>" style="">
						 <?php  }else{ ?>
					<div id="postid_<?php echo $post->ID; ?>" class="item <?php echo $termsString . $hideShowClass; ?>" style="">
						 <?php } ?>
						<div class="rp-item-inner">
                        <?php  //$fimage_url = ''; $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' ); if($url && isset($url[0])){$fimage_url = $url[0];}
							$postImageId = get_post_thumbnail_id($post->ID);
							$postCurImage 	= wp_get_attachment_image_src($postImageId , 'custom-post-list');
							$fimage_url 	= '';
							if($postCurImage && count($postCurImage) && $postCurImage[1] == CUSTPOSTLISTWIDTH && $postCurImage[2] == CUSTPOSTLISTHEIGHT){
								$fimage_url = $postCurImage[0];
							}else{
								$fimage_url = aa_resized_image($postImageId,CUSTPOSTLISTWIDTH, CUSTPOSTLISTHEIGHT,true);
							}
						?>
                        <div class="thumb" style="background-image: url('<?php echo $fimage_url; ?>')">
                            <a href="<?php the_permalink(); ?>" data-postid="<?php echo get_the_ID();?>"><div class="view-active">
                                <span>View recipe</span>
                            </div></a>
							<a class="mobile-view" href="<?php the_permalink(); ?>" data-postid="<?php echo get_the_ID();?>"></a>
                        </div>
						<!--
						<?php if( have_rows('information') ): ?>
							<div class="ingredients">
							<?php while( have_rows('information') ): the_row();
								$label 	= get_sub_field('label');
								$imgObj = get_sub_field('value');
								$icon = '';
								if($imgObj && isset($imgObj['sizes']) && isset($imgObj['sizes']['custom-icon']) && !empty($imgObj['sizes']['custom-icon']) ) $icon = $imgObj['sizes']['custom-icon']; ?>
									<span class="<?php echo $value->slug ?>" style="background-image: url('<?php echo $icon; ?>')" ><span class="label"><?php echo $label; ?></span></span>
							<?php endwhile; ?>
							</div>
						<?php endif; ?> -->
						<?php
						$inlbs = get_field('info_label');
						?>
							<div class="ingredients">
							<?php
							if( $inlbs ):
							foreach( $inlbs as $inlb):
									$urlIcon = wp_get_attachment_image_src( get_post_thumbnail_id($inlb->ID), 'custom-icon' );
									if($urlIcon) {
										$fimage_url = $urlIcon[0];
									} else {
										$fimage_url = '';
									}
							?>
								<span class="<?php echo $inlb->slug ?>" style="background-image: url('<?php echo $fimage_url; ?>')" ><span class="label hide"><?php echo $inlb->post_name; ?></span></span>
							<?php endforeach; ?>
							<?php endif; ?>
							</div>
							<?php  $sepr_recipe = ""; if(get_field( "preparation_time" ) && get_field( "servings" )) { $sepr_recipe = "|"; }?>
						<p class="blog-title"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>" data-postid="<?php echo get_the_ID();?>"><?php the_title(); ?></a></p>
                        <!--<div class="post-share xs-hidden">
                            <p></span> Shares</p>
                            <div class="specific-shares">
                               <?php
								$open_window_js = "javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');  return false;";
								echo '<a class="facebook-share" id="ref_fb" target="_blank"  href="http://www.facebook.com/sharer.php?s=100&amp;p[title]='.get_the_title().'&amp;p[summary]='.get_the_excerpt().'&amp;p[url]='.urlencode(get_permalink()).'&amp;p[images][0]='.$fimageurl.'" onclick="'.$open_window_js.'" title="facebook">Share</a>';
								echo '<a class="twiter-share" id="ref_tw" href="http://twitter.com/home?status='.get_the_title().'+'.urlencode(get_permalink()).'"  onclick="'.$open_window_js.'">Tweet</a>';
								?>
                            </div>
                        </div>-->
						</div>
                    </div>

					<?php
						endwhile;
						wp_reset_postdata();
						$total_post = $i;
						$remainPost = $total_post - 6;
					}
					?>

                    <br class="clear" />
					</div>
					<?php $showLoadMore = ""; if($remainPost < 1) { $remainPost = 0;  $showLoadMore = " style='display:none' ";  } ?>
                    <a href="javascript:void(0)" id="loadMoreAction" data-curpage="1" class="btn-red" <?php echo $showLoadMore; ?> data-total="<?php echo $total_post; ?>">Show more recipes (<span><?php echo $remainPost; ?></span>)</a>
                </div>
            </div>

			<!--FILTER BY CATEGORY FUNCTIONS-->
<?php get_footer(); ?>
