<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();

class Anggota extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    //================= FUNCTION UNTUK MENGINCLUDE LIBRARY ===========
	public function __construct() {
		parent::__construct();

        //Load form helper library
		$this->load->helper('form');

        //Load form validation library
		$this->load->library('form_validation');

        // Load session library
		$this->load->library('session');

        // Load database
		$this->load->model('login_user');
	}

	// function untuk menampilkan list anggota
	public function index()
	{
		$this->load->model('Model_data_anggota');

		$isi['data'] = $this->Model_data_anggota->read();
		// $this->load->view('login');
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_anggota', $isi);
		$this->load->view('footer');
	}

	// function untuk menampilkan form input anggota
	public function input()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('input_anggota');
		$this->load->view('footer');
	}

	// function untuk proses input anggota
	function create()
	{
		$this->load->model('Model_data_anggota');

		$data = $this->input->post();
		$this->Model_data_anggota->get_create($data);
		redirect('anggota');
	}

	// function untuk menampilkan form edit data anggota 
	function edit($id_anggota)
	{
		$this->load->model('Model_data_anggota');

		$isi['data'] = $this->Model_data_anggota->read();
		$isi['data_edit'] = $this->Model_data_anggota->read($id_anggota);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_anggota', $isi);
		$this->load->view('footer');
	}

	// function untuk proses edit data anggota
	function get_edit($id_anggota)
	{
		$this->load->model('Model_data_anggota');

		$data = $this->input->post();
		$this->Model_data_anggota->get_update($data,$id_anggota);
		redirect('anggota');	
	}

	// function untuk menghapus data anggota
	function delete($id_anggota)
	{
		$this->load->model('Model_data_anggota');

		$this->Model_data_anggota->get_delete($id_anggota);
		redirect('anggota');	
	}
}
