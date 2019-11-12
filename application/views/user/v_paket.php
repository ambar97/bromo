<?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<!-- START: MODIFY SEARCH -->
	<!-- <div class="row modify-search modify-hotel">
		<div class="container clear-padding">
			<form >
				<div class="col-md-4">
					<div class="form-gp">
						<label>Location</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" name="city" class="form-control" required placeholder="E.g. London">
							<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Check In</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" id="check_in" name="check_in" class="form-control" placeholder="DD/MM/YYYY">
							<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Check Out</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" id="check_out" name="check_out" class="form-control" required placeholder="DD/MM/YYYY">
							<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-1 col-sm-6 col-xs-3">
					<div class="form-gp">
						<label>Rooms</label>
						<select class="selectpicker">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-9">
					<div class="form-gp">
						<button type="submit" class="modify-search-button btn transition-effect">MODIFY SEARCH</button>
					</div>
				</div>
			</form>
		</div>
	</div> -->
<!-- END: MODIFY SEARCH -->

<!-- START: LISTING AREA-->
<div class="row" style="background-color: white">
	<div class="container">


		<!-- START: INDIVIDUAL LISTING AREA -->
		<div class="col-md-12 hotel-listing">

			<!-- START: SORT AREA -->
			<div class="sort-area col-sm-10">
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Price</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Star Rating</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>User Rating</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Name</option>
						<option> Ascending</option>
						<option> Descending</option>
					</select>
				</div>
			</div>
			<!-- END: SORT AREA -->
			<div class="clearfix visible-xs-block"></div>
			<div class="col-sm-2 view-switcher">
				<div class="pull-right">
					<a class="switchgrid" title="Grid View">
						<i class="fa fa-th-large"></i>
					</a>
					<a class="switchlist active" title="List View">
						<i class="fa fa-list"></i>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- START: HOTEL LIST VIEW -->
			<div class="switchable col-md-12 clear-padding">
        <?php foreach ($paket->result() as $h): ?>
          <div  class="hotel-list-view">
  					<div class="wrapper">
  						<div class="col-md-4 col-sm-6 switch-img clear-padding">
                <?php foreach ($gambar->result() as $g): ?>
                  <img src="<?php echo base_url()."gallery/paket/".$g->gambar; ?>" alt="">
                <?php endforeach; ?>
  						</div>
  						<div class="col-md-6 col-sm-6 hotel-info">
  							<div>
  								<div class="hotel-header">
  									<h5><?php echo $h->nama_paket; ?> <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
  									<!-- <p><i class="fa fa-map-marker"></i>Mall Road, Shimla <i class="fa fa-phone"></i>(+91) 123456789</p> -->
  								</div>
  								<!-- <div class="hotel-facility">
  									<p><i class="fa fa-wifi" title="Free Wifi"></i><i class="fa fa-bed" title="Luxury Bedroom"></i><i class="fa fa-taxi" title="Transportation"></i><i class="fa fa-beer" title="Bar"></i><i class="fa fa-cutlery" title="Restaurant"></i></p>
  								</div> -->
  								<div class="hotel-desc">
                    <h5><b>Durasi</b></h5>
                    <p><?php echo $h->durasi; ?></p>
  								</div>
  							</div>
  						</div>
  						<div class="clearfix visible-sm-block"></div>
  						<div class="col-md-2 rating-price-box text-center clear-padding">
  							<div class="rating-box">
  								<div class="tripadvisor-rating">
  									<img src="<?php echo base_url() ?>master/client/assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
  								</div>
  								<div class="user-rating">
  									<!-- <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
  									<span>128 Guest Reviews.</span> -->
  								</div>
  							</div>
  							<div class="room-book-box">
  								<div class="price">
  									<h5>Rp. <?php echo number_format($h->harga) ; ?> Avg/Night</h5>
  								</div>
  								<div class="book">
  									<a href="<?php echo base_url('PaketWisata/detailPaket/').$h->idpaket_wisata; ?>">BOOK</a>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
        <?php endforeach; ?>
				<!-- END: HOTEL LIST VIEW -->
			</div>
			<div class="clearfix"></div>
			<!-- START: PAGINATION -->
			<div class="bottom-pagination">
				<nav class="pull-right">
					<ul class="pagination pagination-lg">
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">3 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">4 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">5 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">6 <span class="sr-only">(current)</span></a></li>
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">&#187;</span></a></li>
					</ul>
				</nav>
			</div>
			<!-- END: PAGINATION -->
		</div>
		<!-- END: INDIVIDUAL LISTING AREA -->
	</div>
</div>
<!-- END: LISTING AREA -->
<?php $this->load->view("user/side/footer"); ?>

 <?php $this->load->view("user/side/js"); ?>
 <script>

	/* Price Range Slider */

	$(function() {
		"use strict";
		$( "#price-range" ).slider({
		  range: true,
		  min: 0,
		  max: 100,
		  values: [ 100000, 1000000 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "Rp " + ui.values[ 0 ] + " - Rp " + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "Rp " + $( "#price-range" ).slider( "values", 0 ) +
		  " - Rp " + $( "#price-range" ).slider( "values", 1 ) );
	  });
</script>
</body>
</html>
