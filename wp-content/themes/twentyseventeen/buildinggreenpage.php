<?php
/* Template Name: BuildingGreen */
get_header();?>

<style>
.container {
    position: relative;
    text-align: center;
    color: white;
    font-size: 20px;
    font-family:lato;
}


.top-left {
    position: absolute;
    top: 8px;
    left: 231px;
    font-size: 20px;
}
.top_des {
    position: absolute;
    text-align: left!important;
    max-width:490px;
    min-width:100px;
    top: 200px;
    left: 231px;


}
.top-right1 {
    position: absolute;
    top: 8px;
    right: 589px;

}
.top-right2 {
    position: absolute;
    top: 8px;
    right: 379px;

}
.top-right3 {
    position: absolute;
    top: 8px;
    right: 230px;

}
.container p{margin:0;}

/*.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}*/
</style>
<section>
  <div class="container">


  <?php
  if ( has_post_thumbnail() ) {
  the_post_thumbnail();
  }  ?>

  <div class="top-left">Building Green</div>
  <div class="top-right1">Custom Home Design</div>
  <div class="top-right2">Sustainable Landscaping</div>
  <div class="top-right3">Customer Stories</div>
  <div class="top_des">
  <p style="font-size:42px;font-weight:bolder;font-family:lato;"><?php echo get_field("title"); ?> </p>
  <p><?php echo get_field("heading"); ?> </p>
  </div>
  </div>
  <div class="build">

  <div class="overlay-text2">
  <div class="row">
      <div class="column">
   <div class="square" style="background-color:#ccd100;">
     <div style="text-align:center;color:#484848; padding-right:80px;padding-left:80px;font-family:lato;">
     <p style="font-weight:bold; ">CUSTOMER STORIES</p>

  <p style="font-weight:500; font-size:26px;"><?php echo get_field("customer_stories"); ?> </p>
</div>
  </div>
</div>
  <div class="column">
  <div class="square" style="background-color:#99AA00;">
    <div style="text-align:center;color:#FFFFFF; padding-right:80px;padding-left:80px;font-family:lato;">
    <p style="font-weight:bold;">HOME DESIGNS</p>

  <p style="font-weight:500; font-size:26px;"><?php echo get_field("home_designs"); ?> </p>
</div>
</div>
</div>
<div class="column">
  <div class="square" style="background-color:#557700;">
    <div style="text-align:center;color:#FFFFFF; padding-right:80px;padding-left:80px;font-family:lato;">
    <p style="font-weight:bold;">CUSTOM HOME DESIGNS</p>

  <p style="font-weight:500; font-size:26px;"><?php echo get_field("custom_home_designs"); ?> </p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div>
  <p>GHA energy efficient features</p>
  <p>Every GHA home is built better with bigger benefits for you and your family at no extra cost that a stadard design. You do not pay more for energy efficiency and sustainability.</p>
</div>
<div class="page-content" style="width:800px;height:699.56px">
<figure>
<img style="border:none;"src="<?php echo get_field("energy_efficient")["url"];?>" alt="">

</figure>
</div>


          <div class="hidemobile">

            <div class="tab">
              <button class="tablinks active" onclick="openColumn(event, 'step1')">STEP 1</button>
              <button class="tablinks" onclick="openColumn(event, 'step2')">STEP 2</button>
              <button class="tablinks" onclick="openColumn(event, 'step3')">STEP 3</button>
              <button class="tablinks" onclick="openColumn(event, 'step4')">STEP 4</button>
              <button class="tablinks" onclick="openColumn(event, 'step5')">STEP 5</button>
              <button class="tablinks" onclick="openColumn(event, 'step6')">STEP 6</button>
            </div>



            <!-- Tab content -->
            <div id="step1" class="tabcontent" style="display: block;position:relative;">
              <img style="border:none;width:100%;"src="<?php echo get_field("energy_efficient")["url"];?>" alt="">

              <div class="whatsinbook" style="position: absolute;bottom: 20px;right: 20px;background-color: black;color: white;padding-left: 20px;padding-right: 20px;"><?php if(get_field("step_1") != "") { ?>

    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("step_1"); ?></div>
    <?php } ?></div>
            </div>

            <div id="step2" class="tabcontent" style="display: block">

              <div class="whatsinbook"><?php if(get_field("features") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("step_1"); ?></div>
    <?php } ?></div>
            </div>

            <div id="step3" class="tabcontent">
              <div class="whatsinbook"><?php if(get_field("step_1") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("step_1"); ?></div>
    <?php } ?></div>
            </div>

            <div id="step4" class="tabcontent">
              <div class="whatsinbook"><?php if(get_field("step_1") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("step_1"); ?></div>
    <?php } ?></div>
            </div>
            <div id="step5" class="tabcontent" style="display: block">

              <div class="whatsinbook"><?php if(get_field("step_1") != "") { ?>
    <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("step_1"); ?></div>
    <?php } ?></div>
            </div>
            <div id="step6" class="tabcontent" style="display: block">

              <div class="whatsinbook"><?php if(get_field("step_1") != "") { ?>
            <div class="w-inbk-shortdesc" style="font-size: 16px;"><?php echo get_field("step_1"); ?></div>
            <?php } ?></div>
            </div>


          </div>
      







  <div class="page-content">
  <div class="accordion-container">
  <div class="accordion-main-head">Frequently Asked Questions</div>
  <div class="accordion-content">
  <div class="accordion-section">
  <div class="accordion-head">Can you design a home for my budget?<span class="plusminus">+</span></div>
  <div class="accordion-body" style="display: none;">

  A doctor’s referral is needed to see any of the specialists in the clinic if you wish to claim a Medicare rebate.
  For Allied Health Practitioners, a referral is welcome but not required.

  If you are a WorkCover, Veterans Affairs or Medicare Chronic Disease Management (EPC) patient, you will need a referral.

  </div>
  </div>
  <div class="accordion-section">
  <div class="accordion-head">Can you also knock down and re-build?<span class="plusminus">+</span></div>
  <div class="accordion-body" style="display: none;">

  Officially Our clinic is located on Level 1, 400 Barangaroo Avenue, Barangaroo NSW 2000.

  Unofficially, we are Above Joe &amp; The Juice, opposite Tower 3.

  </div>
  </div>
  <div class="accordion-section">
  <div class="accordion-head">I like this design, but can I change some things?<span class="plusminus">+</span></div>
  <div class="accordion-body" style="display: none;">BOSIC is open Monday – Friday, 7am-7pm.</div>
  </div>
  <div class="accordion-section">
  <div class="accordion-head">Are there any financing options?<span class="plusminus">+</span></div>
  <div class="accordion-body" style="display: none;">In a word, no. But, the Clinic is well serviced with a number of public transport options.
  The Wynyard Walk Tunnel is only metres from our front door and there are regular ferry services throughout the day.
  Given our location in the heart of Barangaroo, there is no onsite parking available, but there are metered Wilson and Secure Park sites close by.</div>
  </div>
  <div class="accordion-section">
  <div class="accordion-head">How do I create my own design?<span class="plusminus">+</span></div>
  <div class="accordion-body" style="display: none;">In a word, no. But, the Clinic is well serviced with a number of public transport options.
  The Wynyard Walk Tunnel is only metres from our front door and there are regular ferry services throughout the day.
  Given our location in the heart of Barangaroo, there is no onsite parking available, but there are metered Wilson and Secure Park sites close by.</div>
  </div>

  </div>
  </div>
  </div>

<style>
/*.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}*/
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
  border: 1px solid #ccc;
   background-color: #f1f1f1;
  opacity:100%;


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
/*display: none;
/*padding: 6px 12px;*/
/*border: 1px solid #ccc*/;
margin-left:500px;
border-top: none;

position:relative;
width:570px;
height:173px;
overflow:hidden;
}

</style>

<style>
.square{
  /*float:right;*/
  max-width:620px;
  height: 233px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    /*Background-color: #fff; Your Color */
    padding-bottom: 18px;
    padding-top: 46px;

    /*width:25px;*/

}
.column {
    float: left;
    /*width: 33.33%;*/

}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.build{
  max-width:1920px;
}

</style>
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
.page-content{
  max-width:1009px;
  margin:auto;
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
<script>
function openColumn(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

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
