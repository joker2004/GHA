<?php
/* Template Name: GreenHomes */
get_header();?>
<div id="primary" class="content-area">
<div class="banner">
  <div class="container">
    <img src="<?php echo get_template_directory_uri();?>/images/Images/homepage-lounge.jpg" alt="">
    <div class="centered">
    <label >
  <input type="text" style="padding-left:40px;" placeholder="Set build location">
  </label>
</div>

</div>
    <div class="overlay-content">
      <section>
        <div class="overlay-text1">

            <p><?php echo get_field("tag_line"); ?> </p>
            <p><?php echo get_field("short_description"); ?> </p>
        </div>
        <div class="overlay-text2">
         <div class="square">
           <div style="padding-left:170px;">
           <h2 style="font-weight:bold">Design</h2>

        <p><?php echo get_field("design_info"); ?> </p>
      </div>
        </div>
        <div class="square">
          <div style="padding-left:170px;">
          <h2 style="font-weight:bold">Build</h2>

        <p><?php echo get_field("build_info"); ?> </p>
      </div>
      </div>
        <div class="square">
          <div style="padding-left:170px;">
          <h2 style="font-weight:bold">Save</h2>

        <p><?php echo get_field("save_info"); ?> </p>
      </div>
      </div>
    </div>
  </section>


    </div>
    <div class="overlay-content">
    <div class="section2">
      <div class="overlay-text" >

          <p><?php echo get_field("small_tag"); ?> </p>
          <p><?php echo get_field("section2_title"); ?> </p>
      </div>
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

        <div class="purple-btn-outer">
            <div class="purple-btn-container left">
                <a href="<?php echo esc_url( home_url( '/about-gha' ) ); ?>">
                    <div class="purple-btn">
                        <h4 class='moreGha' style="display:inline; color:#ccd100;">READ MORE ABOUT GHA</h4>
                        <img src="<?php echo get_template_directory_uri();?>/images/gha-arrow-right.svg" alt="" style="width:20px; padding-top:20px; padding-left:5px;">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="section3">
    <div class="overlay-text" >

        <p><?php echo get_field("small_tag"); ?> </p>
        <p><?php echo get_field("section2_title"); ?> </p>
    </div>
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
.square{
  /*float:right;*/
    width: 570px;
    height: 177px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    Background-color: #fff;/* Your Color */
    padding-bottom: 18px;
    padding-top: 20px;

    /*width:25px;*/

}
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
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
section {
    width: 70%;

    height: 600px;



}
 .overlay-text1{
    width: 50%;
    height: 600px;

    float: left;
}
.overlay-text2 {
  float:right;

    height: 600px;

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

</style>
