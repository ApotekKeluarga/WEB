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

    <!-- awal page content -->
    <div class="page-content">
      <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Tambah Tips</h3>
            </div>
            <div class="card-body">
              <form autocomplete="off">
                <div class="col-md-10 ">
                    <h4 class="example-title">Judul</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Masukkan Judul Tips">
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Deskripsi</h4>
                    <textarea class="form-control" id="textareaDefault" rows="3" placeholder="Masukkan Tips"></textarea>
                </div>
              <div class="col-md-6 col-lg-4">
                <h4 class="example-title">Masukkan Gambar</h4>
                <div class="example">
                  <input type="file" id="input-file-events" class="dropify-event" data-default-file="../../global/photos/view-6-960x640.jpg">
                </div>
              
                <div class="form-group form-material floating" data-plugin="formMaterial">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button class="btn btn-info" type="button">Simpan</button>
                    </span>
                  </div>
                </div>
                </div>
              </form>
            </div>
          </div>
    </div>
    <!-- akhir page content -->
  </div>
  <!-- End Page -->

<?php $this->load->view('Home/Footer'); ?>