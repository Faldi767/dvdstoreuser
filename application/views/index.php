        <section class="bar background-white relative-positioned">
        <div class="container">
          <!-- Carousel Start-->
          <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
              <div class="homepage owl-carousel">
                <?php
                foreach($slider as $s) {
                ?>
                <div class="item">
                  <div class="row">
                    <img src="<?php echo base_url(); ?>assets/slider_images/<?php echo $s->slide_images; ?>" alt="" class="img-fluid">
                  </div>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>
          <!-- Carousel End-->
        </div>
      </section>
      <section class="bar background-white">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-user"></i></div>
                <h3 class="h4">We Love Our Customer</h3>
                <p>We are know to provide best possible service ever.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-money-bill-wave"></i></div>
                <h3 class="h4">Best Price</h3>
                <p>You can check all other sites about the prices and compare with us.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="box-simple">
                <div class="icon-outlined"><i class="fa fa-globe"></i></div>
                <h3 class="h4">100% GUARANTEED</h3>
                <p>Free return on everything in 1 month with terms and privacy.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-white bar">
        <div class="container">
          <div class="heading text-center">
            <h2>Latest This Week</h2>
          </div>
          <div class="row">
            <?php foreach($latest as $l) { ?>
            <div class="col-lg-3">
              <div class="home-blog-post">
                <div class="image"><center><img src="<?php echo base_url(); ?>assets/product_images/<?php echo $l->product_img1; ?>" alt="..." class="img-fluid"></center>
                  <div class="overlay d-flex align-items-center justify-content-center"><a href="shopdetail/<?php echo $l->id_product; ?>" class="btn btn-template-outlined-white"><i class="fa fa-link"> </i> View Detail</a></div>
                </div>
                <div class="text">
                  <h4><a href="shopdetail/<?php echo $l->id_product; ?>">Buy Now </a></h4>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </section>