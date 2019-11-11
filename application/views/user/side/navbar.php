<body class="load-full-screen">

<!-- BEGIN: PRELOADER -->
<div id="loader" class="load-full-screen">
    <div class="loading-animation">
        <span><i class="fa fa-plane"></i></span>
        <span><i class="fa fa-bed"></i></span>
        <span><i class="fa fa-ship"></i></span>
        <span><i class="fa fa-suitcase"></i></span>
    </div>
</div>
<!-- END: PRELOADER -->

<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">
<!-- BEGIN: NAV SECTION -->
<section>
    <div class="row transparent-menu-top">
        <div class="container clear-padding">
            <div class="navbar-contact">
                <div class="col-md-7 col-sm-6 clear-padding">
                    <a href="#" class="transition-effect"><i class="fa fa-phone"></i> (+91) 1234567890</a>
                    <a href="#" class="transition-effect"><i class="fa fa-envelope-o"></i> support@sunsetview.id</a>
                </div>
                <div class="col-md-5 col-sm-6 clear-padding search-box">
                    <div class="col-md-6 col-xs-5 clear-padding">
                        <i class="fa fa-flag-ID"></i>
                    </div>
                    <div class="col-md-6 col-xs-7 clear-padding user-logged">
                        <a href="#" class="transition-effect">
                            <img src="<?php echo base_url() ?>master/client/assets/images/user.jpg" alt="cruise">
                            Hi, Lenore
                        </a>
                        <a href="#" class="transition-effect">
                            <i class="fa fa-sign-out"></i>Sign Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row transparent-menu">
        <div class="container clear-padding">
            <!-- BEGIN: HEADER -->
            <div class="navbar-wrapper">
                <div class="navbar navbar-default" role="navigation">
                    <!-- BEGIN: NAV-CONTAINER -->
                    <div class="nav-container">
                        <div class="navbar-header">
                            <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- BEGIN: LOGO -->
                            <a class="navbar-brand logo" href="index.html">SunsetView</a>
                        </div>

                        <!-- BEGIN: NAVIGATION -->
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="<?php if ($this->uri->segment(1)== "Home"): ?>
                                    <?php echo "active" ?>
                                <?php endif ?>">
                                    <a class="dropdown-toggle" href="<?php echo base_url('Home') ?>"><i class="fa fa-home"></i> HOME</a>
                                </li>
                                <li class="<?php if ($this->uri->segment(1)== "Wisata"): ?>
                                    <?php echo "active" ?>
                                <?php endif ?>">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-map-marker"></i> TOUR <i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('Wisata') ?>"> Single Tour</a></li>
                                        <li><a href="<?php echo base_url('PaketWisata') ?>"> Package Tour</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($this->uri->segment(1)== "Hotel"): ?>
                                    <?php echo "active" ?>
                                <?php endif ?>">
                                    <a class="dropdown-toggle" href="<?php echo base_url('Hotel') ?>"><i class="fa fa-bed"></i> HOTEL</a>
                                </li>
                                <li class="<?php if ($this->uri->segment(1)== "Galery"): ?>
                                    <?php echo "active" ?>
                                <?php endif ?>">
                                    <a class="dropdown-toggle" href="#<?php echo base_url('Galery') ?>"><i class="fa fa-picture-o"></i> GALLERY</a>
                                </li>
                                <li class="<?php if ($this->uri->segment(1)== "ContactUs"): ?>
                                    <?php echo "active" ?>
                                <?php endif ?>">
                                    <a class="dropdown-toggle" href="<?php echo base_url('ContactUs') ?>"><i class="fa fa-ship"></i> CONTACT </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
