<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data_anggota extends CI_model {

	function read($id_anggota=null)
	{
		$this->db->select('*')
		->from('tb_anggota');

		if (!empty($id_anggota))
			$this->db->where('id_anggota',$id_anggota);

		return $this->db->get()->result_array();
	}

	function get_create($data)
	{
		$this->db->insert('tb_anggota',$data);
		return true;
	}

	function get_update($data,$id_anggota)
	{
		return $this->db->where('id_anggota', $id_anggota)
		->update('tb_anggota',$data);
	}

	function get_delete($id_anggota)
	{
		return $this->db->where('id_anggota', $id_anggota)
		->delete('tb_anggota');
	}

}