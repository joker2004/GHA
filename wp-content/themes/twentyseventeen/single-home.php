<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail();
}  ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">




		</main><!-- #main -->


	</div><!-- #primary -->
	<!--?php get_sidebar(); ?-->
</div><!-- .wrap -->

<div class="full-width-wtsinbook">
      <div class="wrapper blog-content book-new">
        <div class="whywrote"
          style="border-top: none; padding: 23px 0 19px;">
          <div class="hidemobile">
            <div class= "draw_rectangle">
            <div class="tab">
              <button class="tablinks active"
                onclick="openColumn(event, 'Design')">Design</button>
              <button class="tablinks" onclick="openColumn(event, 'Features')">Features</button>
              <button class="tablinks" onclick="openColumn(event, 'Floorplan')">Floorplan</button>
              <button class="tablinks" onclick="openColumn(event, 'Amenities')">Amenities</button>
              <button class="tablinks" onclick="openColumn(event, 'GHAInclusions')">Standard GHA Inclusions</button>
              <button class="tablinks" onclick="openColumn(event, 'FAQ')">FAQ</button>
              <button class="tablinks" onclick="openColumn(event, 'Enquire')">Enquire</button>

            </div>
            <div>
            <button class="Request a price"> Request a price</button>
            <div>
          </div>

            <!-- Tab content -->
            <div id="Design" class="tabcontent" style="display: block">
              <div class="whatsinbook"><?php if(get_field("design") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("design"); ?></div>
    <?php } ?></div>
            </div>

            <div id="Features" class="tabcontent" style="display: block">

              <div class="whatsinbook"><?php if(get_field("features") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("features"); ?></div>
    <?php } ?></div>
            </div>

            <div id="Floorplan" class="tabcontent">
              <div class="whatsinbook"><?php if(get_field("floorplan") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("floorplan"); ?></div>
    <?php } ?></div>
            </div>

            <div id="Amenities" class="tabcontent">
              <div class="whatsinbook"><?php if(get_field("amenities") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("amenities"); ?></div>
    <?php } ?></div>
            </div>
            <div id="GHAInclusions" class="tabcontent" style="display: block">

              <div class="whatsinbook"><?php if(get_field("ghainclusions") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("ghainclusions"); ?></div>
    <?php } ?></div>
            </div>
            <div id="FAQ" class="tabcontent" style="display: block">

              <div class="whatsinbook"><?php if(get_field("faq") != "") { ?>
            <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("faq"); ?></div>
            <?php } ?></div>
            </div>
            <div id="Enquire" class="tabcontent" style="display: block">

              <div class="whatsinbook"><?php if(get_field("enquire") != "") { ?>
            <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("enquire"); ?></div>
            <?php } ?></div>
            </div>

          </div>
        </div>
      </div>
    </div>
<?php get_footer();?>

<style>
.tab {
/*overflow: hidden;*/
text-align: center;
width: 100%;
/*border: 1px solid #ccc*/;
/*background-color: #f1f1f1*/;
/*border-bottom: 2px solid #e2e2e2*/;

  margin-top: 82px;
  margin-right: auto;
  margin-left: auto;
  width:1396px;
  height:80px;
  border:1px solid #DDDDDD;
  opacity:100%;


}


/* Style the buttons that are used to open the tab content */
.whywrote {
border: none;
background: none;
padding: 60px 0;
text-align: left;
border-top: 2px solid #e5e5e5;
}

.tab button {
background-color: inherit;
float: none;
display: inline-block;
border: none;
outline: none;
cursor: pointer;
margin: 14px 16px;
padding-top: 31px;
padding-bottom: 30px;
transition: 0.3s;
font-size: 16px;
text-align: center;
color: black;
}

/* Change background color of buttons on hover */
.tab button:hover {
background-color: none;
text-decoration: underline;
color: blue;
}

/* Create an active/current tablink class */
.tab button.active {
background-color: none;
text-decoration: underline;
color: blue;
}

/* Style the tab content */
.tabcontent {
display: none;
/*padding: 6px 12px;*/
/*border: 1px solid #ccc*/;
margin-left:500px;
border-top: none;

position:relative;
width:570px;
height:173px;
overflow:hidden;
}
.whatsinbook{
  /*max-height: 120px;*/
  position: relative;
  overflow: hidden;
}

.whatsinbook .read-more {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  text-align: center;
  margin: 0; padding: 30px 0;

  /* "transparent" only works here because == rgba(0,0,0,0) */
  background-image: linear-gradient(to bottom, transparent, black);
}
</style>
<script>

function openColumn(evt, product_detail) {
	// Declare all variables
	var i, tabcontent, tablinks;
	//evt.tabcontent[0].className += "active";

	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}

	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(product_detail).style.display = "block";
	evt.currentTarget.className += " active";
}


</script>
