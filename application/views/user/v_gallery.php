<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>
<div class="contact-form">

<h2 class="text-center">GALLERY OF SUNSETVIEW</h2>
</div>
<div class="row gallery-row" style="background-color: white">
	<div class="container clear-padding">
		<div class="image-set">
			<?php foreach ($lery->result() as $ler): ?>
			<div class="col-md-3 col-sm-4" >
				<div class="image-wrapper">
					<img src="<?php echo base_url().$ler->gambar ?>" alt="Cruise" style="border-radius: 20px; height: 280px; width: 100%;">
					<div class="img-caption">
						<div class="link">
							<a  href="" data-toggle="modal" data-target="#myModal<?php echo $ler->idgalery ?>">
								<i class="fa fa-search"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<?php $this->load->view("user/side/footer"); ?>

<?php $this->load->view("user/side/js"); ?>
</body>
</html>
<?php foreach ($lery->result() as $ler): ?>
<div class="modal fade" id="myModal<?php echo $ler->idgalery ?>" tabindex="-1" role="dialog" style="margin-top: 100px; border-radius: 50px;" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
				<div class="modal-body" style="height: 400px; ">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-close"></i>
					</button>
					<div class="row" style="margin-top: 10px">
						<div class="col-sm-6">
					<img src="<?php echo base_url().$ler->gambar ?>" alt="Cruise" style="border-radius: 20px; margin-top: 30px; height: 280px; width: 100%;">

						</div>

					<div class="col-sm-6" style="margin-top: 20px; padding-left: 20px;">
							<p style="font-weight: bold;"><?php echo $ler->tag ?></p>
							<blockquote><small><?php echo $ler->deskripsi ?></small></blockquote>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<?php endforeach ?>
