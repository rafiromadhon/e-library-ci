
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>DATA HISTORY PEMINJAMAN</h2>
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
									<th>Kode Pinjam</th>
									<th>Peminjam</th>
									<th>Buku</th>
									<th>Jatuh Tempo</th>
									<th>Tanggal Kembali</th>
									<th>Keterlambatan</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($history as $val) { 
									if($val['selisih'] < 0){
										$val_selisih = "-";
									}else{
										$val_selisih = $val['selisih']." Hari";
									}
									?>
									<tr>
										<td>
											<?= $i++."." ?>
										
										</td>
										<td>PJ<?= $val['pinjam_id'] ?></td>
										<td><?= $val['nama'] ?></td>
										<td><?= $val['judul'] ?></td>
										<td><?= $val['tgl_balik'] ?></td>
										<td><?= $val['tgl_kembali'] ?></td>
										<td><?= $val_selisih ?> </td>
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
	function konfirmasi(pinjam_id)
	{
		var a = confirm('Konfirmasi pengembalian buku ini?');
		if (a)
			return true;
		else
			return false;
	}
</script>
<!-- /.content-wrapper -->

