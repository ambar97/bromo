<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<!-- Content -->
<body class="load-full-screen">

<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">
    <?php foreach ($paket->result() as $p): ?>
  <?php endforeach; ?>
	<!-- END: PAGE TITLE -->

	<!-- START: ROOM GALLERY -->
	<div class="row hotel-detail">
		<div class="container">
			<div class="product-brief-info" style="border-radius:10px ">
				<div class="col-md-12 clear-padding" >
					<div id="slider" class="flexslider" >
						<ul class="slides" >
              <?php foreach ($gambar->result() as $g): ?>
                <li>
                   <h3 style="z-index: 2; position: absolute; padding: 10px; color: #f9676b"><i class="fa fa-map-marker" style="color: red"></i> <?php echo $p->nama_paket; ?></h3>
  								<img src="<?php echo base_url().'gallery/paket/'.$g->gambar; ?>" alt="cruise" style="border-radius:10px; z-index: 1; position: relative; top: 0px "/>
  							</li>
              <?php endforeach; ?>
						</ul>
					</div>
					<div id="carousel" class="flexslider">
						<ul class="slides" style="margin: 10px;">
              <?php foreach ($gambar->result() as $g): ?>
                <li>
  								<img src="<?php echo base_url().'gallery/paket/'.$g->gambar; ?>" alt="cruise" style="border-radius:10px " />
  							</li>
              <?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
       <?php foreach ($paket->result() as $p): ?>
<div class="row booking-detail">
  <div class="container clear-padding">
    <div class="tab-content">
      <div id="review-booking" class="tab-pane fade in active">
        <div class="col-md-8 col-sm-8">
          <div class="login-box clear-margin">
            <h3>Informasi</h3>
              <div class="booking-form">
                  
                  <h4><i class="fa fa-money"></i> Harga</h4>
                    <p>Rp. <?php echo $p->harga; ?></p><hr>
                  <h4><i class="fa fa-info"></i> Keterangan</h4>
                    <p><?php echo $p->keterangan; ?></p><hr>
                  <h4><i class="fa fa-clock-o"></i> Durasi</h4>
                    <p> <?php echo $p->durasi; ?></p><hr>
                  <h4><i class="fa fa-check-square"></i> Include</h4>
                    <p> <?php echo $p->include; ?></p><hr>
                  <h4><i class="fa fa-minus-square"></i> Exclude</h4>
                    <p> <?php echo $p->exclude; ?></p><hr>

              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 booking-sidebar">
          <div class="sidebar-item booking-summary">
            <h4><i class="fa fa-bookmark"></i>Anda Tertarik?</h4>
            <div class="sidebar-body text-center">
              <a class="btn btn-primary" href="
              <?php if ($this->session->userdata('status') == !'LoginUser'): ?>
                <?php echo base_url('PaketWisata/gagal/'.$p->idpaket_wisata) ?>
                <?php else: ?>
                    <?php echo base_url('PaketWisata/bookingP/'.$p->idpaket_wisata) ?>
              <?php endif ?>">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

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
