<?php $this->load->view("admin/side/head"); ?>
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
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
              <div class="card-header card-header-rose card-header-icon">
                <h4 class="card-title">Edit Hotel</h4>
              </div>
              <div class="card-body ">
                <form method="post" action="#">
                  <div class="form-group">
                    <label for="exampleEmail" class="bmd-label-floating">Nama Hotel</label>
                    <input type="text" class="form-control" id="exampleEmail">
                  </div>
                  <div class="form-group">
                    <label for="examplePass" class="bmd-label-floating">Rating</label>
                    <input type="text" class="form-control" id="examplePass">
                  </div>
                  <div class="form-group">
                    <label for="examplePass" class="bmd-label-floating">Deskripsi</label>
                    <textarea class="form-control" id="summernote" name="deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="examplePass" class="bmd-label-floating">Harga</label>
                    <input type="int" class="form-control" id="examplePass">
                  </div>
                </form>
              </div>
              <div class="card-footer ">
                <button type="submit" class="btn btn-fill btn-rose">Submit</button>
              </div>
            </div>
          </div>
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
