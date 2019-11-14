<?php $this->load->view("admin/side/head"); ?>
<link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/quill/dist/quill.core.css">
<?php $this->load->view("admin/side/navbar"); ?>
<div class="header bg-primary pb-6">
 <div class="container-fluid">
   <div class="header-body">
     <div class="row align-items-center py-4">
       <div class="col-lg-6 col-7">
         <h6 class="h2 text-white d-inline-block mb-0">Kelola Fasilitas</h6>
         <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
           <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
             <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
             <li class="breadcrumb-item"><a href="#">Fasilitas Single Tour</a></li>
             <li class="breadcrumb-item active" aria-current="page">Kelola Fasilitas</li>
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
         <h3 class="mb-0">Tambah Daftar Fasilitas</h3>
       </div>
       <div class="card-body">
         <form role="form" action="<?php echo base_url('admin/Hotel/prosesTambahFasilitas') ?>" method="post" enctype="multipart/form-data">
           <h2 class="">Daftar Fasilitas</h2>
           <div class="form-group">
             <div class="row">
               <div class="col-lg-12">
                 <p>Kunjungi <a href="https://fontawesome.com/v4.7.0/icons/">Font Awesome</a> untuk  melihat daftar icon menarik</p>
               </div>
             </div>
             <div class="row">
               <div class="col-lg-6">
                 <label class="form-control-label" for="exampleFormControlInput1">Code Icon Fasilitas</label>
                 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="fa fa-bed" name="icon" required>
                 <small>Copy and Paste isi class dari Font Awesome seperti: <xmp><i class="fa fa-bed" aria-hidden="true"></i></xmp> </small>
               </div>
               <div class="col-lg-6">
                 <label class="form-control-label" for="exampleFormControlInput1">Nama Fasilitas</label>
                 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hotel" name="nama_fasilitas" required>
               </div>
             </div>
           </div>
         <div>
           <button class="btn btn-icon btn-primary float-right" type="submit" name="btnSimpan">
             <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
             <span class="btn-inner--text">Simpan</span>
           </button>
         </div>
       </form>
     </div>
   </div>
 </div>
</div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card-wrapper">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Daftar Fasilitas</h3>
        </div>
        <div class="card-body">
          <table class="table">
            <tr>
              <th>Fasilitas</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($fasilitas->result() as $f): ?>
            <tr>
              <td><p><i class="<?php echo $f->icon; ?>"></i> <?php echo $f->nama_fasilitas; ?></p></td>
              <td><a class="btn btn-danger" href="<?php echo base_url('admin/Destination/prosesHapusFasilitas/'.$f->id_fasilitas); ?>">Hapus</a></td>
            </tr>
          <?php endforeach; ?>
          </table>
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
