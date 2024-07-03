
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>DATA ANGGOTA</h2>
			</div>
			<div class="row clearfix">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
<!-- 							<h3 class="card-title">Data Perpustakaan</h3> -->
							<?php //print_r($data); ?>
						<!-- <div class="card-tools">
							<ul class="pagination pagination-sm float-right">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
							</ul>
						</div> -->
					</div>
					<!-- /.card-header -->
					<div class="card-body p-0">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>ID Anggota</th>
									<th>Nama</th>
									<th>No. Identitas</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Nomor HP</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								// Array ( [0] => Array ( [id_anggota] => 1 [nama] => Poor Brian [no_identitas] => 330229182918882 [jenis_kelamin] => L [alamat] => Los Angeles [no_hp] => 0821928828 [email] => poor_b@gmail.com ) )
								foreach ($data as $val) { 
									$show_jenkel = "";
									if ($val['jenis_kelamin'] == 'L') {
										$show_jenkel = "Laki-laki";
									} else{
										$show_jenkel = "Perempuan";
									}
									?>
									<tr>
										<td>
											<?php echo $i++ ?>
											<!-- 											<input type="checkbox" name="idm[]" value="<?//= $val['id_anggota'] ?>"> -->
										</td>
										<td><?= $val['id_anggota'] ?></td>
										<td><?= $val['nama'] ?></td>
										<td><?= $val['no_identitas'] ?></td>
										<td><?= $show_jenkel ?></td>
										<td><?= $val['alamat'] ?></td>
										<td><?= $val['no_hp'] ?></td>
										<td><?= $val['email'] ?></td>
										<td>
											<a class="btn btn-sm btn-warning" href="<?= base_url('index.php/anggota/edit/').$val['id_anggota'] ?>">Edit <i class="fas fa-edit"></i> </a>
											<a class="btn btn-sm btn-danger" href="<?= base_url('index.php/anggota/delete/').$val['id_anggota'] ?>" onclick="return konfirmasi('<?= $val['nama'] ?>')">Hapus <i class="fas fa-trash"></i></a>
										</td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<script type="text/javascript">
	function konfirmasi(nama)
	{
		var a = confirm('Apakah anda yakin ingin menghapus '+nama+'?');
		if (a)
			return true;
		else
			return false;
	}
</script>
<!-- /.content-wrapper -->

