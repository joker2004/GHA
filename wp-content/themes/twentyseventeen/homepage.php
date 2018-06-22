<?php
/* Template Name: GreenHomes */
get_header();?>


<div id="primary" class="content-area">
<div class="banner">
  <div class="container">
    <?php
    if ( has_post_thumbnail() ) {
    the_post_thumbnail();
    }  ?>
    <!--img src="<?php echo get_template_directory_uri();?>/images/Images/homepage-lounge.jpg" alt=""-->
    <div class="centered">
      <style type="text/css">
   body {
         font-family: sans-serif;
         font-size: 14px;
   }
</style>


<!--script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places" type="text/javascript"></script>
<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('searchTextField');
      var options = {
        types: ['geocode']
      };
      var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script-->



   <!--div>
      <input id="searchTextField" type="text" size="50" placeholder="Enter a location" autocomplete="on">
   </div>
    <label >
  <input class='input 'type="text" style="padding-left:40px;" placeholder="Set build location">
</label-->
</div>

</div>
<!--script>
$("input").geocomplete();

// Trigger geocoding request.
$("button.find").click(function(){
  $("input").trigger("geocode");
});
</script-->
    <div class="overlay-content">
      <section>
        <div class="overlay-text1" >

            <p style="font-size:40px;"><?php echo get_field("tag_line"); ?> </p>
            <p><?php echo get_field("short_description"); ?> </p>
            <div class= "certifications" style="padding-top:50px;">

        				<img src="<?php echo get_template_directory_uri();?>/images/Logo/iso50001.png" alt="" style="width:85.99px; height:80px;margin-right:16px;"/>
        				<img src="<?php echo get_template_directory_uri();?>/images/Logo/HIA-logo.png" alt="" style="width:80px; height:80px;margin-right:16px;"/>
        				<img src="<?php echo get_template_directory_uri();?>/images/Logo/MBA-logo.png" alt="" style="width:130px;padding-bottom:15px;"/>

        		</div>
        </div>
        <div class="overlay-text2">
         <div class="square">
              <img style="width:72px;float:left;margin:-100px;padding-top:120px;" src="<?php echo get_template_directory_uri();?>/images/logo/gha-home-design.svg" alt="">
              <div>

            <h2 style="font-weight:bold">Design</h2>

        <p><?php echo get_field("design_info"); ?> </p>
      </div>
        </div>
        <div class="square">
            <img style="width:72px;float:left;margin:-100px;padding-top:120px;" src="<?php echo get_template_directory_uri();?>/images/logo/gha-home-build.svg" alt="">
            <div>

          <h2 style="font-weight:bold">Build</h2>

        <p><?php echo get_field("build_info"); ?> </p>
      </div>
      </div>
        <div class="square">
            <img style="width:72px;float:left;margin:-100px;padding-top:120px;" src="<?php echo get_template_directory_uri();?>/images/logo/gha-home-save.svg" alt="">
            <div style="float:left;">
          <h2 style="font-weight:bold">Save</h2>

        <p><?php echo get_field("save_info"); ?> </p>
      </div>
      <div style="clear:both">
      </div>

    </div>
    </div>
    <div style="clear:both">
    </div>

    <style>
    .overlay-text2 {

    border-radius: 5px;
    background-color: #ffffff;
}

.overlay-text2 > div {
  /*  border: 2px solid #ffa94d;*/
    border-radius: 5px;
    background-color: #ffffff;
    padding-left:170px;
    color: #484848;
}
.overlay-text2 {
   display: grid;
   grid-template-columns: repeat(1, 1fr);
  grid-gap:10px;
   grid-template-rows: repeat(3, 200px);
}

.square{
  /*float:right;*/
    width: 570px!important;
    height: 177px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    Background-color: #fff;
    padding-bottom: 18px;
    padding-top: 20px;

    width:25px;

}
.test{
  position: absolute;
    bottom: 20px;
    right: 20px;
  /*  background-color: black;*/
    color: #484848;
    padding-left: 20px;
    padding-right: 20px;
}

    </style>
  </section>



    <div class="overlay-content">
    <div class="section2">
      <div class="overlay-text" style="text-align:center;padding-top:135px;width:451px;margin:auto;" >

          <p style="font-size:12px;font-family:lato;"><?php echo get_field("small_tag"); ?> </p>
          <p style="font-size:40px;font-weight:bold;font-family:lato"><?php echo get_field("section2_title"); ?> </p>
      </div>
      <div class="list-content" style="margin:auto;padding-left:232px;/*margin-top:334px;*/">
      <div class="row">
    <div class="column" >
      <div style="padding-left:60px;">
      <h2 style="font-weight:bold">Fully inclusive quote</h2>
      <p><?php echo get_field("one"); ?> </p>
    </div>
    </div>
    <div class="column">
      <div style="padding-left:60px;">
      <h2 style="font-weight:bold">Honest advice</h2>
      <p><?php echo get_field("two"); ?> </p>
    </div>
  </div>
    <div class="column">
      <div style="padding-left:60px;">
      <h2 style="font-weight:bold">Top quality finish</h2>
      <p><?php echo get_field("three"); ?> </p>
    </div>
  </div>
</div>
    <div class="row">
    <div class="column">
      <div style="padding-left:60px;">
      <h2 style="font-weight:bold">Fixed price contracts</h2>
      <p><?php echo get_field("four"); ?> </p>
    </div>
  </div>
    <div class="column">
      <div style="padding-left:60px;">
      <h2 style="font-weight:bold">1st class service</h2>
      <p><?php echo get_field("five"); ?> </p>
    </div>
  </div>
    <div class="column">
      <div style="padding-left:60px;">
      <h2 style="font-weight:bold">Enjoy the experience</h2>
      <p><?php echo get_field("six"); ?> </p>
    </div>
  </div>
</div>
</div>
<div class="purple-btn-outer" style="text-align:center;padding-top:70px;margin:auto;font-family:lato;">
    <div class="purple-btn-container left">
        <a href="<?php echo esc_url( home_url( '/about-gha' ) ); ?>">
            <div class="purple-btn">
                <h4 class='moreGha' style="display:inline; color:#ccd100;font-size:16px;">READ MORE ABOUT GHA</h4>
                <img src="<?php echo get_template_directory_uri();?>/images/gha-arrow-right.svg" alt="" style="width:20px; padding-top:20px; padding-left:5px;">
            </div>
        </a>
    </div>
</div>
  </div>


    </div>
    <div class="overlay-text" style="text-align:center;padding-top:135px;width:451px;margin:auto;" >
        <p style="font-size:40px;font-weight:bold;font-family:lato">Featured energy efficient home designs

</p>
    </div>
    <div class="post-content">

      <?php
      //$exclude_id
      $r_arg = array(
          'post_type' => 'home',
          'posts_per_page'	=> 3,
          /*'post_status' => 'publish',
          'posts_per_page'	=> -1,
          'tax_query' => array(
                array(
                  'taxonomy' => 'cat',
                  'field' => 'slug',
                  'terms' => $slug_t,
                ),
              ),*/
        );

      if($exclude_id){
        $r_arg['post__not_in'] = array($exclude_id);
      }
      $wpex_port_query = new WP_Query($r_arg);
      $hideShowClass = " active";

      if( $wpex_port_query->posts ) {

         while ( $wpex_port_query->have_posts() ) : $wpex_port_query->the_post();

          $termsArray = get_the_terms( $post->ID, "homes_category" );
          $termsString = "";
          $curTerms = array();
          foreach ( $termsArray as $term ) {
            $curTerms[] = $term->slug;
            $termsString .= $term->slug.' ';
          }
          if(count($curTerms) == 1 && $curTerms[0] == 'featured') continue;


         ?>

         <div id="postid_<?php echo $post->ID; ?>" class="item <?php echo $termsString . $active; ?>" style="">

        <div class="rp-item-inner">
                    <?php  $fimage_url = ''; $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' ); if($url && isset($url[0])){$fimage_url = $url[0];}

                    //echo $fimage_url;
          /*$postImageId = get_post_thumbnail_id($post->ID);
          //echo $postImageId;
          $postCurImage 	= wp_get_attachment_image_src($postImageId , 'custom-post-list');
          $fimage_url 	= '';
        if($postCurImage && count($postCurImage) && $postCurImage[1] == CUSTPOSTLISTWIDTH && $postCurImage[2] == CUSTPOSTLISTHEIGHT){
            $fimage_url = $postCurImage[0];
          }else{
            $fimage_url = aa_resized_image($postImageId,CUSTPOSTLISTWIDTH, CUSTPOSTLISTHEIGHT,true);
          }*/
        ?>
                    <div class="thumb" style="background-image: url('<?php echo $fimage_url; ?>')">
                        <a href="<?php the_permalink(); ?>" data-postid="<?php echo get_the_ID();?>"><div class="view-active">
                            <span><?php the_title();?></span>
                            </div></a>

                            </div>
                            <div class="check">
                           <p class="recipe-info xs-hidden"><?php
      				 echo '<span class="min-left" ></span><span class="min-right"></span>';
               echo '<span class="min-left" >'.'<span class="featured-area icon-enable"></span>'.'<span class=""></span> <b>'.get_field( "landarea" ).'</b><span class="min-right"></span>';if(get_field( "bedrooms" ))
      				 echo '<span class="min-left" >'.'<span class="featured-bedroom icon-enable"></span>'.'<span class="">Be</span> <b>'.get_field( "bedrooms" ).'</b><span class="min-right"></span>';if(get_field( "bathrooms" ))
      				 echo '<span class="min-left">'.'<span class="featured-bathroom icon-enable"></span>'.'<span class="">Ba</span> <b>'.get_field( "bathrooms" ).'</b><span class="min-right"></span>'; if(get_field( "carspaces" ))
      				 echo '<span class="min-left">'.'<span class="featured-carspace icon-enable"></span>'.'<span class="">C</span> <b>'.get_field( "carspaces" ).'</b><span class="min-right"></span>';?></p>

                    </div>





        </div>
                </div>

      <?php
        endwhile;


      }
      ?>


      </div>

    <div class="purple-btn-container left">
        <a href="<?php echo esc_url( home_url( '/home-design' ) ); ?>">
            <div class="purple-btn" style="float:left">
                <input type="button" style="border-radius:4px; padding:10px;width:163px; height:41px;" value="See all home designs"  />

            </div>
            <a href="<?php echo esc_url( home_url( '/custom-home-designs' ) ); ?>">
            <div class="purple-btn1" style="float:left; padding-left:25px">
            <input type="button" style="border-color:#99aa00;border-radius:4px; padding:10px; width:163px; height:41px;" value="Customise your own"  />
          </div>
        </a>
    </div>
  </div>
  <div class="section4" style="margin-top:20px;">
    <div class="overlay-text" style="text-align:center;padding-top:135px;width:451px;margin:auto;" >
        <p style="font-size:40px;font-weight:bold;font-family:lato">Benefits of a green home</p>
        <p style="width:504px;font-size:20px;color:#777777;font-weight:bold;font-family:lato">The environmental friendliness of GHA's industry leading innovation, comes a whole host of tangible, practical benefits for your family and your finances.</p>
    <div class="purple-btn-container left">
        <a href="<?php echo esc_url( home_url( '/building-green' ) ); ?>">
            <div class="purple-btn">
                <h4 class='moreGha' style="display:inline; color:#ccd100;">SEE HOW WE BUILD</h4>
                <img src="<?php echo get_template_directory_uri();?>/images/gha-arrow-right.svg" alt="" style="width:20px; padding-top:20px; padding-left:5px;">
            </div>
        </a>
    </div>
  </div>
  </div>

  <div class="section5">
    <div class="overlay-text" style="text-align:center;padding-top:135px;width:451px;margin:auto;" >
        <p style="font-size:40px;font-weight:bold;font-family:lato">Check out our customer stories
</p>

    <div class="purple-btn-container left">
        <a href="<?php echo esc_url( home_url( '/customer-stories' ) ); ?>">

            <div class="purple-btn">
                <h4 class='moreGha' style="display:inline; color:#ccd100;">SEE MORE CUSTOMER STORIES</h4>
                <img src="<?php echo get_template_directory_uri();?>/images/gha-arrow-right.svg" alt="" style="width:20px; padding-top:20px; padding-left:5px;">
            </div>
        </a>
      </div>
    </div>
  </div>

</div><!-- .banner -->


<!--div id="recent-work" class="recent-work-homepage">
    <div id="recent-work-header">
        <p></p>
    </div>
    <div class="section-content">
        <?php $loop = new WP_Query( array(
            'post_type' => 'project',
            'posts_per_page' => 8 )
        );
        while ( $loop->have_posts() ) : $loop->the_post();
            $custom = get_post_custom();
        ?>

        <div class="column">
            <div class="project-item">
                <div class="item-bg" style="background: url('<?php if (isset($custom['wpcf-project-image'])) { echo $custom['wpcf-project-image'][0]; } ?>') no-repeat;"></div>
                <div class="item-overlay">
                    <p class="project-location">
                    <?php
                        if (isset($custom['wpcf-location'])) {
                            echo $custom['wpcf-location'][0];
                        }
                    ?>
                    </p>
                    <p class="project-type">
                    <?php
                        if (isset($custom['wpcf-project-type'])) {
                            echo $custom['wpcf-project-type'][0];
                        }
                    ?>
                    </p>
                    <div class="purple-btn-outer">
                        <div class="purple-btn-container middle">
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                                <div class="purple-btn">
                                    VIEW PROJECT
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div-->




<?php get_footer();?>
<style>

.rectangle{
  /*float:right;*/
    width: 452px;
    height: 212px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    Background-color: #fff;/* Your Color */
    padding-bottom: 18px;
    padding-top: 20px;

    /*width:25px;*/

}
@media screen and (max-width: 500px) {
    .column {
        width: 100%;
    }
}
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 452px;
    height:212px;
    padding: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-left: 20px;
    margin-top:22px;
    padding-top:30px;
    Background-color: #fff;

}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
section {
    width: 100%;

    min-height: 600px;



}
 .overlay-text1{
    width: 483px;
    height: 600px;
    margin-left:428px;
    padding-top:164px;
    float: left;
}
.overlay-text2 {
  float:left;
padding-top:164px;
    height: 820px;

}
.container {
    position: relative;
    text-align: center;
    color: white;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.section2{
  background:url("<?php echo get_template_directory_uri();?>/images/Images/homepage-lounge.jpg");
  background-size:cover;
  height:1000px;



/*  &:before {
   content: '';
 position: absolute;
 top: 0;
 right: 0;
 bottom: 0;
 left: 0;
 background-image: linear-gradient(to bottom,#000000,#F2F2F2);
 opacity: 1;
 }*/
}
.icon-enable.featured-area {
  background: rgba(0, 0, 0, 0) url("<?php echo get_template_directory_uri();?>/images/Images/gha-area.png") no-repeat scroll left 5px / 18px 18px;
  padding-left: 25px;
  line-height:26px;
}
.icon-enable.featured-bedroom {
  background: rgba(0, 0, 0, 0) url("<?php echo get_template_directory_uri();?>/images/Images/gha-bedroom.png") no-repeat scroll left 5px / 18px 18px;
  padding-left: 25px;
  line-height:26px;
}
.icon-enable.featured-bathroom {
  background: rgba(0, 0, 0, 0) url("<?php echo get_template_directory_uri();?>/images/Images/gha-bathroom.png") no-repeat scroll left 5px / 18px 18px;
  padding-left: 25px;
  line-height:26px;
}
.icon-enable.featured-carspace {
  background: rgba(0, 0, 0, 0) url("<?php echo get_template_directory_uri();?>/images/Images/gha-carspace.png") no-repeat scroll left 5px / 18px 18px;
  padding-left: 25px;
  line-height:26px;
}
.min-right {
  padding-right: 6px !important;
  top: 0px;
}
.min-left {
  padding-left: 6px !important;
  top: 0px;
}
.xs-hidden {
    display: block!important;
}
.active span{
color: #ffffff;

font-size: 24px;
line-height: 29px;
max-width: 90%;
position: relative;
top: 247px;
width: 100%;
left:17px;
font-family: lato;
font-weight: 400;
}
.view-active{
  width:452px;
  height:291px;
  padding-right:20px;
}
.post-content
  {
    display: flex;
    flex-wrap: wrap;
    width:1396px;
    margin-right: auto;
    margin-left: auto;
  }
  .rp-item-inner{
    padding-right:10px;
    padding-top:40px;
  }

.check span{
top:0px!important;
color:black;
left:0px;
font-size:16px;
}
body{
  width:1860px;
  margin:auto;
}
</style>
