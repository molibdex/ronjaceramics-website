<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ronja_ceramics
 */

?>


<?php wp_footer(); ?>
<!-- Footer -->
    <div class="mt-5 pt-5 pb-5 footer nopadding">
        <div class="container">
            <div class="row nopadding ">
                <!-- pusty DIV -->
                <div class="col-lg-5 col-xs-12 icons">
                  <ul class="row">
                    <li class="col-xs-6 col-sm-2">
                      <a href="https://www.facebook.com/Ronja-Ceramics-630755160690711/">
                        <img class="icon smedia " src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/fb.png">
                      </a>
                    </li>
                    <li class="col-xs-6 col-sm-2">
                      <a href="https://www.instagram.com/ronja_ceramics/">
                        <img class="icon smedia" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/insta.png">
                      </a>
                    </li>
                  </ul>

                </div>
                <!-- koniec pusty DIV -->
                <div class="col-lg-3 col-xs-12 head-foot">
                  <br>
                    <p class="head-foot"><a href="{% url 'pagemap' %}">POLITYKA PRYWATNOŚCI</a></p>
                    <p class="head-foot"><a href="">REGULAMIN</a></p>
                    <p class="head-foot"><a href="{% url 'home' %}">ZWROTY</a></p>
                </div>
                <div class="col-lg-4 col-xs-12 location head-foot2 nopadding">
                  <br>
                    <p><i class="fa fa-address-card mr-3"></i>Stalowa 15, 02-031 Warszawa</p>
                    <p><i class="fa fa-phone mr-3"></i>00 000 00 00</p>
                    <p><i class="fa fa-envelope mr-3"></i>ronjaceramics@gmail.com</p>
                </div>
            </div>
            <div class="row mt-5 nopadding">
                <div class="col copyright">
                    <p class="author"><small class="text-white-50">&copy; MOLIBDEX 2020</small></p>
                </div>
            </div>
        </div>
    </div>
    <!--KONIEC Footera -->
<!-- Bootstrap core JavaScript -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
