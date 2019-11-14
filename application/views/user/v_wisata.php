<?php $this->load->model('M_wisata'); ?>
<?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<div class="row" style="background-color: white;">
	<div class="container">
		<!-- START: FILTER AREA -->
		<div class="col-md-3 clear-padding">
			<div class="filter-head text-center">
				<h4>xx Result Found Matching Your Search.</h4>
			</div>
			<div class="filter-area">
				<div class="price-filter filter">
					<h5><i class="fa fa-usd"></i> Price</h5>
					<p>
						<label></label>
						<input type="text" id="amount" readonly>
					</p>
					<div id="price-range"></div>
				</div>
				<div class="facilities-filter filter">
					<h5><i class="fa fa-list"></i> Inclusion</h5>
					<ul>
						<li><input type="checkbox"> <i class="fa fa-plane"></i> Flight</li>
						<li><input type="checkbox"> <i class="fa fa-taxi"></i> Transportation</li>
						<li><input type="checkbox"> <i class="fa fa-eye"></i> Sightseeing</li>
						<li><input type="checkbox"> <i class="fa fa-cutlery"></i> Meals</li>
						<li><input type="checkbox"> <i class="fa fa-glass"></i> Drinks</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END: FILTER AREA -->

		<!-- START: INDIVIDUAL LISTING AREA -->
		<div class="col-md-9 hotel-listing">

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
				<?php foreach ($destinasi->result() as $des): ?>
				<div  class="hotel-list-view " style="border-radius: 10px; max-height:200px;" >
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding" style="border-radius: 10px; ">
              <?php $id = $des->idwisata; ?>
              <?php $gambar = $this->M_wisata->selectlimit($id); ?>
              <?php foreach ($gambar->result() as $g): ?>
                <img src="<?php echo base_url().'gallery/wisata/'.$g->gambar; ?>" style="border-radius: 30px; min-height: 200px;" alt="cruise">
              <?php endforeach; ?>
						</div>
						<div class="col-md-6 col-sm-6 hotel-info" >
							<div>
								<div class="hotel-header" >
									<h5><?php echo $des->nama_wisata ?> <span>
										</span></h5>
									<p><i class="fa fa-map-marker"></i><?php echo $des->lokasi ?></p>
								</div>
								<div class="hotel-facility">
									<?php $rt= $this->db->get_where('fasilitas', array('id_wisata'=>$des->idwisata))->result(); ?>
									<p>
										<?php foreach ($rt as $v): ?>
										<i class="<?php echo $v->icon ?>"></i>
										<?php endforeach ?>
										</p>
								</div>
								<div class="hotel-desc">
									<p><?php echo substr($des->deskripsi_w, 0, 170) ?> ...</p>
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
                  <?php  $jum = 5-$des->rating; ?>
                  <?php  for ($i=0; $i < $des->rating ; $i++) { ?>
                  <i class="fa fa-star colored"></i>
                  <?php } ?>
                  <?php  for ($i=0; $i <$jum ; $i++) { ?>
                    <i class="fa fa-star-o colored"></i>
                  <?php } ?>
									<span>Rp. <?php echo number_format($des->harga) ?></span>
								</div>
							</div>
							<div class="room-book-box" style="margin-top: 40px;">
								<!-- <div class="price">
									<h5>Rp. <?php echo number_format($des->harga) ?>/Person</h5>
								</div> -->
								<div class="book">
									<a href="<?php echo base_url('Wisata/detailWisata/').$des->idwisata; ?>" style="border-radius: 10px;">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
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
	</div>
</div>
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
		  values: [ 3, 50 ],
		  slide: function( event, ui ) {
			$( "#amount" ).val( "$ " + ui.values[ 0 ] + " - $ " + ui.values[ 1 ] );
		  }
		});
		$( "#amount" ).val( "$ " + $( "#price-range" ).slider( "values", 0 ) +
		  " - $ " + $( "#price-range" ).slider( "values", 1 ) );
	  });
</script>
</body>
</html>
