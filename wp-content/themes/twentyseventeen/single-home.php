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
<!--?php
global $post;
$terms = wp_get_post_terms( $post->ID, 'bedroom');
print_r($terms);
$taxonomy_names = get_post_taxonomies( );
  print_r( $taxonomy_names );
    //echo get_post_terms();
 ?-->
<div style="float:left;width:707px;height:747px;margin-left:27px;">
  <p style="">Menzies</p>
  <p>Making room for the important things. Indoor and Outdoor Living at it's best!</p>

  <div class="logo_grid">

       <figure>
          <img src="<?php echo get_field("ee7")["url"];?>" alt="Sample photo">
          <figurecaption style="font-size:15px">Water saving tapware from Reece<figurecaption>
          </figure>
          <figure>
             <img src="<?php echo get_field("ee7")["url"];?>" alt="Sample photo">
             <figurecaption style="font-size:15px">Water saving tapware from Reece<figurecaption>

             </figure>
             <figure>
                <img src="<?php echo get_field("ee7")["url"];?>" alt="Sample photo">
                <figurecaption style="font-size:15px">Water saving tapware from Reece<figurecaption>
                </figure>
  </div>
</div>
<div class="image" style="float:left;max-width:1160px;">
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail();
}  ?>
</div>
<div style="clear:both">

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">




		</main><!-- #main -->


	</div><!-- #primary -->
	<!--?php get_sidebar(); ?-->
</div><!-- .wrap -->
<style>
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 20px;
  align-items: stretch;
  }
.grid img {
  /*border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);*/
  max-width: 100%;
}
.logo_grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 20px;
  align-items: stretch;
  }
.logo_grid img {
  /*border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);*/
  max-width: 100%;
}

</style>



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
  </div>
</div>
<div class="energyFeatures" style="width:1009px;margin:auto;">
<p style="font-size:32px;weight:bold;font-family:lato;">Energy efficient features</p>
<main class="grid">

<figure>
  <img src="<?php echo get_field("ee1")["url"];?>" alt="Sample photo">
  <figurecaption>Energy efficient doors<figurecaption>
</figure>
<figure>
  <img src="<?php echo get_field("ee2")["url"];?>" alt="Sample photo">
  <figurecaption>Double glazed windows<figurecaption>
  </figure>
<figure>
    <img src="<?php echo get_field("ee3")["url"];?>" alt="Sample photo">
    <figurecaption>LED lighting<figurecaption>
    </figure>
<figure>
   <img src="<?php echo get_field("ee4")["url"];?>" alt="Sample photo">
   <figurecaption>Optimal air circulation<figurecaption>
   </figure>
<figure>
   <img src="<?php echo get_field("ee5")["url"];?>" alt="Sample photo">
   <figurecaption>Superior insulation<figurecaption>
   </figure>
<figure>
    <img src="<?php echo get_field("ee6")["url"];?>" alt="Sample photo">
    <figurecaption>Solar hot water system<figurecaption>
    </figure>
<figure>
   <img src="<?php echo get_field("ee7")["url"];?>" alt="Sample photo">
   <figurecaption>Water saving tapware from Reece<figurecaption>
   </figure>
<figure>
   <img src="<?php echo get_field("ee8")["url"];?>" alt="Sample photo">
   <figurecaption>Premium kitchen appliances from SMEG<figurecaption>
   </figure>
</main>
</div>
<div style="width:1009px;margin:auto;">
  <p style="font-size:32px;weight:bold;font-family:lato;">Floorplan</p>
  <figure>
  <img style="border:none;"src="<?php echo get_field("floor_plan")["url"];?>" alt="">
</figure>
</div>

<div class="page-content">
<?php
    $list1Val = get_post_meta($post->ID, 'list1', true);
    if (!empty($list1Val)) {
    ?>
        <div class="list1">
            <?php echo $list1Val; ?>
        </div>
    <?php } ?>

    <?php
    $list2Val = get_post_meta($post->ID, 'list2', true);
    if (!empty($list2Val)) {
    ?>
        <div class="list2">
            <?php echo $list2Val; ?>
        </div>
    <?php } ?>
  </div>


<div class="page-content">
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    wp_reset_query();
    ?>
</div>

<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
print_r ($tags[0]->name);
if ($tags) {
echo 'Related Posts';
$first_tag = $tags[0]->term_id;
$args=array(
  'post_type' => 'home',
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>2,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {echo "true";}
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
<?php  $fimage_url = ''; $url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium' ); if($url && isset($url[0])){$fimage_url = $url[0];}?>
<div class="thumb" style="background-image: url('<?php echo $fimage_url; ?>')">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</div>
<?php
endwhile;
}
wp_reset_query();
}
?>
<?php
  echo do_shortcode('[contact-form-7 id="149" title=”Contact form 1"]'  );
?>





<?php get_footer();?>

<style>
.tab {
overflow: hidden;
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

.page-content{
  width:1009px;
  margin:auto;
}

.page-content .list1,
.page-content .list2 {
	margin: 0 0 50px 0;
}
.page-content ul {
	list-style: none;
	padding: 0;

	columns: 2;
	-webkit-columns:60px 2;
	-moz-columns: 2;
  /*-webkit-column-count: 2;
   -moz-column-count: 2;
   column-count: 2;

   -webkit-column-gap: -145px;
   -moz-column-gap: 0px;
   column-gap: 0px;*/

}

.page-content ul li {
	padding: 0 0 0 34px;
  font-size:18px;
  font-family: lato;
  font-weight: lighter;
}

.page-content ul li:before {
	content: "\2022";
	padding: 0 25px 0 0;
	margin: 0 0 0 -34px;
}

.page-content h2,
.page-content h3 {
	font-family: lato;
	font-size: 32px;
	color: #1D3A49;
}
.page-content h2 {
	text-transform: uppercase;
	text-align: center;
	margin: 0 0 30px 0;
}

.page-content h3 {
	margin: 0 0 15px 0;
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
/*.whatsinbook{
  max-height: 120px;
  position: relative;
  overflow: hidden;
}*/

/*.whatsinbook .read-more {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  text-align: center;
  margin: 0; padding: 30px 0;

   "transparent" only works here because == rgba(0,0,0,0)
  background-image: linear-gradient(to bottom, transparent, black);
}*/
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

jQuery(document).ready(function($) {
    //toggle the component with class accordion-body
	$(".accordion-head").click(function() {
		if ($('.accordion-body').is(':visible')) {
			$(".accordion-body").slideUp(300);
			$(".plusminus").text('+');
		}
        if ( $(this).next(".accordion-body").is(':visible')) {
            $(this).next(".accordion-body").slideUp(300);
            $(this).children(".plusminus").text('+').removeClass('open');
        } else {
            $(this).next(".accordion-body").slideDown(300);
            $(this).children(".plusminus").text('-').addClass('open');
        }
	});
})


</script>
<style>

.page-content .accordion-container {
	width: 100%;
	padding: 55px 0;
}

.page-content .accordion-main-head {
	font-family: Lato;
	font-size: 32px;
	/*text-transform: uppercase;*/
  weight:bold;
	color: #484848;
	margin: 0 0 10px 0;
}

.page-content .accordion-section {
	width: 100%;
	border-bottom: 1px solid #A9BBBC;
}

.page-content .accordion-section:first-child {
	border-top: 1px solid #A9BBBC;
}

.page-content .accordion-head {
	font-family:Lato;
    font-size: 20px;
	color: #557700;
   	cursor: pointer;
	padding: 20px 85px 20px 35px;
	position: relative;
}

.page-content .accordion-body {
	font-family: 'Rubik-Regular';
    font-size: 12px;
	color: #666666;
	padding: 2px 85px 35px 90px;
}

.page-content .plusminus {
	font-family: 'WeissenhofGrotesk-Medium';
	font-size: 25px;
	float: right;
	position: absolute;
	top: 15px;
	right: 35px;
  font-weight:bold;
}

.page-content .plusminus.open {
	top: 14px;
	right: 38px;
}

.page-content #walkthrough-container {
	width: 80%;
	height: 500px;
	margin: 0 auto 100px auto;
}

.page-content #walkthrough-container iframe {
	width: 100%;
	height: 100%;
	border: 0;
}
</style>
