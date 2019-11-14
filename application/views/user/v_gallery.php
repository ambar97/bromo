<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>
<div class="row gallery-row" style="background-color: white">
	<div class="container clear-padding">
		<div class="image-set">
			<?php foreach ($lery->result() as $ler): ?>
			<div class="col-md-3 col-sm-3" >
				<div class="image-wrapper">
					<img src="<?php echo base_url().$ler->gambar ?>" alt="Cruise" style="border-radius: 20px; height: 200px">
					<div class="img-caption">
						<div class="link">
							<a  href="" data-toggle="modal" data-target="#myModal<?php echo $ler->idgalery ?>">
								<i class="fa fa-plus"></i>
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
<div class="modal fade" id="myModal<?php echo $ler->idgalery ?>" tabindex="-1" role="dialog" style="margin-top: 150px; border-radius: 50px;" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-body" style="height: 300px;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-close"></i>
					</button>
					<div class="row" style="margin-top: 40px">
						<div class="col-sm-5">
					<img src="<?php echo base_url().$ler->gambar ?>" alt="Cruise" style="border-radius: 20px; height: 200px; width: 200px;">
							
						</div>
						<div class="col-sm-7">
							<blockquote><i class="fa fa-hand-o-right" style="margin-right: 10px"></i><small><?php echo $ler->deskripsi ?></small></blockquote>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<?php endforeach ?>