 <?php $this->load->view("admin/side/head"); ?>
 <link href="<?php echo base_url('master/summernote/summernote.css'); ?>" rel="stylesheet">
 <?php $this->load->view("admin/side/navbar"); ?>
 <div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Edit Destination</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Destination</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Destination</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
 <div class="row">
  <div class="col-lg-12">
    <div class="card-wrapper">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Edit Data Destination</h3>
        </div>
        <div class="card-body">
          <form role="form" action="<?php echo base_url('admin/Destination/prosesEditWisata') ?>" method="post" enctype="multipart/form-data">
            <h2 class="">Data Destination</h2>
            <?php foreach ($wisata->result() as $wisata): ?>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label class="form-control-label" for="exampleFormControlInput1">Nama Destination</label>
                  <input type="hidden" name="idN" value="<?php echo $wisata->idwisata; ?>">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Destination" name="nama" required="" value="<?php echo $wisata->nama_wisata; ?>">
                  <?php $id = $wisata->idwisata; ?>
                </div>
                <div class="col-lg-6">
                  <label class="form-control-label" for="exampleFormControlInput1">Harga</label>
                  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Rp." name="harga" required="" value="<?php echo $wisata->harga; ?>">
                  <small>Penulisan format harga tanpa titik atau koma (ex 250000)</small>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="form-group col-lg-6">
              <label class="form-control-label" for="exampleFormControlInput1">Rating</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Isikan minimal 1" name="rating" required="" value="<?php echo $wisata->rating; ?>">
            </div>
            </div>
            <div class="form-group">
             <label class="form-control-label" for="exampleFormControlInput1">Deskripsi</label>
             <textarea id="summernote" name="deskrip"><?php echo $wisata->deskripsi_w; ?></textarea>
             <!-- <div data-toggle="quill" data-quill-placeholder="" name="deskrip"></div> -->
           </div>
           <div class="form-group">
             <label class="form-control-label" for="exampleFormControlInput1">Foto</label>
             <input type="file" name="gambar">
           </div>
          <hr>
          <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Fasilitas</label><br>
            <?php foreach ($fasilitas->result() as $f): ?>
              <i class="<?php echo $f->icon; ?>"></i> <?php echo $f->nama_fasilitas; ?><br>
            <?php endforeach; ?>
          </div>
          <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#myModal">
            Edit Fasilitas
          </button>
          <div>
            <button class="btn btn-icon btn-primary float-right" type="submit" name="btnSimpan">
              <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
              <span class="btn-inner--text">Simpan</span>
            </button>
          </div>
          <?php endforeach ?>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
  <?php foreach ($gallery->result() as $g): ?>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <?php echo $g->gambar; ?>
        </div>
        <div class="card-body" style="height:200px">
          <img class="img-fluid" src="<?php echo base_url().'gallery/wisata/'.$g->gambar; ?>" alt="">
        </div>
        <div class="card-footer d-flex justify-content-center">
          <!-- <input type="text" name="id_gambar" value="<?php// echo $g->hotel_idhotel; ?>" hidden> -->
          <a class="btn btn-danger text-white" href="<?php echo base_url('admin/Destination/prosesHapusGambar/'.$g->gambar );?>">Hapus</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
</div>
<?php $this->load->view('admin/side/footer') ?>
<?php $this->load->view('admin/side/js') ?>
<script src="<?php echo base_url()?>master/assets/vendor/quill/dist/quill.min.js"></script>
<script src="<?php echo base_url()?>master/assets/vendor/select2/dist/js/select2.min.js"></script>
<script src="<?php echo base_url()?>master/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>

<?php if ($this->session->flashdata()) { ?>
  <?php echo $this->session->flashdata('Pesan'); ?>
<?php } ?>
</body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-body">
          <h2>Edit Fasilitas Hotel</h2>
          <hr>
          <form role="form" action="<?php echo base_url('admin/Destination/prosesEditFasilitas'); ?>" method="post" enctype="multipart/form-data">
            <?php foreach ($daftar_fasilitas->result() as $df): ?>
                <input class="" id="musholla" type="checkbox" value="<?php echo $df->icon; ?>" name="fasilitas[]"> <i class="<?php echo $df->icon; ?>"></i> <label><?php echo $df->nama_fasilitas; ?></label> <br>
                <input type="text" name="idwisata" value="<?php echo $id; ?>" hidden>
            <?php endforeach; ?>
            <br>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
          </form>
				</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('master/summernote/summernote.js'); ?>"></script>
<script>
	$('#summernote').summernote({
		placeholder: 'Edit di sini',
		tabsize: 2,
		height: 500
	});
</script>
</html>
