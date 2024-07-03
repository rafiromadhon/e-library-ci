<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();

class Buku extends CI_Controller {

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

	// function untuk menampilkan list buku
	public function index()
	{
		$this->load->model('Model_data_buku');

		$isi['data'] = $this->Model_data_buku->read();
		// $this->load->view('login');
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_buku', $isi);
		$this->load->view('footer');
	}

	// function untuk menampilkan form input buku
	public function input()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('input_buku');
		$this->load->view('footer');
	}

	// function untuk proses input buku
	function create()
	{
		$this->load->model('Model_data_buku');

		$data = $this->input->post();
		$this->Model_data_buku->get_create($data);
		redirect('buku');
	}

	// function untuk menampilkan form edit data buku 
	function edit($id_buku)
	{
		$this->load->model('Model_data_buku');

		$isi['data'] = $this->Model_data_buku->read();
		$isi['data_edit'] = $this->Model_data_buku->read($id_buku);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_buku', $isi);
		$this->load->view('footer');
	}

	// function untuk proses edit data buku
	function get_edit($id_buku)
	{
		$this->load->model('Model_data_buku');

		$data = $this->input->post();
		$this->Model_data_buku->get_update($data,$id_buku);
		redirect('buku');	
	}

	// function untuk menghapus data buku
	function delete($id_buku)
	{
		$this->load->model('Model_data_buku');

		$this->Model_data_buku->get_delete($id_buku);
		redirect('buku');	
	}
}
