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

    <?php $this->load->view('Search'); ?>
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
			        <th>No.</th>
              <th>Status Obat</th>
              <th>Status Pesanan</th>
              <th>Image</th>
              <th>Harga</th>
              <th>Keterangan</th>
			        <th width="115px">Action</th>
			      </tr>
            <?php
            foreach ($data_resep as $row) {
            ?>
            <tr>
              <th><?php echo $row -> kd_kirim_resep ?></th>
              <th><?php echo $row -> status_obat?></th>
              <th><?php echo $row -> status_pesanan ?></th>
              <th><?php echo $row -> img ?></th>
              <th><?php echo $row -> harga_obat ?></th>
              <th><?php echo $row -> keterangan ?></th>
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