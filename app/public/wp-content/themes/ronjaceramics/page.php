<?php
/*
  Template name: Home Page
*/

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
          <img class="img-fluid" src="assets\img\items\01.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="assets\img\items\02.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="assets\img\items\03.jpg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="assets\img\items\02.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="assets\img\items\01.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="assets\img\items\02.jpg"
            alt="Card image cap">
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
<br>

<br>
<br>
<br>
<br>
<br>


<?php get_footer(); ?>
