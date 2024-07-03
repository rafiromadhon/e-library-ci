<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>INPUT ANGGOTA</h2>
			</div>
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>FORM INPUT ANGGOTA</h2>
							<!-- <ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
										<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
										<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
									</ul>
								</li>
							</ul> -->
						</div>
						<div class="body">
							<form id="form_validation" action="<?= base_url('index.php/anggota/create') ?>" method="POST" novalidate="novalidate">
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="nama" required="" aria-required="true">
										<label class="form-label">Nama</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="no_identitas" required="" aria-required="true">
										<label class="form-label">No. Identitas</label>
									</div>
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input type="radio" value="L" name="jenis_kelamin" id="male" class="with-gap">
									<label for="male">Laki-laki</label>

									<input type="radio" value="P" name="jenis_kelamin" id="female" class="with-gap">
									<label for="female" class="m-l-20">Perempuan</label>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="email" class="form-control" name="alamat" required="" aria-required="true">
										<label class="form-label">Alamat</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="no_hp" required="" aria-required="true">
										<label class="form-label">Nomor HP</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" class="form-control" name="email" required="" aria-required="true">
										<label class="form-label">Email</label>
									</div>
								</div>
<!-- 								<div class="form-group">
									<input type="checkbox" id="checkbox" name="checkbox">
									<label for="checkbox">I have read and accept the terms</label>
								</div> -->
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

