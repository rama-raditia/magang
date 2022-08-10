<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper" id="create">
  <div class="content">
      <div class="card-body">
        <h3>FORM TAMBAH DATA</h3>
        <hr>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required="">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required="">
        </div>
        <div class="form-group">
          <label for="alamat">BB/U</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan NIK" required="">
        </div>
        <div class="form-group">
          <label for="alamat">BB/TB</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan jenis kelamin" required="">
        </div>
        <div class="form-group">
          <label for="alamat">TB/U</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan jenis kelamin" required="">
        </div>
        <div class="form-group">
          <label for="alamat">Berat Badan</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan status" required="">
        </div>
        <div class="form-group">
          <label for="tanggal">Tinggi Badan</label>
          <input type="number" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan tanggal" required="">
        </div>
      </div>

      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="<?= ('/LansiaController/index'); ?>" class="btn btn-dark">Batal</a>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>