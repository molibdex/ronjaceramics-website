<?php
/*
  Template name: Workshop
*/
$workshop1 = get_field('workshop1');
$workshop_desc = get_field('workshop_desc');
$workshop_title = get_field('workshop_title');
$workshop2 = get_field('workshop2');
$workshop_desc2 = get_field('workshop_desc2');
$workshop_title2 = get_field('workshop_title2');
$workshop3 = get_field('workshop3');
$workshop_desc3 = get_field('workshop_desc3');
$workshop_title3 = get_field('workshop_title3');
get_header(); ?>

  <div class="cardwork" style="max-width: 1000px;">
      <div class="row no-gutters">
          <div class="col-md-5">
            <!-- If user uplodaed an image -->
            <?php if( !empty ($workshop1)) : ?>
              <img class="img-fluid work" src="<?php echo $workshop1['url']; ?>" alt="<?php echo $workshop1['alt']; ?>">
            <?php endif; ?>
          </div>
          <div class="col-md-7">
              <div class="card-bodywork">
                <b class="card-title"><?php echo $workshop_title; ?></b>
                <p class="card-text">
                <?php echo $workshop_desc; ?>
                </p>
              </div>
          </div>
      </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="cardwork" style="max-width: 1000px;">
      <div class="row no-gutters">
          <div class="col-md-5">
            <!-- If user uplodaed an image -->
            <?php if( !empty ($workshop2)) : ?>
              <img class="img-fluid work" src="<?php echo $workshop2['url']; ?>" alt="<?php echo $workshop2['alt']; ?>">
            <?php endif; ?>
          </div>
          <div class="col-md-7">
              <div class="card-bodywork">
                <b class="card-title"><?php echo $workshop_title2; ?></b>
                <p class="card-text">
                <?php echo $workshop_desc2; ?>
                </p>
              </div>
          </div>
      </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="cardwork" style="max-width: 1000px;">
      <div class="row no-gutters">
          <div class="col-md-5">
            <!-- If user uplodaed an image -->
            <?php if( !empty ($workshop3)) : ?>
              <img class="img-fluid work" src="<?php echo $workshop3['url']; ?>" alt="<?php echo $workshop3['alt']; ?>">
            <?php endif; ?>
          </div>
          <div class="col-md-7">
              <div class="card-bodywork">
                <b class="card-title"><?php echo $workshop_title3; ?></b>
                <p class="card-text">
                <?php echo $workshop_desc3; ?>
                </p>
              </div>
          </div>
      </div>
  </div>

<?php get_footer(); ?>
