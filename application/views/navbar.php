  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Welcome <?php echo ($this->session->has_userdata('nama') ? $this->session->userdata("nama") : "Guest"); ?>!</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in-alt"></i><span class="d-none d-md-inline-block">Sign In</span></a>
                  <?php if($this->session->userdata('status') != "login") {
                    ?>
                    <a href="customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a>
                    <?php
                  } ?>
                  <?php if($this->session->userdata('status') == "login") { ?>
                  <a href="customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">My Account</span></a>
                  <a href="customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Logout</span></a>
                  <?php
                } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('view/logincheck'); ?>" method="post">
                <div class="form-group">
                  <input id="email_modal" type="text" name="email" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" name="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home">Video Store<span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item menu-large <?php echo ($nav == "index" ? "active" : "") ?>"><a href="<?php echo ($nav == "home" ? "#" : base_url('view/index')) ?>">Home</a>
                </li>
                <li class="nav-item menu-large <?php echo ($nav == "shop" ? "active" : "") ?>"><a href="<?php echo ($nav == "shop" ? "#" : base_url('view/shop')) ?>">Shop</a>
                </li>
                <li class="nav-item menu-large <?php echo ($nav == "cart" ? "active" : "") ?>"><a href="<?php echo ($nav == "cart" ? "#" : base_url('view/cart')) ?>">Shopping Cart</a>
                </li>
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
