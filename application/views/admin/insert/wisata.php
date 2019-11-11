 <?php $this->load->view("admin/side/head"); ?>

 <?php $this->load->view("admin/side/navbar"); ?>
 <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form id="LoginValidation" action="<?php echo base_url('admin/Wisata/tabahDataWisata') ?>" method="post">
          <div class="card ">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Tambah Data Wisata</h4>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleEmails" class="bmd-label-floating"> Nama Wisata *</label>
                  <input type="text" class="form-control" id="exampleEmails" required="true" name="nama" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleEmails" class="bmd-label-floating"> Nama Wisata (English) *</label>
                  <input type="text" class="form-control" id="exampleEmails" required="true" name="namae" required="">
                </div>
              </div>
              <div class="row">
              <div class="form-group col-md-6" >
                <label for="examplePasswords" class="bmd-label-floating"> Harga (Rp) *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="harga" required="">
              </div>
              <div class="form-group col-md-6" >
                <label for="examplePasswords" class="bmd-label-floating"> Price ($) *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="hargae" required="">
              </div>
              <div class="form-group col-md-6" >
                <label for="examplePasswords" class="bmd-label-floating"> Rating *</label>
                <input type="text" class="form-control" id="examplePasswords" required="true" name="rating" required="">
              </div>
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Deskripsi *</label>
                <textarea id="summernote" name="deskrip" required></textarea>
              </div>
              <div class="form-group">
                <label for="examplePasswords" class="bmd-label-floating"> Deskripsi (English) *</label>
                <textarea id="summernote" name="deskripe" required></textarea>
              </div>
              <div class="category form-category">* Required fields</div>
            </div>
            <div class="card-footer ml-auto" style="float: right;">
              <button type="submit" class="btn btn-rose" >Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/side/rightside') ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });

    $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
  </script>
  <script src="<?php echo base_url() ?>master/admin/summernote/dist/summernote.min.js"></script>
<?php $this->load->view('admin/side/js') ?>

<?php if ($this->session->flashdata()) { ?>
  <?php echo $this->session->flashdata('Pesan'); ?>                   
  <?php } ?>
</body>
</html>
