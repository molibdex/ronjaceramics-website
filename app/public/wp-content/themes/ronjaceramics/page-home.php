<?php
/*
  Template name: Front page
*/

$obrazek_w_karuzeli_01 = get_field('obrazek_w_karuzeli_01');
$obrazek_w_karuzeli_02 = get_field('obrazek_w_karuzeli_02');
$obrazek_w_karuzeli_03 = get_field('obrazek_w_karuzeli_03');
$obrazek_w_karuzeli_04 = get_field('obrazek_w_karuzeli_04');
$obrazek_w_karuzeli_05 = get_field('obrazek_w_karuzeli_05');
$obrazek_w_karuzeli_06 = get_field('obrazek_w_karuzeli_06');

get_header(); ?>

<br>
<br>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

  <!--Slides-->
  <div class="carousel-inner float-center" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3 mb-3">
        <div class="card">
          <!-- If user uplodaed an image -->
          <?php if( !empty ($obrazek_w_karuzeli_01)) : ?>
            <img class="img-fluid" src="<?php echo $obrazek_w_karuzeli_01['url']; ?>" alt="<?php echo $obrazek_w_karuzeli_01['alt']; ?>">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <!-- If user uplodaed an image -->
          <?php if( !empty ($obrazek_w_karuzeli_02)) : ?>
            <img class="img-fluid" src="<?php echo $obrazek_w_karuzeli_02['url']; ?>" alt="<?php echo $obrazek_w_karuzeli_02['alt']; ?>">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <!-- If user uplodaed an image -->
          <?php if( !empty ($obrazek_w_karuzeli_03)) : ?>
            <img class="img-fluid" src="<?php echo $obrazek_w_karuzeli_03['url']; ?>" alt="<?php echo $obrazek_w_karuzeli_03['alt']; ?>">
          <?php endif; ?>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card">
          <!-- If user uplodaed an image -->
          <?php if( !empty ($obrazek_w_karuzeli_04)) : ?>
            <img class="img-fluid" src="<?php echo $obrazek_w_karuzeli_04['url']; ?>" alt="<?php echo $obrazek_w_karuzeli_04['alt']; ?>">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <!-- If user uplodaed an image -->
          <?php if( !empty ($obrazek_w_karuzeli_05)) : ?>
            <img class="img-fluid" src="<?php echo $obrazek_w_karuzeli_05['url']; ?>" alt="<?php echo $obrazek_w_karuzeli_05['alt']; ?>">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <!-- If user uplodaed an image -->
          <?php if( !empty ($obrazek_w_karuzeli_06)) : ?>
            <img class="img-fluid" src="<?php echo $obrazek_w_karuzeli_06['url']; ?>" alt="<?php echo $obrazek_w_karuzeli_06['alt']; ?>">
          <?php endif; ?>
        </div>
      </div>


    </div>
    <!--/.Second slide-->

  </div>
  <!--/.Slides-->
  <!--Controls-->
<a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
<!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->


<?php get_footer(); ?>
