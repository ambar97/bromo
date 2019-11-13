<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/navbar"); ?>
<div class="header bg-primary pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Gallery</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Gallery</a></li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#myModal">New</a>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Modal title</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<i class="fa fa-close"></i>
									</button>
								</div>
								<form action="<?php echo base_url('admin/Galery/tamfoto') ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="form-grup">
											<label>Deskripsi Galery</label>
											<textarea class="form-control" name="desk"></textarea>
										</div><br>
										<div class="form-grup">
											<label>Foto</label>
											<input type="file" name="ght" class="form-control">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br><br>
<div class="container-fluid mt--6">
	<div class="row card-wrapper">
		<div class="row container-fluid">
			<?php foreach ($slider->result() as $hj): ?>
				<div class="col-lg-3">
			<div class="card">
            <img class="card-img-top" src="<?php echo base_url().$hj->gambar?>" alt="Image placeholder" style=" padding: 5px; height: 200px; border-radius: 10px;" >
            <div class="card-body">
              <h5 class="card-title mb-0"><?php echo $hj->deskripsi ?></h5>
              <!-- <small class="text-muted">by John Snow on Oct 29th at 10:23 AM</small> -->
              <p></p>
              <a href="<?php echo base_url('admin/Galery/hapusGambar/'.$hj->idgalery) ?>" type="button" onclick="javascript: return confirm('Anda Yakin Akan ingin memvalidasi pembayaran ?')" class="btn  btn-danger">Hapus</a>
            </div>
          </div>
				</div>
          <?php endforeach ?>
		</div>
	</div>
</div>
<?php $this->load->view('admin/side/footer') ?>
<?php $this->load->view('admin/side/js') ?>
<!-- Argon JS -->
<script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>
</body>
</html>
