<?php $this->load->view("user/side/head"); ?>
<style type="text/css">
	.booking-form .form-control{
		border-radius: 10px;
	}
	.passenger-detail .form-control{
		border-radius: 10px;	
	}
	.login-box{
		border-radius: 10px;
	}
	.sidebar-item{
		border-radius: 10px;
	}
</style>
<?php $this->load->view("user/side/navbar"); ?>
<!-- START: PAGE TITLE -->
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
			<div id="review-booking" class="tab-pane fade in active" >
				<div class="col-md-8 col-sm-8" >

					<div class="login-box" style="margin-top: 0px;" >
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
											<label>Adult</label><br>
											<input style="border-radius:10px;" id="adult_count" name="adult_count" value="1" class="form-control quantity-padding">
										</div>
										<div class="col-md-6 col-sm-6 search-col-padding">
											<label>Child</label><br>
											<input style="border-radius:10px;" id="child_count" name="child_count" value="1" class="form-control quantity-padding">
										</div>
									</div>
									<button style="border-radius: 10px; float: right;" type="button" data-toggle="tab" href="#passenger-info">Next</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 booking-sidebar">
					<div class="sidebar-item">
						<h4><i class="fa fa-bookmark"></i>Paket Details</h4>
						<div class="sidebar-body">
							<?php foreach ($detail->result() as $paket): ?>

								<table class="table">
									<tr>
										<td>Nama Paket</td>
										<td><?php echo $paket->nama_paket ?></td>
									</tr>
									<tr>
										<td>Durasi</td>
										<td><?php echo $paket->durasi ?></td>
									</tr>
									<tr>
										<td>You Pay</td>
										<td class="total">IDR <?php echo number_format($paket->harga) ?></td>
									</tr>
								</table>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
			<div id="passenger-info" class="tab-pane fade ">
				<div class="col-md-8 col-sm-8">
					<div class="passenger-detail">
						<h3>Guest Details</h3>
						<div class="passenger-detail-body">
							<form >
								<div class="col-md-6 ol-sm-6">
									<label>First Name</label>
									<input type="text" name="firstname" required class="form-control">
								</div>
								<div class="col-md-6 ol-sm-6">
									<label>Last Name</label>
									<input type="text" name="lastname" required class="form-control">
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
						<h4><i class="fa fa-bookmark"></i>Paket Details</h4>
						<div class="sidebar-body">
							<?php foreach ($detail->result() as $paket): ?>

								<table class="table">
									<tr>
										<td>Nama Paket</td>
										<td><?php echo $paket->nama_paket ?></td>
									</tr>
									<tr>
										<td>Durasi</td>
										<td><?php echo $paket->durasi ?></td>
									</tr>
									<tr>
										<td>You Pay</td>
										<td class="total">IDR <?php echo number_format($paket->harga) ?></td>
									</tr>
								</table>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
			<div id="billing-info" class="tab-pane fade">
				<div class="col-md-8 col-sm-8">
					<div class="passenger-detail">
						<h3>Payment Mode</h3>
						<div class="passenger-detail-body">
							<div class="saved-card">
								<form >
									<label data-toggle="collapse" data-target="#saved-card-1"><input type="radio" name="card"> <span>Bank of America 1234 XXXX XXXX 1290</span></label>
									<div id="saved-card-1" class="collapse">
										<div class="col-md-4 col-sm-4">
											<label>CVV</label>
											<input type="password" required class="form-control">
										</div>
									</div>
									<div class="clearfix"></div>
									<label data-toggle="collapse" data-target="#saved-card-2"><input type="radio" name="card"> <span>State Bank of India 1234 XXXX XXXX 1290</span></label>
									<div id="saved-card-2" class="collapse">
										<div class="col-md-4 col-sm-4">
											<label>CVV</label>
											<input type="password" required class="form-control">
										</div>
									</div>
									<div class="clearfix"></div>
									<div>
										<button type="submit">CONFIRM BOOKING <i class="fa fa-chevron-right"></i></button>
									</div>
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
								<div class="col-md-10 col-sm-10 col-xs-8">
									<a href="#">CONFIRM BOOKING</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 booking-sidebar">
					<div class="sidebar-item">
						<h4><i class="fa fa-bookmark"></i>Paket Details</h4>
						<div class="sidebar-body">
							<?php foreach ($detail->result() as $paket): ?>

								<table class="table">
									<tr>
										<td>Nama Paket</td>
										<td><?php echo $paket->nama_paket ?></td>
									</tr>
									<tr>
										<td>Durasi</td>
										<td><?php echo $paket->durasi ?></td>
									</tr>
									<tr>
										<td>You Pay</td>
										<td class="total">IDR <?php echo number_format($paket->harga) ?></td>
									</tr>
								</table>
							<?php endforeach ?>
						</div>
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