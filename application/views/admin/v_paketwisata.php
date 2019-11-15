<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/navbar"); ?>

<div class="header bg-primary pb-6">
 <div class="container-fluid">
   <div class="header-body">
     <div class="row align-items-center py-4">
       <div class="col-lg-6 col-7">
         <h6 class="h2 text-white d-inline-block mb-0">Tour Package</h6>
         <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
           <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
             <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
             <li class="breadcrumb-item"><a href="#">Tour Package</a></li>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">List Tour Package</h4>
              <p class="text-sm mb-0">
                Klik <i>tombol Tambah Package Tour</i> untuk menambah data baru.
              </p>
              <a class="btn btn-primary text-white" href="<?php echo base_url('admin/PaketWisata/insertPaket'); ?>">Tambah package Tour</a>
            </div>
            <div class="card-body">
              <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                    <th>
                      ID
                    </th>
                    <th>
                      Nama Paket
                    </th>
                    <th>
                      Harga
                    </th>
                    <th>
                      Aksi
                    </th>
                  </thead>
                  <tbody>
                    <?php foreach ($paket->result() as $h): ?>
                      <tr>
                        <td>
                          <?php echo $h->idpaket_wisata; ?>
                        </td>
                        <td>
                          <?php echo $h->nama_paket; ?>
                        </td>
                        <td class="text-primary">
                          <?php echo number_format($h->harga); ?>
                        </td>
                        <td>
                          <a class="btn btn-warning btn-sm" title="Edit" href="<?php echo base_url('admin/PaketWisata/editPaket/'.$h->idpaket_wisata); ?>"><i class="fa fa-brush"></i></a>
                          <a class="btn btn-danger btn-sm" title="Hapus" href="<?php echo base_url('admin/PaketWisata/prosesHapusPaket/'.$h->idpaket_wisata); ?>" ><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 <!-- Footer -->

 <?php $this->load->view('admin/side/footer') ?>
 <?php $this->load->view('admin/side/js') ?>
   <script src="<?php echo base_url()?>master/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url()?>master/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <!-- Argon JS -->
<script src="<?php echo base_url()?>master/assets/js/argon.min9f1e.js?v=1.1.0"></script>
</body>
</html>
