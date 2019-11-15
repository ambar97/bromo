 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
	<!-- END: PAGE TITLE -->

	<!-- START: BOOKING TAB -->
	<div class="row booking-tab">
		<div class="container clear-padding">
			<ul class="nav nav-tabs">
				<li class="active col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#review-booking" class="text-center"><i class="fa fa-edit"></i> <span>Review Booking</span></a></li>
				<li class="col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#passenger-info" class="text-center"><i class="fa fa-male"></i> <span>Passenger Info</span></a></li>
				<li class="col-md-4 col-sm-4 col-xs-4"><a data-toggle="tab" href="#billing-info" class="text-center"><i class="fa fa-check-square"></i> <span>Billing Info</span></a></li>
			</ul>
		</div>
	</div>
	<div class="row booking-detail">
		<div class="container clear-padding">
			<div class="tab-content">
				<div id="review-booking" class="tab-pane fade in active">
					<div class="col-md-8 col-sm-8">
						<?php foreach ($this->cart->contents() as $items): ?>

						<div class="booking-summary-v2" style="border-radius: 10px;">
							<div class="col-md-4 col-sm-6 clear-padding">
								<img style="border-radius: 20px;" src="<?php echo base_url().'gallery/wisata/'.$items['gambar']; ?>" alt="cruise">
							</div>
							<div class="col-md-6 col-sm-6">
								<h4><i class="fa fa-map-marker"></i> <?php echo $items['name'] ?></h4>
								<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
									<p>START</p>
									<p><i class="fa fa-calendar"></i> SAT, 22 AUG</p>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
									<p>END</p>
									<p><i class="fa fa-calendar"></i> SAT, 29 AUG</p>
								</div>
								<div class="clearfix"></div>
								<p><span><i class="fa fa-user"></i></span> <small>For Max 5 Person</small></p>
								<p><i class="fa fa-money"></i><span> IDR</span> - <?php echo $items['price'] ?></p>
							</div>
							<div class="clearfix visible-sm-block"></div>
							<div class="col-md-2 text-center">
								<a href="<?php echo base_url('Booking/hapusCart/'.$items['rowid']) ?>" style="border-radius : 10px;"><small><i class="fa fa-trash" ></i> DELETE </small></a>
							</div>
						</div>
            <br>
						<?php endforeach ?>
						<button data-toggle="modal" data-target="#modalku" class="btn btn-danger" style="background-color: #f2676b; margin-top: 10px; color: white"> <i class="fa fa-plus"> Add Other</i></button><br>
					</div> <br>
					<div class="col-md-4 col-sm-4 booking-sidebar" style="border-radius: 10px;" >
						<div class="sidebar-item" style="border-radius: 10px;">
							<h4><i class="fa fa-bookmark"></i>Price Details</h4>
							<div class="sidebar-body">
								<table class="table">
                  <?php foreach ($this->cart->contents() as $items): ?>
									<tr>
										<td><?php echo $items['name'] ?></td>
										<td><?php echo number_format($items['price']) ?></td>
									</tr>
                <?php endforeach ?>
									<tr>
										<td>You Pay</td>
                    <?php $er = $this->cart->total() ?>
										<td class="total">IDR <?php echo number_format($er) ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div id="passenger-info" class="tab-pane fade">
          <div class="col-md-8 col-sm-8">
            <div class="login-box" style="margin-top:0px;">
						<h3>Trip Detail</h3>
						<div class="booking-form">
							<div class="col-md-12 col-sm-12">
								<form >
									<div class="row">
										<div class="col-md-12">
											<label>Start Date</label>
											<input class="form-control" type="date" name="emailid" required >
										</div>

										<div class="col-md-6">
											<label>Pick Up Point</label>
											<select class="form-control">
												<option>fghjhjmk</option>
											</select>

										</div>
										<div class="col-md-6">
											<label>Drop Point</label>
											<select class="form-control">
												<option>fghjhjmk</option>
											</select>

										</div>
										<div class="col-md-6 col-sm-6 search-col-padding">
											<label>Traveler</label><br>
											<input style="border-radius:10px;" id="adult_count" name="adult_count" value="1" class="form-control quantity-padding" max="5">
										</div>
									</div>
									<!-- <button style="border-radius: 10px; float: right;" type="button" data-toggle="tab" href="#passenger-info">Next</button> -->
								</form>
							</div>
						</div>
					</div> <br>
  					<div class="passenger-detail">
  						<h3>Guest Details</h3>
  						<div class="passenger-detail-body">
  							<form >
  								<div class="col-md-12 ol-sm-12">
  									<label>Full Name</label>
  									<input type="text" name="firstname" required class="form-control">
  								</div>
  								<div class="col-md-6 ol-sm-6">
  									<label>Email</label>
  									<input type="email" name="email" required class="form-control">
  								</div>
  								<div class="col-md-6 ol-sm-6">
  									<label>Phone Number</label>
  									<input type="text" name="phonenumber" class="form-control" required>
  								</div>
  								<div class="col-md-12">
  									<!-- <label><input type="checkbox" name="alert"> Send me newsletters and updates</label> -->
  								</div>
  								<div class="" style="float: right;">
  									<button type="submit" style="border-radius: 10px;">CONTINUE <i class="fa fa-chevron-right"></i></button>
  								</div>
  							</form>
  						</div>
  					</div>
  				</div>
					<div class="col-md-4 col-sm-4 booking-sidebar">
            <div class="sidebar-item">
							<h4><i class="fa fa-bookmark"></i>Price Details</h4>
							<div class="sidebar-body">
								<table class="table">
                  <?php foreach ($this->cart->contents() as $items): ?>
									<tr>
										<td><?php echo $items['name'] ?></td>
										<td><?php echo number_format($items['price']) ?></td>
									</tr>
                <?php endforeach ?>
									<tr>
										<td>You Pay</td>
                    <?php $er = $this->cart->total() ?>
										<td class="total">IDR <?php echo number_format($er) ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div id="billing-info" class="tab-pane fade">
					<div class="col-md-8 col-sm-8">
						<div class="passenger-detail">
							<h3>Choose Your Payment</h3>
							<div class="passenger-detail-body">
								<div class="saved-card">
									<form >
										<label data-toggle="collapse" data-target="#saved-card-1"><input type="radio" name="card"> <span>Bank BCA</span></label>
										<div id="saved-card-1" class="collapse">
											<div class="col-md-2 ">
											</div>
                      <div class="col-md-8">
                        <!-- <label>CVV</label> --><br>
                        <img src="<?php echo base_url() ?>gallery/icon/bca.png" style="width:300px;" alt="">
												<p class="text-center">a.n.</p>
                      </div>
										</div>
										<div class="clearfix"></div>
										<!-- <label data-toggle="collapse" data-target="#saved-card-2"><input type="radio" name="card"> <span>State Bank of India 1234 XXXX XXXX 1290</span></label> -->
										<div id="saved-card-2" class="collapse">
										</div>
										<div class="clearfix"></div>
									</form>
								</div>
								<div class="payment-seperator clearfix"></div>
								<div class="add-new-card">
									<h4>Add New Card</h4>
									<form >
										<div class="col-md-6 ol-sm-6">
											<label>Card Type</label>
											<select name="carttype" class="form-control">
												<option>Credit Card</option>
												<option>Debit Card</option>
												<option>Gift Card</option>
											</select>
										</div>
										<div class="col-md-6 ol-sm-6">
											<label>Card Number</label>
											<input type="text" name="cardnumber" required class="form-control">
										</div>
										<div class="col-md-6 ol-sm-6">
											<label>Card Expiry</label>
											<select name="cardexpiry" class="form-control">
												<option>Select</option>
												<option>Dec 2015</option>
												<option>Jan 2016</option>
												<option>Feb 2016</option>
												<option>Mar 2016</option>
												<option>Apr 2016</option>
											</select>
										</div>
										<div class="col-md-6 ol-sm-6">
											<label>CVV Number</label>
											<input type="password" name="cvvnumber" class="form-control">
										</div>
										<div class="col-md-12">
											<label><input type="checkbox" name="alert"> Save this card for future</label>
										</div>
										<div>
											<button type="submit">CONFIRM BOOKING <i class="fa fa-chevron-right"></i></button>
										</div>
									</form>
								</div>
								<div class="payment-seperator clearfix"></div>
								<div class="paypal-pay">
									<h4>Pay Using Paypal</h4>
									<div class="col-md-2 col-sm-2 col-xs-4">
										<i class="fa fa-paypal"></i>
									</div>
									<div class="col-md-10 col-sm-10 col-xs-8 ">
										<a href="#">CONFIRM BOOKING</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 booking-sidebar">
            <div class="sidebar-item">
							<h4><i class="fa fa-bookmark"></i>Price Details</h4>
							<div class="sidebar-body">
								<table class="table">
                  <?php foreach ($this->cart->contents() as $items): ?>
									<tr>
										<td><?php echo $items['name'] ?></td>
										<td><?php echo number_format($items['price']) ?></td>
									</tr>
                <?php endforeach ?>
									<tr>
										<td>You Pay</td>
                    <?php $er = $this->cart->total() ?>
										<td class="total">IDR <?php echo number_format($er) ?></td>
									</tr>
								</table>
							</div>
						</div>
            <br>
            <div class="col-md-10 col-sm-10 col-xs-8 ">
              <a href="#" type="button"class="btn btn-primary" >CONFIRM BOOKING</a>
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>
		<?php $this->load->view("user/side/footer"); ?>
 <?php $this->load->view("user/side/js"); ?>
</body>
</html>
<div class="modal fade" id="modalku" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">What Do You Wat to Order ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="fa fa-close"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <a href="<?php echo base_url('Hotel') ?>"> <img style="height: 180px; padding: 0px; border-radius:10px;"   src="<?php echo base_url() ?>gallery/icon/hotel.jpg" alt="" class="img-responsive "></a>
          </div>
          <div class="col-md-6">
            <a href="<?php echo base_url('Wisata') ?>"> <img style="height: 180px;  border-radius:10px;" src="<?php echo base_url() ?>gallery/icon/tour.jpg" alt="" class="img-responsive"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end modal small -->
