<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>EDIT BUKU</h2>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>FORM EDIT BUKU</h2>
						</div>
						<div class="body">
							<form id="form_validation" action="<?= base_url('index.php/buku/get_edit/').$data_edit[0]['id_buku'] ?>" method="POST" novalidate="novalidate">
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="isbn" required="" aria-required="true" value="<?= $data_edit[0]['isbn']; ?>">
										<label class="form-label">ISBN</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="judul" required="" aria-required="true" value="<?= $data_edit[0]['judul']; ?>">
										<label class="form-label">Judul</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="penerbit" required="" aria-required="true" value="<?= $data_edit[0]['penerbit']; ?>">
										<label class="form-label">Penerbit</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="email" class="form-control" name="penulis" required="" aria-required="true" value="<?= $data_edit[0]['penulis']; ?>">
										<label class="form-label">Alamat</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="kategori_buku" required="" aria-required="true" value="<?= $data_edit[0]['kategori_buku']; ?>">
										<label class="form-label">Kategori</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="tahun_buku" required="" aria-required="true" value="<?= $data_edit[0]['tahun_buku']; ?>">
										<label class="form-label">Tahun terbit</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<textarea class="form-control" name="sinopsis_buku" required="" aria-required="true">
											<?= $data_edit[0]['sinopsis_buku']; ?>
										</textarea>
										<label class="form-label">Sinopsis Buku</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="number" class="form-control" name="jumlah_buku" required="" aria-required="true" value="<?= $data_edit[0]['jumlah_buku']; ?>">
										<label class="form-label">Jumlah Buku</label>
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

