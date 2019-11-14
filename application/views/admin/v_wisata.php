<?php $this->load->view("admin/side/head"); ?>
 <!-- Page plugins -->
  <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>master/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
 <?php $this->load->view("admin/side/navbar"); ?>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Single Tour</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Single Tour</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Single Tour</li>
                </ol>
              </nav>
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
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Data Single Tour</h3>
              <p class="text-sm mb-0">
                Klik <i>tombol Tambah Single Tour</i> untuk menambah data baru.
              </p>
              <a href="<?php echo base_url('admin/Destination/tambahWisata') ?>" class="btn btn-primary">Tambah Single Tour</a>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nama Wisata</th>
                    <th>Rating</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Wisata</th>
                    <th>Rating</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $no=1; foreach ($wisata as $barang): ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><a href="" class="btn-sm btn"><?php echo $barang->nama_wisata ?></a></td>
                    <td><?php echo $barang->rating ?></td>
                    <td>Rp. <?php echo number_format($barang->harga) ?></td>
                    <td>
                      <!-- <a href="" class="btn-sm btn-success" title="Preview"><i class="fa fa-eye"></i></a> -->
                      <a href="<?php echo base_url('admin/Destination/ubahWisata/'.$barang->idwisata) ?>" class="btn-sm btn-warning" title="Edit"><i class="fa fa-brush"></i></a>
                      <a href="<?php echo base_url('admin/Destination/hapusDataWisata/'.$barang->idwisata) ?>" class="btn-sm btn-danger" title="Hapus" onclick="javascript: return confirm('Anda Yakin Akan ingin menghapus data ?')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
<?php $this->load->view('admin/side/footer') ?>

<?php $this->load->view('admin/side/js') ?>
<!-- Optional JS -->
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
<?php if ($this->session->flashdata()) { ?>
<?php echo $this->session->flashdata('Pesan'); ?>
<?php } ?>
</body>
</html>
