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
              <h3 class="panel-title">Tambah Obat</h3>
            </div>
            <div class="card-body">
              <form autocomplete="off">
                <div class="col-md-10 ">
                    <h4 class="example-title">Nama Obat</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Masukkan Nama Obat">
                </div>
                <div class="col-md-6 ">
                   <h4 class="example-title">Kategori Obat</h4>
                  <select class="form-control">
                    <option>--- Pilih Kategori ---</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Komposisi</h4>
                    <textarea class="form-control" id="textareaDefault" rows="3" placeholder="Masukkan Komposisi Obat"></textarea>
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Indikasi</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Masukkan Indikasi">
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Dosis</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Masukkan Dosis">
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Penyajian</h4>
                    <textarea class="form-control" id="textareaDefault" rows="3" placeholder="Masukkan Penyajian"></textarea>
              </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Kemasan</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Masukkan Jenis Kemasan">
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Harga</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Masukkan Harga">
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Deskripsi</h4>
                    <textarea class="form-control" id="textareaDefault" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                <div class="col-md-10 ">
                    <h4 class="example-title">Stok</h4>
                    <input type="text" class="form-control" id="inputPlaceholder" placeholder="Masukkan Jumlah Stok">
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