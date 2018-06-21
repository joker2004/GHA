<?php
/* Template Name: GreenHomes */
get_header();?>
<?php
$testimonials = get_field ( "choose_testimonials" );
if(!empty($testimonials)){
exit;}

 ?>

<div id="primary" class="content-area">
<div class="banner">
  <div class="container">
    <?php
    if ( has_post_thumbnail() ) {
    the_post_thumbnail();
    }  ?>
    <!--img src="<?php echo get_template_directory_uri();?>/images/Images/homepage-lounge.jpg" alt=""-->
    <div class="centered">
    <label >
  <input class='input 'type="text" style="padding-left:40px;" placeholder="Set build location">
  </label>
</div>

</div>
<script>
$("input").geocomplete();

// Trigger geocoding request.
$("button.find").click(function(){
  $("input").trigger("geocode");
});
</script>
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
    <div class="section3">

    <div class="purple-btn-container left">
        <a href="<?php echo esc_url( home_url( '/home-design' ) ); ?>">
            <div class="purple-btn">
                <h4 class='moreGha' style="display:inline; color:#ccd100;">See all home designs</h4>

            </div>
            <a href="<?php echo esc_url( home_url( '/custom-home-designs' ) ); ?>">
            <div class="purple-btn">
            <h4 class='moreGha' style="display:inline; color:#ccd100;">Customise your own</h4>
          </div>
        </a>
    </div>
  </div>
  <div class="section4">
    <div class="purple-btn-container left">
        <a href="<?php echo esc_url( home_url( '/building-green' ) ); ?>">
            <div class="purple-btn">
                <h4 class='moreGha' style="display:inline; color:#ccd100;">SEE HOW WE BUILD</h4>
                <img src="<?php echo get_template_directory_uri();?>/images/gha-arrow-right.svg" alt="" style="width:20px; padding-top:20px; padding-left:5px;">
            </div>
        </a>
    </div>
  </div>
  <div class="section5">
    <div class="purple-btn-container left">
        <a href="<?php echo esc_url( home_url( '/customer-stories' ) ); ?>">
          <?php

$testimonials = get_field ( "choose_testimonials" );
echo $testimonials;

	if (count ( $testimonials )) {
		?>
			<div class="testimonials">
		<div class="wrapper blog-content book-new"
			style="border-bottom: 2px solid #ececec !important">
			<div class="regular slider">
					<?php
$x=0;
foreach ( $testimonials as $tmonials ) {
			// var_dump($tmonials->post_title);
			// exit;
			?>
						<div class="tms"<?php if($x>0) echo ' style="display:none"';?>> <p class="tms-wapper"><?php echo htmlspecialchars($tmonials->post_content); ?></p><div
						style="color: #797979; display: block; text-align: center; font-family:HelveticaNeueLTStdLt;font-style:italic;font-size:14px;"> ~ <?php echo $tmonials->post_title ?> </div>
				</div>


					<?php $x++; } ?>
					</div>
		</div>
	</div>
	<script type="text/javascript">
    jQuery(document).on('ready', function() {
      jQuery(".regular DIV.tms").show();
      jQuery(".regular").slick({
		  autoplay: true,
		  autoplaySpeed: 5000,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
		adaptiveHeight: true
      });
	})
	  </script>
<?php 	}  ?>
            <div class="purple-btn">
                <h4 class='moreGha' style="display:inline; color:#ccd100;">SEE MORE CUSTOMER STORIES</h4>
                <img src="<?php echo get_template_directory_uri();?>/images/gha-arrow-right.svg" alt="" style="width:20px; padding-top:20px; padding-left:5px;">
            </div>
        </a>
    </div>
  </div>
    <div id="scroll-down-indicator">
        <a href="#service-types">
            <span></span>
        </a>
    </div>
</div><!-- .banner -->

<div id="service-types">
    <div id="service-types-content">
        <div id="service-types-text">
            <p></p>
        </div>
        <div id="service-types-items">
            <div class="service-types-item">
                <div id="construction-icon" class="service-icon">

                </div>
                <div class="service-main-content">
                    <a href="<?php echo esc_url( home_url( '/construction' ) ); ?>">
                        <div class="service-img">

                        </div>
                        <div class="service-label">
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="service-types-item">
                <div id="excavation-icon" class="service-icon">

                </div>
                <div class="service-main-content">
                    <a href="<?php echo esc_url( home_url( '/demolition-excavation' ) ); ?>">
                        <div class="service-img">

                        </div>
                        <div class="service-label">
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="recent-work" class="recent-work-homepage">
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
</div>

<div id="cityscape-section">
    <div class="section-content">
        <div class="section-header"></div>
        <div class="section-text"></div>
        <div class="purple-btn-outer">
            <div class="purple-btn-container middle">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                    <div class="purple-btn">

                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section-5">
    <div class="section-inner">
        <div class="section-content">
            <div class="left-column">
                <div class="left-column-content">
                    <p class="section-header">

                    </p>
                    <p class="section-text">

                    </p>
                    <div class="purple-btn-outer">
                        <div class="purple-btn-container left">
                            <a href="<?php echo esc_url( home_url( '/team' ) ); ?>">
                                <div class="purple-btn">

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-column">

            </div>
        </div>
    </div>
</div>
</div>

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
body{
  width:1860px;
  margin:auto;
}
</style>
