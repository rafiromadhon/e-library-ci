<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data_buku extends CI_model {

	function read($id_buku=null)
	{
		$this->db->select('*')
		->from('tb_buku');

		if (!empty($id_buku))
			$this->db->where('id_buku',$id_buku);

		return $this->db->get()->result_array();
	}

	function get_create($data)
	{
		$this->db->insert('tb_buku',$data);
		return true;
	}

	function get_update($data,$id_buku)
	{
		return $this->db->where('id_buku', $id_buku)
		->update('tb_buku',$data);
	}

	function get_delete($id_buku)
	{
		return $this->db->where('id_buku', $id_buku)
		->delete('tb_buku');
	}

}