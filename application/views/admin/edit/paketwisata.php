<?php $this->load->view("admin/side/head"); ?>
<link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/quill/dist/quill.core.css">
<?php $this->load->view("admin/side/navbar"); ?>
<div class="header bg-primary pb-6">
 <div class="container-fluid">
   <div class="header-body">
     <div class="row align-items-center py-4">
       <div class="col-lg-6 col-7">
         <h6 class="h2 text-white d-inline-block mb-0">Tambah Paket</h6>
         <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
           <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
             <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
             <li class="breadcrumb-item"><a href="#">Paket Wisata</a></li>
             <li class="breadcrumb-item active" aria-current="page">Tambah Paket</li>
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
  <?php foreach ($paket->result() as $p): ?>
    <div class="row">
     <div class="col-lg-12">
       <div class="card-wrapper">
         <div class="card">
           <div class="card-header">
             <h3 class="mb-0">Edit Paket Wisata</h3>
           </div>
           <div class="card-body">
             <form action="<?php echo base_url('admin/PaketWisata/prosesEditPaket') ?>" method="post" enctype="multipart/form-data">
               <h2 class="">Data Paket</h2>
               <div class="form-group">
                 <div class="row">
                   <div class="col-lg-6">
                     <label class="form-control-label" for="exampleFormControlInput1">Nama Paket</label>
                     <input type="text" name="idpaket_wisata" value="<?php echo $p->idpaket_wisata; ?>" hidden>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Paket" name="nama_paket" required="" value="<?php echo $p->nama_paket; ?>">
                   </div>
                   <div class="col-lg-6">
                     <label class="form-control-label" for="exampleFormControlInput1">Harga</label>
                     <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Harga" name="harga" required="" value="<?php echo $p->harga; ?>">
                   </div>
                 </div>
               </div>
               <div class="form-group">
                 <div class="row">
                  <div class="col-lg-12">
                    <label class="form-control-label" for="exampleFormControlInput1">Keterangan</label>
                    <textarea class="form-control" name="keterangan"><?php echo $p->keterangan; ?></textarea>
                  </div>
                 </div>
               </div>
               <div class="form-group">
                 <div class="row">
                   <div class="col-lg-12">
                     <label class="form-control-label" for="exampleFormControlInput1">Durasi</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh 2 hari 1 malam" name="durasi" required="" value="<?php echo $p->durasi; ?>">
                   </div>
                </div>
               </div>
               <div class="form-group">
                 <div class="row">
                    <div class="col-lg-12">
                      <label class="form-control-label" for="exampleFormControlInput1">Include</label>
                      <textarea class="form-control" name="include"><?php echo $p->include; ?></textarea>
                    </div>
                  </div>
               </div>
               <div class="form-group">
                 <div class="row">
                   <div class="col-lg-12">
                     <label class="form-control-label" for="exampleFormControlInput1">Exclude</label>
                     <textarea class="form-control" name="exclude"><?php echo $p->exclude; ?></textarea>
                   </div>
                 </div>
               </div>
               <div class="form-group">
                 <div class="row">
                   <div class="col-lg-12">
                     <label class="form-control-label" for="exampleFormControlInput1">Foto</label>
                     <input type="file" name="gambar" class="form-control">
                   </div>
                 </div>
               </div>
             </div>
             <div class="form-group">
               <div class="row">
                 <div class="col-lg-12 ml--5">
                   <button class="btn btn-icon btn-primary float-right" type="submit" name="btnSimpan">
                     <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                     <span class="btn-inner--text">Simpan</span>
                   </button>
                 </div>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
    </div>
    </div>
  <?php endforeach; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-wrapper">
          <div class="card">
            <div class="card-header">
              <b>Gambar Paket</b>
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="row">
                  <?php foreach ($gallery->result() as $g): ?>
                    <div class="col-md-3">
                      <div class="card">
                        <div class="card-header">
                          <?php echo $g->gambar; ?>
                        </div>
                        <div class="card-body" style="height:200px">
                          <img class="img-fluid" src="<?php echo base_url().'gallery/paket/'.$g->gambar; ?>" alt="">
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                          <input type="text" name="id_gambar" value="<?php echo $g->hotel_idhotel; ?>" hidden>
                          <a class="btn btn-danger text-white" href="<?php echo base_url('admin/PaketWisata/prosesHapusGambar/').$g->gambar; ?>">Hapus</a>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
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
