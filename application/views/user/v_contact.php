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
	<div class="row contact-address">
		<div class="container clear-padding">
			<div class="text-center">
				<h2>GET IN TOUCH</h2>
				<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h5>
				<div class="space"></div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-map-marker"></i>
					<p>Street #42, Burbank, LA</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-envelope-o"></i>
					<p><a href="mailto:your@email.com">your@email.com</a></p>
				</div>
				<div class="col-md-4 col-sm-4">
					<i class="fa fa-phone"></i>
					<p>+91 1234567890</p>
				</div>
			</div>
		</div>
	</div>
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
				<form >
					<div class="col-md-6 col-sm-6">
						<input type="text" name="name" required class="form-control" placeholder="Your Name">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" name="email" required class="form-control" placeholder="Your Email">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<input type="text" name="message-title" required class="form-control" placeholder="Message Title">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<textarea class="form-control" rows="5" id="comment" placeholder="Your Message"></textarea>
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