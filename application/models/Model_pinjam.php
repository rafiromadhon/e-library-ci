<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pinjam extends CI_model {

	function get_last_id()
	{
		return $this->db->query("SELECT * FROM `tb_pinjam` ORDER BY `pinjam_id` DESC LIMIT 1")
		->result_array();
	}

	function get_create($data)
	{
		$this->db->insert('tb_pinjam',$data);
		return true;
	}

	function validasi_anggota($id_anggota)
	{
		$this->db->select('*')
		->from('tb_anggota')
		->where('id_anggota',$id_anggota);

		$result = $this->db->get()->result_array();
		$result = count($result);
		if ($result == 0) {
			return false;
		} else{
			return true;
		}
	}

	function validasi_buku($id_buku)
	{
		$this->db->select('*')
		->from('tb_buku')
		->where('id_buku',$id_buku);

		$result = $this->db->get()->result_array();
		$result = count($result);
		if ($result == 0) {
			return false;
		} else{
			return true;
		}
	}

	function show_peminjaman(){
		$this->db->select('pinjam_id, nama, judul, tgl_pinjam')
		->from('tb_pinjam')
		->join('tb_anggota','id_anggota','left')
		->join('tb_buku','id_buku','left')
		->where('status','dipinjam');

		return $this->db->get()->result_array();
	}

	function confirm_return($pinjam_id){
		return $this->db->set('status','dikembalikan')
		->set('tgl_kembali',date('Ymd'))
		->where('pinjam_id', $pinjam_id)
		->update('tb_pinjam');
	}

	function show_data_return(){
		$this->db->select('pinjam_id, nama, judul, tgl_kembali, tgl_balik, lama_pinjam, DATEDIFF(tgl_kembali, tgl_balik) AS selisih')
		->from('tb_pinjam')
		->join('tb_anggota','id_anggota','left')
		->join('tb_buku','id_buku','left')
		->where('status','dikembalikan');

		return $this->db->get()->result_array();
	}
}