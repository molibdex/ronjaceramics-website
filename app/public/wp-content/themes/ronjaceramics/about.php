<?php
/*
  Template name: About us
*/

$nasze = get_field('nasze');
$onas = get_field('onas');

get_header(); ?>

<div class="cardus">
    <div class="row no-gutters">
        <div class="col-md-5">
          <!-- If user uplodaed an image -->
          <?php if( !empty ($nasze)) : ?>
            <img class="img-fluid ard-img-top h-100 onas" src="<?php echo $nasze['url']; ?>" alt="<?php echo $nasze['alt']; ?>">
          <?php endif; ?>
        </div>
        <div class="col-md-7">
            <div class="card-body">
              <p class="card-text">
                <?php echo $onas; ?>
              </p>
            </div>
        </div>
    </div>
</div>
<br>

<?php get_footer(); ?>
