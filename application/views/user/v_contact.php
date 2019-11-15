<?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
	<!-- <div class="row"> -->
	<div class="row about-intro">
		<div class="container clear-padding">
			<div class="col-md-6 col-sm-6 contact-form">
				<h2>Contact Here</h2>
				<h4></h4>
				<div class="row">
					<?php foreach ($contact->result() as $h): ?>
					<div class="col-md-6">
						<!-- <p class="thank"><i class="fa fa-envelope-o" style="background: red;"></i><a href="" style="color: black"> <small> e-mail :</small>  <?php// echo $h->email ?></a></p> -->
            <p><img src="<?php echo base_url().'gallery/icon/gmail.png'; ?>" style="max-width:40px; max-height:40px;" alt=""><a href="" style="color: black"> <small> e-mail :</small>  <?php echo $h->email ?></a></p>
						<!-- <p class="thank"><i class="fa fa-phone" style="background: brown"> </i><a href="" style="color: black"><small> Telp :</small> <?php //echo $h->noTelp ?></a></p> -->
            <p><img src="<?php echo base_url().'gallery/icon/telepon.png'; ?>" style="max-width:40px; max-height:40px;" alt=""><a href="" style="color: black"><small> Telp :</small> <?php echo $h->noTelp ?></a></p>
						<!-- <p class="thank"><i class="fa fa-whatsapp" style="background: green"> </i><a href="" style="color: black"><small> WhatsApp :</small> <?php// echo $h->noWa ?></a></p> -->
            <p><img src="<?php echo base_url().'gallery/icon/whatsapp.png'; ?>" style="max-width:40px; max-height:40px;" alt=""><a href="https://api.whatsapp.com/send?phone=<?php echo $h->noWa ?>" style="color: black"><small> WhatsApp :</small> +<?php echo $h->noWa ?></a></p>
						<!-- <p class="thank"><i class="fa fa-map-marker"></i><a href="" style="color: black">  <?php //echo $h->alamat ?></a></p> -->
            <p><img src="<?php echo base_url().'gallery/icon/location.png'; ?>" style="max-width:40px; max-height:40px;" alt=""><a href="" style="color: black">  <?php echo $h->alamat ?></a></p>

					</div>
					<div class="col-md-6">
						<!-- <p class="thank"><i class="fa fa-instagram" style="background: orange"> </i><a href="" style="color: black"> <small> Instagram :</small> <?php// echo $h->ig ?></a></p> -->
            <p><img src="<?php echo base_url().'gallery/icon/instagram.png' ?>" style="max-width:40px; max-height:40px;" alt=""><a href="" style="color: black"> <small> Instagram :</small> <?php echo $h->ig ?></a></p>
						<!-- <p class="thank"><i class="fa fa-facebook" style="background: blue"> </i><a href="" style="color: black"><small> Facebook :</small> <?php// echo $h->facebook ?></a></p> -->
            <p><img src="<?php echo base_url().'gallery/icon/facebook.png' ?>" style="max-width:40px; max-height:40px;" alt=""><a href="" style="color: black"><small> Facebook :</small> <?php echo $h->facebook ?></a></p>
						<!-- <p class="thank"><i class="fa fa-phone" style="background: green"> </i><a href="" style="color: black"> <small> line :</small> <?php// echo $h->idLine ?></a></p> -->
            <p><img src="<?php echo base_url().'gallery/icon/line.png' ?>" style="max-width:40px; max-height:40px;" alt=""><a href="" style="color: black"> <small> line :</small> <?php echo $h->idLine ?></a></p>

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
		<div class="">
			<div class="col-md-12 col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.3128206512242!2d113.22528136614838!3d-7.756609238691254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDUnMjMuOCJTIDExM8KwMTMnMzYuNiJF!5e0!3m2!1sid!2sid!4v1573670566979!5m2!1sid!2sid"  height="450" frameborder="0" width="100%" style="border:0;" allowfullscreen=""></iframe>
			</div>

		</div>
	</div>
		<?php $this->load->view("user/side/footer"); ?>

 <?php $this->load->view("user/side/js"); ?>
</body>
</html>
