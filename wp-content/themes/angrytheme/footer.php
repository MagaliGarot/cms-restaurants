
<section class="newsletter d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
  
    <div class="d-flex newsletter__title">
      <p class="text-uppercase h1">Join our<br>newsletter</p>
    </div>

    <div class="newsletter__mail">

      <form action="" class="">
        <div class="form-group d-lg-flex justify-content-lg-end align-items-lg-center">
                <div class="d-flex justify-content-center">
                  <input type="email" class="form-control form-control-lg" id="your-email1" name="your-email" placeholder="Your email here" required></br>
                </div>
                <div class="d-flex justify-content-center justify-content-md-end">
                  <button class="btn btn-light text-uppercase" type="submit">Subscribe</button>
                </div>
        </div>
      </form>

    </div>

</section>

<footer>
<div class="container">
  <div class="row justify-content-center g-0 pt-5">
    <!-- Desc. + Social Media -->
    <div class="col-sm-2 ps-4 me-3">
      <p class="h3 pb-3">Dev Restaurant</p>
      <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat nunc sed dolor dictum, vitae lacinia odio volutpat. Integer at ante pellentesque, viverra nulla luctus, pellentesque ex.</span> </p>
      <div class="socialmed py-3">
      <a href="#"><i class="fab fa-facebook-f socialmed__fb"></i></a>
      <a href="#"><i class="fab fa-twitter socialmed__twitter"></i></a>
      <a href="#"><i class="fab fa-instagram socialmed__ig"></i></a>
      <a href="#"><i class="fab fa-linkedin-in socialmed__linkedin"></i></a>
      </div>
    </div>

   <!-- Opening hours -->
    <div class="col-sm-3 ps-4">
    <p class="h6 pb-3">Open hours</p>
    <div class="sect2openhours">
  <div class="time"><i class="far fa-clock"></i></div>
  <div class="day"><p>Monday</p></div>
  <div class="line"><hr></div>
  <div class="hours"><p>Closed</p></div>
   </div>

   <div class="sect2openhours">
  <div class="time"><i class="far fa-clock"></i></div>
  <div class="day"><p>Tue-Fri</p></div>
  <div class="line"><hr></div>
  <div class="hours"><p>10am - 12am</p></div>
   </div>

   <div class="sect2openhours">
  <div class="time"><i class="far fa-clock"></i></div>
  <div class="day"><p>Sat-Sun</p></div>
  <div class="line"><hr></div>
  <div class="hours"><p>7am - 1am</p></div>
   </div>

   <div class="sect2openhours">
  <div class="time"><i class="far fa-clock"></i></div>
  <div class="day"><p>Public holidays</p></div>
  <div class="line"><hr></div>
  <div class="hours"><p>7am - 1am</p></div>
   </div>

    </div>

    <!-- Contact us -->
    <div class="col-sm-2 ps-4">

    <p class="h6 pb-3">Contact us</p>

    <div class="sect2contact">
  <div class="contacticon"><p><i class="fas fa-phone-alt"></i></p></div>
  <div class="contacttext"><p>+1 (123) xxx-xxxx</p></div>
     </div>

     <div class="sect2contact">
  <div class="contacticon"><p><i class="fas fa-map-marker-alt"></i></p></div>
  <div class="contacttext"><p>Rue de Mulhouse 36<br>
      4020 Liège<br>
      Belgium</p></div>
     </div>

     <div class="sect2contact">
  <div class="contacticon"><p><i class="fas fa-envelope"></i></p></div>
  <div class="contacttext"><p>studio@gmail.com</p></div>
     </div>

    </div>

   <!-- Instagram -->
    <div class="col-sm-3 ps-4">
    <p class="h6 pb-3">Instagram</p>

    <div class="d-flex flex-wrap">   
  <div class="footerig__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerig1.jpg">  </div>
  <div class="footerig__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerig2.jpg">  </div>
  <div class="footerig__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerig3.jpg">  </div>
  <div class="footerig__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerig4.jpg">  </div>
  <div class="footerig__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerig5.jpg">  </div>
  <div class="footerig__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerig6.jpg">  </div>
  </div>

    </div>
  </div>

</div>
<div class="container copyrights py-3 text-center" style="width:75%;">
    <hr>
<p>© 2019 All Rights Reserved. Designed by Devdesign Studio</p>
   </div>

</footer>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/homeswiper.js"></script>

    <?php wp_footer(); ?>
</body>
</html>

