<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/LansiaController/update/' . $data_warga_lansia['id_lansia']); ?>" method="post">
      <div class="card-body">
        <h3>Form edit data</h3>
        <hr>
        <div class="form-group">
          <label for="nama">nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_warga_lansia['nama']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="alamat">alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data_warga_lansia['alamat']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="tanggal">tanggal</label>
          <input type="number" class="form-control" id="tanggal" name="tanggal" value="<?= $data_warga_lansia['tanggal']; ?>" required="">
        </div>
      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?= ('/LansiaController
    /index'); ?>" class="btn btn-dark">BATAL</a>
  </div>
  </form>
</div>
</div>
<?= $this->endSection(); ?>