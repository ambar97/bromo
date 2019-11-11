<?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<div class="row page-title">
		<div class="container clear-padding text-center flight-title">
			<h3>CONTACT US</h3>
			<h4 class="thank">Let's Get Connected</h4>
		</div>
	</div>
	<!-- END: PAGE TITLE -->
	
	<!-- START: CONTACT-US -->
	<?php foreach ($contact->result() as $h): ?>
	<div class="row contact-address">
		<div class="container clear-padding">
			<div class="text-center">
				<h2><?php echo $h->judul ?></h2>
				<h5><?php echo $h->isi ?></h5>
				<div class="space"></div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-map-marker"></i>
					<p><?php echo $h->alamat ?></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-envelope-o"></i>
					<p><a href="mailto:<?php echo $h->email ?>"><?php echo $h->email ?></a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-phone"></i>
					<p><?php echo $h->noTelp ?></p>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach ?>
	<!-- END: CONTACT-US -->
	<!-- START: MAP & CONTACT FORM -->
	<div class="row" style="background-color: white">
		<div class="container clear-padding">
			<div class="col-md-6 col-sm-6">
				<iframe class="contact-map" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY"></iframe>
			</div>
			<div class="col-md-6 col-sm-6 contact-form">
				<div class="col-md-12">
					<h2>DROP A MESSAGE</h2>
					<h5>Drop Us a Message</h5>
				</div>
				<form method="post" action="<?php echo base_url('ContactUs/pesan') ?>">
					<div class="col-md-6 col-sm-6">
						<input type="text" name="nama" required class="form-control" placeholder="Your Name" required="">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" name="mail" required class="form-control" placeholder="Your Email" required="">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<input type="text" name="judul" required class="form-control" placeholder="Message Title" required="">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<textarea class="form-control" name="isi" rows="5" id="comment" placeholder="Your Message" required=""></textarea>
					</div>
					<div class="clearfix"></div>
					<div class="text-center">
						<button type="submit" class="btn btn-default submit-review">SEND YOUR MESSAGE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
		<?php $this->load->view("user/side/footer"); ?>

 <?php $this->load->view("user/side/js"); ?>
</body>
</html>