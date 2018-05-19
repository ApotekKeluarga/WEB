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
          <h3 class="panel-title">Tips Kesehatan</h3>
        </header>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-15">
                <a href="<?php echo base_url() ?>index.php/Tips/tambah_tips" id="addToTable" class="btn btn-primary" >
                  <i class="icon md-plus" aria-hidden="true"></i> Tambah Tips
                </a>
              </div>
            </div>
          </div>
          <div class="table-responsive"></div>
		    <table class="table table-bordered" width="100%" cellspacing="0">
		      <thead class="bg-light">
			      <tr>
			        <th>No.</th>
			        <th>Judul Tips</th>
              <th>Isi Tips</th>
              <th>Images</th>
			        <th width="115px">Action</th>
			      </tr>
		      </thead>
          <tbody>
            <?php 
                foreach ($data_tips as $value) {?>
                <tr>
                  <td><?php echo $value-> kd_tips?></td>
                  <td><?php echo $value-> judul?></td>
                  <td><?php echo $value-> isi?></td>
                  <td><?php echo $value-> img?></td>
                </tr>
            <?php
                }
            ?>
              
          </tbody>
            
        </table>
        </div>
      </div>
      <!-- End Panel Table Add Row -->   

    </div>
  </div>
  <!-- End Page -->

<?php $this->load->view('Home/Footer'); ?>