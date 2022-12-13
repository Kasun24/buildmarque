<?php
/*
Template Name: Contact
*/
 get_header();  ?>

<?php get_template_part('inner-banner');?>

    <!-- contact section -->
    <div class="contact_sec py-5">
      <div class="container">
        <div class="heading text-center">
          <h2 class="text-second mb-5">contact us</h2>
        </div>
        <div class="content py-5">
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <h5 class="fw-bold">Ray Vinton:</h5>
              <h5 class="text-secondary">
                mobile
                <a href="tel:07813731723" class="text-secondary"
                  >07813 731723</a
                >
                <br />
                <a
                  href="mailto:ray.vinton@btinternet.com"
                  class="text-secondary"
                  >ray.vinton@btinternet.com</a
                >
              </h5>
              <h5 class="mt-4 fw-bold">Head Office :</h5>
              <h5>
                <a href="tel:01473738299" class="text-secondary">01473 738299</a
                ><br />
                <a
                  href="mailto:vintonsbuildmarque@btinternet.com"
                  class="text-secondary"
                  >vintonsbuildmarque@btinternet.com</a
                >
              </h5>
              <h5 class="mt-4 fw-bold">VINTONS BUILDMARQUE LTD</h5>
              <h5 class="text-secondary">
                THE LAST HOUSE <br />
                48 STONEY ROAD <br />
                GRUNDISBURGH <br />
                WOODBRIDGE <br />
                SUFFOLK <br />
                IP13 6RG <br />

                <h5 class="mt-4 text-secondary">Company No. 09859638</h5>
              </h5>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="contact_map mt-4 mt-md-0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                      <iframe
                        class="gmap_iframe"
                        width="100%"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                      ></iframe
                      ><a href="https://formatjson.org/">format json</a>
                    </div>
                    <style>
                      .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 600px;
                      }
                      .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 600px;
                      }
                      .gmap_iframe {
                        height: 600px !important;
                      }
                    </style>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    


<?php get_footer(); ?>