<?php
/* Template Name: DisplayHome */
get_header();?>
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail();
}  ?>

<section>
  <div class="build">
  <div class="overlay-text1">

      <p><?php echo get_field("title"); ?> </p>
      <p><?php echo get_field("heading"); ?> </p>
  </div>
  <div class="overlay-text2">
  <div class="row">
      <div class="column">
   <div class="square" style="background-color:#ccd100;">
     <div style="text-align:center;color:#484848; padding-right:80px;padding-left:80px;font-family:lato;">
     <p style="font-weight:bold; ">BUY A DISPLAY HOME</p>

  <p style="font-weight:500; font-size:26px;"><?php echo get_field("buy_display_home"); ?> </p>
</div>
  </div>
</div>
  <div class="column">
  <div class="square" style="background-color:#99AA00;">
    <div style="text-align:center;color:#FFFFFF; padding-right:80px;padding-left:80px;font-family:lato;">
    <p style="font-weight:bold;">TAKE A 3D TOUR</p>

  <p style="font-weight:500; font-size:26px;"><?php echo get_field("take_3d_tour"); ?> </p>
</div>
</div>
</div>
<div class="column">
  <div class="square" style="background-color:#557700;">
    <div style="text-align:center;color:#FFFFFF; padding-right:80px;padding-left:80px;font-family:lato;">
    <p style="font-weight:bold;">WALK THROUGH A GREEN HOME</p>

  <p style="font-weight:500; font-size:26px;"><?php echo get_field("walk_through_gh"); ?> </p>
</div>
</div>
</div>

</div>
</div>
</div>
</section>

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
    width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.build{
  max-width:1860px;
}
</style>
