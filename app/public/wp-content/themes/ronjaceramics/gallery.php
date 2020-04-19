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
<div class= "gallery">
<div class="container page-top">

     <div class="row">

        <?php if( !empty ($photo_A01)) : ?>
         <div class="col-lg-3 col-md-3 col-xs-6 thumb">
             <a href="<?php echo $photo_A01['url']; ?>" class="fancybox" rel="ligthbox">
                 <img class="img-fluid zoom" src="<?php echo $photo_A01['url']; ?>" alt="<?php echo $photo_A01['alt']; ?>">
             </a>
         </div>
         <?php endif; ?>
         <?php if( !empty ($photo_A02)) : ?>
          <div class="col-lg-3 col-md-3 col-xs-6 thumb">
              <a href="<?php echo $photo_A02['url']; ?>" class="fancybox" rel="ligthbox">
                  <img class="img-fluid zoom" src="<?php echo $photo_A02['url']; ?>" alt="<?php echo $photo_A02['alt']; ?>">
              </a>
          </div>
          <?php endif; ?>
          <?php if( !empty ($photo_A03)) : ?>
           <div class="col-lg-3 col-md-3 col-xs-6 thumb">
               <a href="<?php echo $photo_A03['url']; ?>" class="fancybox" rel="ligthbox">
                   <img class="img-fluid zoom" src="<?php echo $photo_A03['url']; ?>" alt="<?php echo $photo_A03['alt']; ?>">
               </a>
           </div>
           <?php endif; ?>
           <?php if( !empty ($photo_A04)) : ?>
            <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                <a href="<?php echo $photo_A04['url']; ?>" class="fancybox" rel="ligthbox">
                    <img class="img-fluid zoom" src="<?php echo $photo_A04['url']; ?>" alt="<?php echo $photo_A04['alt']; ?>">
                </a>
            </div>
            <?php endif; ?>
            <?php if( !empty ($photo_A05)) : ?>
             <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                 <a href="<?php echo $photo_A05['url']; ?>" class="fancybox" rel="ligthbox">
                     <img class="img-fluid zoom" src="<?php echo $photo_A05['url']; ?>" alt="<?php echo $photo_A05['alt']; ?>">
                 </a>
             </div>
             <?php endif; ?>
             <?php if( !empty ($photo_A06)) : ?>
              <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                  <a href="<?php echo $photo_A06['url']; ?>" class="fancybox" rel="ligthbox">
                      <img class="img-fluid zoom" src="<?php echo $photo_A06['url']; ?>" alt="<?php echo $photo_A06['alt']; ?>">
                  </a>
              </div>
              <?php endif; ?>
              <?php if( !empty ($photo_A07)) : ?>
               <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                   <a href="<?php echo $photo_A07['url']; ?>" class="fancybox" rel="ligthbox">
                       <img class="img-fluid zoom" src="<?php echo $photo_A07['url']; ?>" alt="<?php echo $photo_A07['alt']; ?>">
                   </a>
               </div>
               <?php endif; ?>
               <?php if( !empty ($photo_A08)) : ?>
                <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                    <a href="<?php echo $photo_A08['url']; ?>" class="fancybox" rel="ligthbox">
                        <img class="img-fluid zoom" src="<?php echo $photo_A08['url']; ?>" alt="<?php echo $photo_A08['alt']; ?>">
                    </a>
                </div>
                <?php endif; ?>
                <?php if( !empty ($photo_A09)) : ?>
                 <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                     <a href="<?php echo $photo_A09['url']; ?>" class="fancybox" rel="ligthbox">
                         <img class="img-fluid zoom" src="<?php echo $photo_A09['url']; ?>" alt="<?php echo $photo_A09['alt']; ?>">
                     </a>
                 </div>
                 <?php endif; ?>
    </div>
    <div class="container page-top">

         <div class="row">

            <?php if( !empty ($photo_B01)) : ?>
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                 <a href="<?php echo $photo_B01['url']; ?>" class="fancybox" rel="ligthbox">
                     <img class="img-fluid zoom" src="<?php echo $photo_B01['url']; ?>" alt="<?php echo $photo_B01['alt']; ?>">
                 </a>
             </div>
             <?php endif; ?>
             <?php if( !empty ($photo_B02)) : ?>
              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="<?php echo $photo_B02['url']; ?>" class="fancybox" rel="ligthbox">
                      <img class="img-fluid zoom" src="<?php echo $photo_B02['url']; ?>" alt="<?php echo $photo_B02['alt']; ?>">
                  </a>
              </div>
              <?php endif; ?>
              <?php if( !empty ($photo_B03)) : ?>
               <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                   <a href="<?php echo $photo_B03['url']; ?>" class="fancybox" rel="ligthbox">
                       <img class="img-fluid zoom" src="<?php echo $photo_B03['url']; ?>" alt="<?php echo $photo_B03['alt']; ?>">
                   </a>
               </div>
               <?php endif; ?>
               <?php if( !empty ($photo_B04)) : ?>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="<?php echo $photo_B04['url']; ?>" class="fancybox" rel="ligthbox">
                        <img class="img-fluid zoom" src="<?php echo $photo_B04['url']; ?>" alt="<?php echo $photo_B04['alt']; ?>">
                    </a>
                </div>
                <?php endif; ?>
                <?php if( !empty ($photo_B05)) : ?>
                 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                     <a href="<?php echo $photo_B05['url']; ?>" class="fancybox" rel="ligthbox">
                         <img class="img-fluid zoom" src="<?php echo $photo_B05['url']; ?>" alt="<?php echo $photo_B05['alt']; ?>">
                     </a>
                 </div>
                 <?php endif; ?>
                 <?php if( !empty ($photo_B06)) : ?>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a href="<?php echo $photo_B06['url']; ?>" class="fancybox" rel="ligthbox">
                          <img class="img-fluid zoom" src="<?php echo $photo_B06['url']; ?>" alt="<?php echo $photo_B06['alt']; ?>">
                      </a>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty ($photo_B07)) : ?>
                   <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                       <a href="<?php echo $photo_B07['url']; ?>" class="fancybox" rel="ligthbox">
                           <img class="img-fluid zoom" src="<?php echo $photo_B07['url']; ?>" alt="<?php echo $photo_B07['alt']; ?>">
                       </a>
                   </div>
                   <?php endif; ?>
                   <?php if( !empty ($photo_B08)) : ?>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a href="<?php echo $photo_B08['url']; ?>" class="fancybox" rel="ligthbox">
                            <img class="img-fluid zoom" src="<?php echo $photo_B08['url']; ?>" alt="<?php echo $photo_B08['alt']; ?>">
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty ($photo_B09)) : ?>
                     <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                         <a href="<?php echo $photo_B09['url']; ?>" class="fancybox" rel="ligthbox">
                             <img class="img-fluid zoom" src="<?php echo $photo_B09['url']; ?>" alt="<?php echo $photo_B09['alt']; ?>">
                         </a>
                     </div>
                     <?php endif; ?>
        </div>
      </div>
      <div>
        <br>
        <br>
        <br>
        <div>
<?php get_footer(); ?>
