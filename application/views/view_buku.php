
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>DATA BUKU</h2>
			</div>
			<div class="row clearfix">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
					</div>
					<!-- /.card-header -->
					<div class="card-body p-0">
						<table class="table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Kode Buku</th>
									<th>ISBN</th>
									<th>Judul</th>
									<th>Penerbit</th>
									<th>Penulis</th>
									<th>Kategori</th>
									<th>Tahun terbit</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($data as $val) { 
									?>
									<tr>
										<td>
											<?= $i++."." ?>
										
										</td>
										<td><?= $val['id_buku'] ?></td>
										<td><?= $val['isbn'] ?></td>
										<td><?= $val['judul'] ?></td>
										<td><?= $val['penerbit'] ?></td>
										<td><?= $val['penulis'] ?></td>
										<td><?= $val['kategori_buku'] ?></td>
										<td><?= $val['tahun_buku'] ?></td>
										<td>
											<a class="btn btn-sm btn-warning" href="<?= base_url('index.php/buku/edit/').$val['id_buku'] ?>">Edit <i class="fa fa-edit"></i> </a>
											<a class="btn btn-sm btn-danger" href="<?= base_url('index.php/buku/delete/').$val['id_buku'] ?>" onclick="return konfirmasi('<?= $val['judul'] ?>')">Hapus <i class="fa fa-trash"></i></a>
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
	function konfirmasi(judul)
	{
		var a = confirm('Apakah anda yakin ingin menghapus '+judul+'?');
		if (a)
			return true;
		else
			return false;
	}
</script>
<!-- /.content-wrapper -->

