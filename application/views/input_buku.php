<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>INPUT BUKU</h2>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>FORM INPUT BUKU</h2>
						</div>
						<div class="body">
							<form id="form_validation" action="<?= base_url('index.php/buku/create') ?>" method="POST" novalidate="novalidate">
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="isbn" required="" aria-required="true">
										<label class="form-label">ISBN</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="judul" required="" aria-required="true">
										<label class="form-label">Judul Buku</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="email" class="form-control" name="penerbit" required="" aria-required="true">
										<label class="form-label">Penerbit</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="penulis" required="" aria-required="true">
										<label class="form-label">Penulis</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="kategori_buku" required="" aria-required="true">
										<label class="form-label">Kategori</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="tahun_buku" required="" aria-required="true">
										<label class="form-label">Tahun terbit</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<textarea class="form-control" name="sinopsis_buku" required="" aria-required="true"></textarea>
										<label class="form-label">Sinopsis Buku</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="number" class="form-control" name="jumlah_buku" required="" aria-required="true">
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

