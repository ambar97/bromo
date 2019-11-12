 <?php $this->load->view("admin/side/head"); ?>
 <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/select2/dist/css/select2.min.css">
 <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/quill/dist/quill.core.css">
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
          <h3 class="mb-0">Tambah Data Destination</h3>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url('admin/Destination/update') ?>" method="post">
            <h2 class="">Data Destination</h2>
            <?php foreach ($wisata->result() as $wisata): ?>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label class="form-control-label" for="exampleFormControlInput1">Nama Destination</label>
                  <input type="hidden" name="idN" value="<?php echo $wisata->idwisata ?>">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Destination" name="nama" required="" value="<?php echo $wisata->nama_wisata ?>">
                </div>  
                <div class="col-lg-6">
                  <label class="form-control-label" for="exampleFormControlInput1">Harga</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp." name="harga" required="" value="<?php echo number_format( $wisata->harga) ?>">
                  <small>Penulisan format harga tanpa titik atau koma (ex 250000)</small>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="form-group col-lg-6">
              <label class="form-control-label" for="exampleFormControlInput1">No Telp</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No Telp" name="noTelp" required="" value="<?php echo $wisata->no_telp ?>">
            </div>
            <div class="form-group col-lg-6">
              <label class="form-control-label" for="exampleFormControlInput1">Rating</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" name="rating" required="" value="<?php echo $wisata->rating ?>">
            </div>
            </div>
            <div class="form-group">
             <label class="form-control-label" for="exampleFormControlInput1">Deskripsi</label>
             <textarea data-toggle="quill" data-quill-placeholder="" class="form-control" ></textarea>
             <!-- <div data-toggle="quill" data-quill-placeholder="" name="deskrip"></div> -->
           </div>
           <label class="form-control-label" for="exampleFormControlInput1">Foto</label>
           <input type="file" name="photo" class="form-control-label">
          <hr>
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
</html>