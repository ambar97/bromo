<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<!-- Content -->
<body class="load-full-screen">

<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">
    <?php foreach ($wisata->result() as $p): ?>
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
                   <h3 style="z-index: 2; position: absolute; padding: 10px; color: #f9676b"><i class="fa fa-map-marker" style="color: red"></i> <?php echo $p->nama_wisata; ?></h3>
  								<img src="<?php echo base_url().'gallery/wisata/'.$g->gambar; ?>" alt="cruise" style="border-radius:10px; z-index: 1; position: relative; top: 0px "/>
  							</li>
              <?php endforeach; ?>
						</ul>
					</div>
					<div id="carousel" class="flexslider">
						<ul class="slides" style="margin: 10px;">
              <?php foreach ($gambar->result() as $g): ?>
                <li>
  								<img src="<?php echo base_url().'gallery/wisata/'.$g->gambar; ?>" alt="cruise" style="border-radius:10px " />
  							</li>
              <?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
       <?php foreach ($wisata->result() as $p): ?>
<div class="row booking-detail">
  <div class="container clear-padding">
    <div class="tab-content">
      <div id="review-booking" class="tab-pane fade in active">
        <div class="col-md-8 col-sm-8">
          <div class="login-box clear-margin">
            <h3>Informasi</h3>
              <div class="booking-form">
                <h4><i>Rating</i></h4>
                <div class="user-rating">
                  <?php  $jum = 5-$p->rating; ?>
                  <?php  for ($i=0; $i < $p->rating ; $i++) { ?>
                  <i class="fa fa-star colored"></i>
                  <?php } ?>
                  <?php  for ($i=0; $i <$jum ; $i++) { ?>
                    <i class="fa fa-star-o colored"></i>
                  <?php } ?>
                </div><hr>
                  <h4><i class="fa fa-money"></i> Harga</h4>
                    <p>Rp. <?php echo $p->harga; ?></p><hr>
                  <h4><i class="fa fa-info"></i> Keterangan</h4>
                    <p><?php echo $p->deskripsi_w; ?></p><hr>
                  <h4><i class="fa fa-clock-o"></i> Lokasi</h4>
                    <p> <?php echo $p->lokasi; ?></p><hr>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 booking-sidebar">
          <div class="sidebar-item booking-summary">
            <h4><i class="fa fa-bookmark"></i>Anda Tertarik?</h4>
            <form action="<?php if ($this->session->userdata('status') == 'loginUser'): ?>
              <?php echo base_url('Wisata/bookingST') ?>
            <?php else: ?>
              <?php echo 'arararar' ?>
            <?php endif ?>" method="post">
              <input type="text" name="idwis" value="<?php echo $p->idwisata ?>">
              <input type="text" name="harga" value="<?php echo $p->harga ?>">
              <input type="text" name="iduser" value="<?php echo $this->session->userdata('id') ?>">
            <div class="sidebar-body text-center">
              <button class="btn btn-primary" type="submit">Book Now</button>
            </div>
            </form>
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
