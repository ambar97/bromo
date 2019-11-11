<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/navbar"); ?>
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Contact Us</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
              <!-- <li class="breadcrumb-item active" aria-current="page">Data Destination</li> -->
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <!-- Table -->
  <div class="row">
    <div class="col">
     <div class="card">
      <div class="card-header">
        <form action="<?php echo base_url('admin/Contact/update') ?>" method="post">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Edit profile </h3>
          </div>
          <div class="col-4 text-right">
            <button class="btn btn-sm btn-primary" type="submit">Perbarui</button>
          </div>
        </div>
      </div>
      <div class="card-body">
          <?php foreach ($pro->result() as $cont): ?>
          <h6 class="heading-small text-muted mb-4">Contact Information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Email</label>
                  <input type="hidden" id="input-email" class="form-control" name="id" value="<?php echo $cont->idcontact ?>">
                  <input type="text" id="input-email" class="form-control" name="email" value="<?php echo $cont->email ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">No Telp</label>
                  <input type="text" id="input-email" name="telp" class="form-control"value="<?php echo $cont->noTelp ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-first-name">No Whatsapp</label>
                  <input type="text" id="input-first-name" name="wa" class="form-control" value="<?php echo $cont->noWa ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-last-name">Id We Chat</label>
                  <input type="text" id="input-last-name" name="wchat" class="form-control" value="<?php echo $cont->idWchat ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-last-name">Id Line</label>
                  <input type="text" id="input-last-name" name="line" class="form-control" value="<?php echo $cont->idLine ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-last-name">Facebook</label>
                  <input type="text" id="input-last-name" name="fb" class="form-control" value="<?php echo $cont->facebook ?>">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-last-name">Instagram</label>
                  <input type="text" id="input-last-name" name="ig" class="form-control" value="<?php echo $cont->ig ?>">
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />
          <!-- Address -->
          <h6 class="heading-small text-muted mb-4">Head Panel</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label" for="input-address">Judul Head</label>
                  <input id="input-address" class="form-control" name="judul" placeholder="Home Address"value="<?php echo $cont->judul ?>" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label" for="input-city">Isi</label>
                   <input id="input-address" name="isi" class="form-control" placeholder="Home Address" value="<?php echo $cont->isi ?>"  type="text">
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />
          <!-- Description -->
          <h6 class="heading-small text-muted mb-4">Alamat</h6>
          <div class="pl-lg-4">
            <div class="form-group">
              <label class="form-control-label">Alamat</label>
              <textarea rows="4" name="alamat" class="form-control"><?php echo $cont->alamat ?></textarea>
            </div>
          </div>
          <?php endforeach ?>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/side/footer') ?>
<?php $this->load->view('admin/side/js') ?>
<script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>
<?php if ($this->session->flashdata()) { ?>
  <?php echo $this->session->flashdata('Pesan'); ?>                   
<?php } ?>
</body>
</html>