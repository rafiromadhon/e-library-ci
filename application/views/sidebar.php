<?php
if (isset($this->session->userdata['logged_in'])) {
	$username = ($this->session->userdata['logged_in']['username']);
	$fullname = ($this->session->userdata['logged_in']['fullname']);
} else {
	header("location: login");
}
?>
<!-- #Top Bar -->
<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<!-- User Info -->
		<div class="user-info">
			<div class="image">
				<img src="http://localhost/perpus/assets/images_dashboard/user.png" width="48" height="48" alt="User" />
			</div>
			<div class="info-container">
				<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $fullname; ?> </div>
				<div class="name"><?= $username; ?></div>
			</div>
		</div>
		<!-- #User Info -->
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li class="header">PANEL NAVIGATION</li>
				<li class="active">
					<a href="<?= base_url('index.php/login/dashboard'); ?>">
						<i class="material-icons">dashboard</i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" class="menu-toggle">
						<i class="material-icons">person</i>
						<span>Anggota</span>
					</a>
					<ul class="ml-menu">
						<li>
							<a href="<?= base_url('index.php/anggota'); ?>">Data Anggota</a>
						</li>
						<li>
							<a href="<?= base_url('index.php/anggota/input'); ?>">Tambah Anggota</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" class="menu-toggle">
						<i class="material-icons">book</i>
						<span>Buku</span>
					</a>
					<ul class="ml-menu">
						<li>
							<a href="<?= base_url('index.php/buku'); ?>">Data Buku</a>
						</li>
						<li>
							<a href="<?= base_url('index.php/buku/input');?>">Tambah Buku</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" class="menu-toggle">
						<i class="material-icons">unarchive</i>
						<span>Transaksi Aktif</span>
					</a>
					<ul class="ml-menu">
						<li>
							<a href="<?= base_url('index.php/pinjam'); ?>">Form Peminjaman</a>
						</li>
						<li>
							<a href="<?= base_url('index.php/pinjam/data_peminjaman'); ?>">Data Peminjaman</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?= base_url('index.php/pinjam/history'); ?>">
						<i class="material-icons">sync</i>
						<span>History</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- #Menu -->
		<!-- Footer -->
		<div class="legal">
			<div class="copyright">&copy; 2021<a href="">Kelompok Duvva</a>.</div>
			<div class="version"><b>Version: </b> 1.0.0</div>
		</div>
		<!-- #Footer -->
	</aside>
	<!-- #END# Left Sidebar -->
	<!-- Right Sidebar -->
      <!-- <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
          <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
          <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
            <ul class="demo-choose-skin">
              <li data-theme="red" class="active">
                <div class="red"></div>
                <span>Red</span>
              </li>
              <li data-theme="pink">
                <div class="pink"></div>
                <span>Pink</span>
              </li>
              <li data-theme="purple">
                <div class="purple"></div>
                <span>Purple</span>
              </li>
              <li data-theme="deep-purple">
                <div class="deep-purple"></div>
                <span>Deep Purple</span>
              </li>
              <li data-theme="indigo">
                <div class="indigo"></div>
                <span>Indigo</span>
              </li>
              <li data-theme="blue">
                <div class="blue"></div>
                <span>Blue</span>
              </li>
              <li data-theme="light-blue">
                <div class="light-blue"></div>
                <span>Light Blue</span>
              </li>
              <li data-theme="cyan">
                <div class="cyan"></div>
                <span>Cyan</span>
              </li>
              <li data-theme="teal">
                <div class="teal"></div>
                <span>Teal</span>
              </li>
              <li data-theme="green">
                <div class="green"></div>
                <span>Green</span>
              </li>
              <li data-theme="light-green">
                <div class="light-green"></div>
                <span>Light Green</span>
              </li>
              <li data-theme="lime">
                <div class="lime"></div>
                <span>Lime</span>
              </li>
              <li data-theme="yellow">
                <div class="yellow"></div>
                <span>Yellow</span>
              </li>
              <li data-theme="amber">
                <div class="amber"></div>
                <span>Amber</span>
              </li>
              <li data-theme="orange">
                <div class="orange"></div>
                <span>Orange</span>
              </li>
              <li data-theme="deep-orange">
                <div class="deep-orange"></div>
                <span>Deep Orange</span>
              </li>
              <li data-theme="brown">
                <div class="brown"></div>
                <span>Brown</span>
              </li>
              <li data-theme="grey">
                <div class="grey"></div>
                <span>Grey</span>
              </li>
              <li data-theme="blue-grey">
                <div class="blue-grey"></div>
                <span>Blue Grey</span>
              </li>
              <li data-theme="black">
                <div class="black"></div>
                <span>Black</span>
              </li>
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="settings"></div>
        </div>
    </aside> -->
    <!-- #END# Right Sidebar -->
</section>