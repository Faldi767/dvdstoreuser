      <?php foreach($shop as $s) { ?>
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2"><?php echo $s->product_title; ?></h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-category.html"><?php echo $s->cat_p_title; ?></a></li>
                <li class="breadcrumb-item active"><?php echo $s->product_title; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div> <img src="<?php echo base_url(); ?>assets/product_images/<?php echo $s->product_img1; ?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url(); ?>assets/product_images/<?php echo $s->product_img2; ?>" alt="" class="img-fluid"></div>
                    <div> <img src="<?php echo base_url(); ?>assets/product_images/<?php echo $s->product_img3; ?>" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="box">
                    <form>
                      <div class="sizes">
                        <h3>Jumlah</h3>
                        <select class="bs-select">
                          <option value="small">1</option>
                          <option value="medium">2</option>
                          <option value="large">3</option>
                          <option value="x-large">4</option>
                        </select>
                      </div>
                      <p class="price"><?php echo $s->product_price; ?></p>
                      <p class="text-center">
                        <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                      </p>
                    </form>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="<?php echo base_url(); ?>assets/product_images/<?php echo $s->product_img1; ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo base_url(); ?>assets/product_images/<?php echo $s->product_img2; ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo base_url(); ?>assets/product_images/<?php echo $s->product_img3; ?>" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Product details</h4>
                <p><?php echo $s->product_desc; ?></p>
              </div>
              <?php } ?>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-small">
                    <h3>You may also like these products</h3>
                  </div>
                </div>
                <?php foreach($latest as $l) { ?>
                <div class="col-lg-3 col-md-6">
                  <div class="product">
                    <div class="image"><a href="<?php echo $l->id_product; ?>"><img src="<?php echo base_url(); ?>assets/product_images/<?php echo $l->product_img1; ?>" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="<?php echo $l->id_product; ?>"><?php echo $l->product_title; ?></a></h3>
                      <p class="price"><?php echo $l->product_price; ?></p>
                    </div>
                  </div>
                </div>
              <?php } ?>

              </div>
            </div>
            <div class="col-lg-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Men </span><span class="badge badge-secondary">42</span></a>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Ladies  </span><span class="badge badge-light">123</span></a>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Kids  </span><span class="badge badge-secondary">11</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>