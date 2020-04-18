<?php
/*
  Template name: About us
*/

$nasze = get_field('nasze');
$onas = get_field('onas');

get_header(); ?>

<div class="clearfix cardus">
  <?php if( !empty ($nasze)) : ?>
  <img src="<?php echo $nasze['url']; ?>" alt="<?php echo $nasze['alt']; ?>" class="img-fluid float-left onr mr-4 nopadding">

  <?php endif; ?>

  <p class=""><?php echo $onas; ?></p>

</div>

<?php get_footer(); ?>
