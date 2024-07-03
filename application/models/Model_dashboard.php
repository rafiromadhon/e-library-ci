<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_model {

	function get_jumlah_anggota()
	{
		return $this->db->query("SELECT COUNT(*) all_anggota FROM `tb_anggota`")
		->result_array();
	}

	function get_jumlah_buku()
	{
		return $this->db->query("SELECT SUM(jumlah_buku) all_buku FROM `tb_buku`")
		->result_array();
	}

	function get_pinjam_aktif()
	{
		return $this->db->query("SELECT COUNT(*) jml_pinjam_aktif FROM `tb_pinjam` WHERE status = 'dipinjam'")
		->result_array();
	}

	function get_history_pinjam()
	{
		return $this->db->query("SELECT COUNT(*) history_pinjam FROM `tb_pinjam` WHERE status = 'dikembalikan'")
		->result_array();
	}
}