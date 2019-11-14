<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<!-- Content -->
<body class="load-full-screen">

<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">
	<!-- START: PAGE TITLE -->
	<div class="row page-title">
    <?php foreach ($hotel->result() as $p): ?>
		<div class="container clear-padding text-center">
			<h3><?php echo $p->nama_hotel; ?></h3>
			<!-- <h5>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</h5>
			<p><i class="fa fa-map-marker"></i> Mall Road, Shimla, Himachal Pradesh, 176077</p> -->
		</div>
  <?php endforeach; ?>
	</div>
	<!-- END: PAGE TITLE -->

	<!-- START: ROOM GALLERY -->
	<div class="row hotel-detail">
		<div class="container">
			<div class="product-brief-info">
				<div class="col-md-12 clear-padding">
					<div id="slider" class="flexslider">
						<ul class="slides">
              <?php foreach ($gambar->result() as $g): ?>
                <li>
  								<img src="<?php echo base_url().'gallery/hotel/'.$g->gambar; ?>" alt="cruise" />
  							</li>
              <?php endforeach; ?>
						</ul>
					</div>
					<div id="carousel" class="flexslider">
						<ul class="slides">
              <?php foreach ($gambar->result() as $g): ?>
                <li>
  								<img src="<?php echo base_url().'gallery/hotel/'.$g->gambar; ?>" alt="cruise" />
  							</li>
              <?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
<div class="row booking-detail">
  <div class="container clear-padding">
    <div class="tab-content">
      <div id="review-booking" class="tab-pane fade in active">
        <div class="col-md-8 col-sm-8">
          <div class="login-box clear-margin">
            <h3>Informasi</h3>
              <div class="booking-form">
                <?php foreach ($hotel->result() as $p): ?>
                  <h4><i class="fa fa-money"></i> Harga</h4>
                    <p>Rp. <?php echo $p->harga; ?></p><hr>
                  <h4><i class="fa fa-info"></i> Keterangan</h4>
                    <p><?php echo $p->deskripsi; ?></p><hr>
                  <h4><i class="fa fa-check-square"></i> Lokasi</h4>
                    <p> <?php echo $p->lokasi; ?></p><hr>
                <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 booking-sidebar">
          <div class="sidebar-item booking-summary">
            <h4><i class="fa fa-bookmark"></i>Anda Tertarik?</h4>
            <div class="sidebar-body text-center">
              <a class="btn btn-primary" href="">Book Now</a>
              <!-- <div class="booking-summary-title">
                <div class="col-md-4 col-sm-4 col-xs-4 clear-padding">
                  <img src="assets/images/offer1.jpg" alt="cruise">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                  <h5>Grand Lilly</h5>
                  <h5><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h5>
                  <h5 class="loc"><i class="fa fa-map-marker"></i>Mall Road, Shimla</h5>
                </div>
              </div> -->
              <!-- <div class="clearfix"></div> -->
              <!-- <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                <h5>Check In</h5>
                <div class="date text-center">
                  <h2>05</h2>
                  <h6>AUG</h6>
                  <h5>FRI</h5>
                </div>
              </div> -->
              <!-- <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                <h5>Check Out</h5>
                <div class="date text-center">
                  <h2>09</h2>
                  <h6>AUG</h6>
                  <h5>SAT</h5>
                </div>
              </div> -->
              <!-- <div class="clearfix"></div> -->
              <!-- <table class="table">
                <tr>
                  <td>Guest</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>Nights</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>Room Type</td>
                  <td>Deluxe Suite</td>
                </tr>
                <tr>
                  <td>You Pay</td>
                  <td class="total">$500</td>
                </tr>
              </table> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


		</div>
	</div>
<!-- END: ROOM GALLERY -->

<!-- End Content -->

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
<script src="<?php echo base_url(); ?>master/client/assets/plugins/jquery.flexslider-min.js"></script>
<script>
$(window).load(function() {
	"use strict";
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 150,
    itemMargin: 5,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#carousel"
	  });
	});
</script>
