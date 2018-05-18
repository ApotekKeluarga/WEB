<?php $this->load->view('Home/js'); ?>
<?php $this->load->view('Home/Navbar'); ?>
<?php $this->load->view('Home/Sidebar'); ?>
</div>
 <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">DataTables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
        <li class="breadcrumb-item active">DataTables</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Basic -->
      <div class="col-lg-12">
        <form class="form-inline" action="" method="post" >
            <input class="form-control" type="search" placeholder="Search" name="search_obat_admin" aria-label="Search" >
            <button style="margin-left: 8px" class="icon md-search" ></i> </button>
        </form>
      </div>
      <br>
      <!-- Panel Table Add Row -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Add Row</h3>
        </header>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-15">
                <button id="addToTable" class="btn btn-primary" type="button">
                  <i class="icon md-plus" aria-hidden="true"></i> Add row
                </button>
              </div>
            </div>
          </div>
          <div class="table-responsive"></div>
		    <table class="table table-bordered" width="100%" cellspacing="0">
		      <thead class="bg-light">
            
			      <tr>
			        <th>Kode pesan</th>
              <th>Kode User</th>
              <th>Nama User</th>
              <th>No. Telp </th>
              <th>Tanggal Order</th>
              <th>Alamat</th>
              <th>Metode Pengiriman</th>
              <th>Metode Pembayaran</th>
              <th>status</th>
			        <th width="115px">Action</th>
			      </tr>
            <?php
            foreach ($data_pesanan as $row) {
            ?>
            <tr>
              <th><?php echo $row -> kd_order ?></th>
              <th><?php echo $row -> kd_user ?></th>
              <th><?php echo $row -> nama ?></th>
              <th><?php echo $row -> No_telp ?></th>
              <th><?php echo $row -> Tgl_order ?></th>
              <th><?php echo $row -> Detail_alamat ?></th>
              <th><?php echo $row -> mtd_pengirman ?></th>
              <th><?php echo $row -> mtd_pembayaran ?></th>
              <th><?php echo $row -> status ?></th>
            </tr>
            <?php } ?>
		    </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Add Row -->   

    </div>
  </div>
  <!-- End Page -->

<?php $this->load->view('Home/Footer'); ?>