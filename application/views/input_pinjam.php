<!-- Content Wrapper. Contains page content -->
<style>
input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
}
input[type=date]:focus::-webkit-datetime-edit {
    color: black !important;
}
</style>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>INPUT PEMINJAMAN</h2>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>FORM INPUT PEMINJAMAN</h2>
							<?php // print_r($data) ?>
						</div>
						<div class="body">
							<form id="form_validation" action="<?= base_url('index.php/pinjam/create') ?>" method="POST" novalidate="novalidate">
								<div class="form-group form-float">
									<div class="form-line">
										<?php
										$jumdata = count($data);
										if ($jumdata < 1) {
											$pinjam_id = 1;
										} else{
											$pinjam_id_last = $data[0]['pinjam_id'];
											$pinjam_id = $pinjam_id_last + 1;
										}
										?>
										<input type="text" class="form-control" name="pinjam_id" value="<?= 'PJ'.$pinjam_id; ?>" required="" aria-required="true" readonly>
										<label class="form-label">Kode Pinjam</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="date" class="form-control" name="tgl_pinjam" required="" aria-required="true">
										<label class="form-label">Tanggal Peminjaman</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="id_anggota" required="" aria-required="true">
										<label class="form-label">ID Anggota</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="number" class="form-control" name="lama_pinjam" required="" aria-required="true">
										<label class="form-label">Lama Peminjaman</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="id_buku" required="" aria-required="true">
										<label class="form-label">ID Buku</label>
									</div>
								</div>
								<button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
if ($message != '') {
	echo "<script>";
	echo "alert('".$message."')";
	echo "</script>";
}
?>
