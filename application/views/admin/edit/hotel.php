<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/navbar");?>


<div class="header bg-primary pb-6">
 <div class="container-fluid">
   <div class="header-body">
     <div class="row align-items-center py-4">
       <div class="col-lg-6 col-7">
         <h6 class="h2 text-white d-inline-block mb-0">Hotel</h6>
         <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
           <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
             <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
             <li class="breadcrumb-item"><a href="#">Hotel</a></li>
             <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
           </ol>
         </nav>
       </div>
     </div>
     <!-- Card stats -->

   </div>
 </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="content">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <form role="form" action="<?php echo base_url('admin/Hotel/prosesEditHotel'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php foreach ($hotel->result() as $h): ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Hotel</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="idhotel" value="<?php echo $h->idhotel; ?>" hidden>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="nama_hotel" value="<?php echo $h->nama_hotel; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Rating</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Rating" name="rating" value="<?php echo $h->rating; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label><br>
                    <textarea name="deskripsi" data-toggle="quill" data-quill-placeholder="" class="form-control" ><?php echo $h->deskripsi; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" name="harga" value="<?php echo $h->harga; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar">
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
                  <img class="img-fluid" src="<?php echo base_url().'gallery/hotel/'.$g->gambar; ?>" alt="">
                </div>
                <div class="card-footer d-flex justify-content-center">
                  <!-- <input type="text" name="id_gambar" value="<?php// echo $g->hotel_idhotel; ?>" hidden> -->
                  <a class="btn btn-danger text-white" href="<?php echo base_url('admin/Hotel/prosesHapusGambar/').$g->gambar; ?>">Hapus</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- Footer -->

 <?php $this->load->view('admin/side/footer') ?>
 <?php $this->load->view('admin/side/js') ?>
 <!-- Argon JS -->
 <script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>
 <script>
       $('#summernote').summernote({
         placeholder: 'Hello stand alone ui',
         tabsize: 2,
         height: 100
       });
     </script>
</body>
</html>
