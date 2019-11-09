<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/navbar"); ?>
<div class="content">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-md-12">
 				<div class="card">
 					<div class="card-header card-header-info">
 						<h4 class="card-title " style="font-weight: bold;">Tabel Data Wisata</h4>
 						<p class="card-category"> Klik <span style="font-weight: bold;">Tambah Wisata</span> untuk tambah data baru</p>
 						<div style="float: right;">
 							<a class="btn btn-danger" href="<?php echo base_url('admin/Wisata/tambahWisata') ?>">Tambah Wisata</a>
 						</div>
 					</div>
 					<div class="card-body">
 						<div class="toolbar">
 						</div>
 						<div class="material-datatables">
 							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
 								<thead>
 									<tr>
 										<th>No</th>
 										<th>Nama Wisata</th>
 										<th>Rating</th>
 										<th>Harga</th>
 										<th>Deskripsi</th>
 										<th class="disabled-sorting text-right">Actions</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php $no = 1; foreach ($wisata as $listwisata): ?> 
 										<tr>
 											<td ><?php echo $no++; ?></td>
 											<td class="text-danger"><?php echo $listwisata->nama_wisata; ?></td>
 											<td><?php echo $listwisata->rating; ?></td>
 											<td><?php echo $listwisata->harga; ?></td>
 											<td><?php echo $listwisata->deskripsi; ?></td>
 											<td class="text-right">
 												<a href="<?php echo base_url('admin/Wisata/ubahWisata') ?>" title="edit" class="btn btn-link btn-warning btn-just-icon edit" ><i class="material-icons">dvr</i></a>
 												<a href="<?php echo base_url('admin/Wisata/hapusDataWisata/'.$listwisata->idwisata) ?>" title="hapus" onclick="javascript: return confirm('Anda Yakin Akan Menghapus ?')" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
 											</td>
 										</tr>
 									<?php endforeach ?> 
 								</tbody>
 							</table>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <?php $this->load->view('admin/side/rightside') ?>
<?php $this->load->view('admin/side/footer') ?>
<?php $this->load->view('admin/side/js') ?>
<script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
</body>
</html>