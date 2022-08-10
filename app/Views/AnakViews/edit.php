<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/AnakController/update/' . $buku['id']); ?>" method="post">
      <div class="card-body">
        <h3>Form edit buku</h3>
        <hr>
        <div class="form-group">
          <label for="nama">nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $buku['nama']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="alamat">alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $buku['alamat']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="tanggal">TAHUN TERBIT</label>
          <input type="number" class="form-control" id="tanggal" name="tanggal" value="<?= $buku['tanggal']; ?>" required="">
        </div>
      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?= ('/AnakController/index'); ?>" class="btn btn-dark">BATAL</a>
  </div>
  </form>
</div>
</div>
<?= $this->endSection(); ?>