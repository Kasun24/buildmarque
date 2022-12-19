<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uptas
 */

?>
<!-- footer form section -->
<div class="form_sec bg-second">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7">
        <div class="form_capt border-bottom">
          <h2 class="text-light">tel us about your project</h2>
          <h3 class="text-third">get in touch for your free quotation</h3>
        </div>
      </div>
      <div class="col-sm-12 col-md-5">
        <div class="form">
          <form action="">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group mt-3 mt-sm-0">
                  <input class="form-control" type="text" placeholder="Name" />
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group mt-3 mt-sm-0">
                  <input class="form-control" type="email" placeholder="Email" />
                </div>
              </div>
              <div class="col-12 col-sm-9">
                <div class="form-group mt-3">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Enquiry"></textarea>
                </div>
              </div>
              <div class="col-12 col-sm-3">
                <div class="form-group mt-3">
                  <a href="" class="btn bg-third py-3 w-100">Send</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- .........................................Footer Section........................................... -->
<div class="footer bg-main">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="footer_logo">
          <img src="<?php the_field('footer_logo', 'option'); ?>" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="col-sm-6 col-md-4 mt-3 mt-sm-0">
        <h5 class="text-second">VINTONS BUILDMARQUE LTD</h5>
        <h5 class="text-light">
          THE LAST HOUSE <br />
          48 STONEY ROAD <br />
          GRUNDISBURGH <br />
          WOODBRIDGE <br />
          SUFFOLK <br />
          IP13 6RG
        </h5>
        <h5 class="text-capitalize text-light mt-4">
          Company No. 09859638
        </h5>
      </div>
      <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
        <h5 class="text-second">Contact us</h5>
        <h5 class="text-capitalize text-light mt-4">
          Ray Vinton – mobile
          <a class="text-light" href="tel:07813731723">07813 731723</a><br />
          <a href="mailto:ray.vinton@btinternet.com" class="text-third">ray.vinton@btinternet.com</a>
        </h5>
        <h5 class="text-capitalize text-light mt-4">
          Office –
          <a href="tel:01473738299" class="text-light">01473 738299</a>
          <br />
          <a href="mailto:vintonsbuildmarque@btinternet.com" class="text-third">vintonsbuildmarque@btinternet.com</a>
        </h5>
        <div class="fot_social mt-4">
          <a href="instragram" class="text-dark bg-third py-1 px-2 rounded-circle"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
          <a href="facebook" class="text-dark bg-third py-1 px-2 rounded-circle"><i class="fa fa-facebook mt-3 mt-sm-0" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<script src="<?php echo get_template_directory_uri(); ?>/inc/js/script.js"></script>
<?php wp_footer(); ?>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- or -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>