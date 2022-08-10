<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-12">
        <h1><center>PENDATAAN ANAK STUNTING</h1>
        <!-- /.card -->
        <div class="table-responsive">
        <table class="table table-bordered table-striped">
		<thead>
    <tr>
				<td>Nama</td>
				<td>Alamat</td>
        <td>Berat Badan</td>
        <td>Tinggi Badan</td>
				<td>BB/TB</td>
        <td>BB/U</td>
				<td>TB/U</td>
			</tr>
		</thead>
		<tbody>
    <tr>
				<td></td>
				<td></td>
				<td></td>
        <td></td>
				<td></td>
				<td></td>
        <td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
        <td></td>
				<td></td>
				<td></td>
        <td></td>
			</tr>
      <tr>
				<td></td>
				<td></td>
				<td></td>
        <td></td>
				<td></td>
				<td></td>
        <td></td>
			</tr>
      <tr>
				<td></td>
				<td></td>
				<td></td>
        <td></td>
				<td></td>
				<td></td>
        <td></td>
			</tr>
		</tbody>
	</table>
      </div>
      <a href="<?= ('/buat'); ?>" class="btn btn-success">TAMBAH DATA</a>
  </section>
</div>
<div>

</div>
<?= $this->endSection(); ?>