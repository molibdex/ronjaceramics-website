<?php
/*
  Template name: Gallery
*/
$photo_A01 = get_field('photo_A01');
$photo_A02 = get_field('photo_A02');
$photo_A03 = get_field('photo_A03');
$photo_A04 = get_field('photo_A04');
$photo_A05 = get_field('photo_A05');
$photo_A06 = get_field('photo_A06');
$photo_A07 = get_field('photo_A07');
$photo_A08 = get_field('photo_A08');
$photo_A09 = get_field('photo_A09');
$photo_B01 = get_field('photo_B01');
$photo_B02 = get_field('photo_B02');
$photo_B03 = get_field('photo_B03');
$photo_B04 = get_field('photo_B04');
$photo_B05 = get_field('photo_B05');
$photo_B06 = get_field('photo_B06');
$photo_B07 = get_field('photo_B07');
$photo_B08 = get_field('photo_B08');
$photo_B09 = get_field('photo_B09');

get_header(); ?>

<!-- Grid row -->
<div class="gallery" id="gallery">

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A01)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A01['url']; ?>" alt="<?php echo $photo_A01['alt']; ?>">
  <?php endif; ?>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A02)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A02['url']; ?>" alt="<?php echo $photo_A02['alt']; ?>">
  <?php endif; ?>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A03)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A03['url']; ?>" alt="<?php echo $photo_A03['alt']; ?>">
  <?php endif; ?>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A04)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A04['url']; ?>" alt="<?php echo $photo_A04['alt']; ?>">
  <?php endif; ?>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A05)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A05['url']; ?>" alt="<?php echo $photo_A05['alt']; ?>">
  <?php endif; ?>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A06)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A06['url']; ?>" alt="<?php echo $photo_A06['alt']; ?>">
  <?php endif; ?>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A07)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A07['url']; ?>" alt="<?php echo $photo_A07['alt']; ?>">
  <?php endif; ?>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A08)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A08['url']; ?>" alt="<?php echo $photo_A08['alt']; ?>">
  <?php endif; ?>
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <!-- If user uplodaed an image -->
  <?php if( !empty ($photo_A09)) : ?>
    <img class="img-fluid" src="<?php echo $photo_A09['url']; ?>" alt="<?php echo $photo_A09['alt']; ?>">
  <?php endif; ?>
</div>
<!-- Grid column -->

</div>
<!-- SECOND GALLERY -->

<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B01)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B01['url']; ?>" alt="<?php echo $photo_B01['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B02)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B02['url']; ?>" alt="<?php echo $photo_B02['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B03)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B03['url']; ?>" alt="<?php echo $photo_B03['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B04)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B04['url']; ?>" alt="<?php echo $photo_B04['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B05)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B05['url']; ?>" alt="<?php echo $photo_B05['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B06)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B06['url']; ?>" alt="<?php echo $photo_B06['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B07)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B07['url']; ?>" alt="<?php echo $photo_B07['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B08)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B08['url']; ?>" alt="<?php echo $photo_B08['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <!-- If user uplodaed an image -->
    <?php if( !empty ($photo_B09)) : ?>
      <img class="img-fluid" src="<?php echo $photo_B09['url']; ?>" alt="<?php echo $photo_B09['alt']; ?>">
    <?php endif; ?>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->







<div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox gallery">

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(145).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(150).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(150).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(152).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(152).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(42).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(42).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(151).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(151).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(40).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(40).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(148).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(148).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(147).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" />
        </a>
      </figure>

      <figure class="col-md-4">
        <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(149).jpg" data-size="1600x1067">
          <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(149).jpg" class="img-fluid" />
        </a>
      </figure>

    </div>

  </div>
</div>
<?php get_footer(); ?>
