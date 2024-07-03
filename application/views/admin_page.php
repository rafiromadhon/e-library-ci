<?php
if (isset($this->session->userdata['logged_in'])) {
	$username = ($this->session->userdata['logged_in']['username']);
	$fullname = ($this->session->userdata['logged_in']['fullname']);
} else {
	header("location: login");
}
?>
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>DASHBOARD</h2>
			<?php 
			// var_dump($jml_pinjam_aktif);
			// echo "Jumlah Anggota : ".$jml_pinjam_aktif[0]['jml_pinjam_aktif'];
			 ?>
		</div>

		<!-- Widgets -->
		<div class="row clearfix">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-pink hover-expand-effect">
					<div class="icon">
						<i class="material-icons">person</i>
					</div>
					<div class="content">
						<div class="text">Total Anggota</div>
						<div class="number count-to" data-from="0" data-to="<?= $all_anggota[0]['all_anggota']; ?>" data-speed="15" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-cyan hover-expand-effect">
					<div class="icon">
						<i class="material-icons">book</i>
					</div>
					<div class="content">
						<div class="text">Total Buku</div>
						<div class="number count-to" data-from="0" data-to="<?= $all_buku[0]['all_buku']; ?>" data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-light-green hover-expand-effect">
					<div class="icon">
						<i class="material-icons">unarchive</i>
					</div>
					<div class="content">
						<div class="text">Total Peminjam Aktif</div>
						<div class="number count-to" data-from="0" data-to="<?= $jml_pinjam_aktif[0]['jml_pinjam_aktif']; ?>" data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-orange hover-expand-effect">
					<div class="icon">
						<i class="material-icons">sync</i>
					</div>
					<div class="content">
						<div class="text">History</div>
						<div class="number count-to" data-from="0" data-to="<?= $history_pinjam[0]['history_pinjam']; ?>" data-speed="1000" data-fresh-interval="20"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Widgets -->

		<div class="body">
			<!-- <div id="real_time_chart" class="dashboard-flot-chart"></div> -->
			<!-- <div id="donut_chart" class="dashboard-donut-chart"></div> -->
		</div>
	</div>
</section>