<?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<div class="row page-title">
	<div class="container clear-padding text-center flight-title">
		<h3>CONTACT US</h3>
		<h4 class="thank">Let's Get Connected</h4>
	</div>
</div>
	<!-- <div class="row"> -->
	<div class="row about-intro">
		<div class="container clear-padding">
			<div class="col-md-6 col-sm-6 contact-form">
				<h2>Contact Here</h2>
				<h4></h4>
				<div class="row">
					<?php foreach ($contact->result() as $h): ?>
					<div class="col-md-6">
						<p class="thank"><i class="fa fa-envelope-o"></i><a href="" style="color: black"> <?php echo $h->email ?></a></p>
						<p class="thank"><i class="fa fa-phone"> </i><a href="" style="color: black"><?php echo $h->noTelp ?></a></p>
						<p class="thank"><i class="fa fa-whatsapp"> </i><a href="" style="color: black"><?php echo $h->noWa ?></a></p>
						<p class="thank"><i class="fa fa-map-marker"></i><a href="" style="color: black">  <?php echo $h->alamat ?></a></p>

					</div>
					<div class="col-md-6">
						<p class="thank"><i class="fa fa-instagram"> </i><a href="" style="color: black">  <?php echo $h->ig ?></a></p>
						<p class="thank"><i class="fa fa-facebook"> </i><a href="" style="color: black"> <?php echo $h->facebook ?></a></p>
						<p class="thank"><i class="fa fa-phone"> </i><a href="" style="color: black">  <?php echo $h->idLine ?></a></p>
						
					</div>
					<hr>
					<?php endforeach ?>

				</div>
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
	<!-- END: CONTACT-US -->
	<!-- START: MAP & CONTACT FORM -->
	<div class="row" style="background-color: white">
		<div class="container clear-padding">
			<div class="col-md-12 col-sm-12">
				<iframe class="contact-map" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJG1usnet4BTkRzQqb_Ys-JOg&amp;key=AIzaSyB6hgZM-ruUqTPVUjXGUR-vv7WRqc4MXjY"></iframe>
			</div>
			
		</div>
	</div>
		<?php $this->load->view("user/side/footer"); ?>

 <?php $this->load->view("user/side/js"); ?>
</body>
</html>