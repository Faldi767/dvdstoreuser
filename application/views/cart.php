      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Shopping Cart</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Shopping Cart</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
              <p class="text-muted lead">You currently have <?php echo $count; ?> item(s) in your cart.</p>
            </div>
            <div id="basket" class="col-lg-9">
              <div class="box mt-0 pb-0 no-horizontal-padding">
                <form method="get" action="shop-checkout1.html">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($cart as $c) { ?>
                        <tr>
                          <td><a href="#"><img src="<?php echo base_url(); ?>assets/product_images/<?php echo $c->product_img1; ?>" alt="White Blouse Armani" class="img-fluid"></a></td>
                          <td><a href="#"><?php echo $c->product_title; ?></a></td>
                          <td>
                            <?php echo $c->quantity; ?>
                          </td>
                          <td><?php echo $c->product_price; ?></td>
                          <td><?php echo $c->product_price * $c->quantity; ?></td>
                          <td><a href="#"><i class="fa fa-trash-alt"></i></a></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2"><?php foreach($total as $t) { echo $t->total; } ?></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="box-footer d-flex justify-content-between align-items-center">
                    <div class="left-col"><a href="shop-category.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right-col">
                      <a href="<?php echo base_url('view/checkout'); ?>" type="button" class="btn btn-template-outlined">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="box text-uppercase mt-0 mb-2">
                    <h3>You may also like these products</h3>
                  </div>
                </div>
                <?php foreach($latest as $l){ ?>
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
              <div id="order-summary" class="box mt-0 mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Order summary</h3>
                </div>
                <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr class="total">
                        <td>Total</td>
                        <th><?php foreach($total as $t) { echo $t->total; } ?></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
