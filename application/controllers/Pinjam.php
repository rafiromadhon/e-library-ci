<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();

class Pinjam extends CI_Controller {

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

	// function untuk input peminjaman
	public function index($message = null)
	// public function index()
	{
		$this->load->model('Model_pinjam');

		$isi['data'] = $this->Model_pinjam->get_last_id();
		$isi['message'] = $message;
		// var_dump($isi);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('input_pinjam', $isi);
		$this->load->view('footer');
	}
	
	// function lanjutan dari input peminjaman
	public function create()
	{
		$this->load->model('Model_pinjam');

		$post = $this->input->post();

		//validasi anggota
		$val_anggota = $this->Model_pinjam->validasi_anggota($post['id_anggota']);
		// var_dump($val_anggota);
		if ($val_anggota == false) {
			$isi['data'] = $this->Model_pinjam->get_last_id();
			$isi['message'] = 'ID Anggota tidak ditemukan, Bung!';

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('input_pinjam', $isi);
			$this->load->view('footer');
		} 
		else{
			$val_anggota = $this->Model_pinjam->validasi_buku($post['id_buku']);
			if ($val_anggota == false) {
				$isi['data'] = $this->Model_pinjam->get_last_id();
				$isi['message'] = 'ID Buku tidak ditemukan, Boshque!';

				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('input_pinjam', $isi);
				$this->load->view('footer');
			} 
			else{
				// print_r($post);
				$date_return = date('Y-m-d', strtotime($post['tgl_pinjam'] . ' +'.$post['lama_pinjam'].' day'));
				// echo $date_return;
				$data = array(
					'pinjam_id' => str_replace("PJ", "", $post['pinjam_id']),
					'tgl_pinjam' => $post['tgl_pinjam'],
					'id_anggota' => $post['id_anggota'],
					'lama_pinjam' => $post['lama_pinjam'],
					'tgl_balik' => $date_return,
					'id_buku' => $post['id_buku'],
					'status' => "dipinjam"
				);

				$this->Model_pinjam->get_create($data);
				redirect('pinjam');
			}
		}
	}

	function data_peminjaman(){
		$this->load->model('model_pinjam');
		$data['pinjam'] = $this->model_pinjam->show_peminjaman();
		// $data['pinjam'] = $get_data_buku->show_peminjaman->read();
		// var_dump($data);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_pinjam_aktif', $data);
		$this->load->view('footer');
	}

	function confirm_pengembalian($pinjam_id){
		$this->load->model('Model_pinjam');

		$setset = $this->Model_pinjam->confirm_return($pinjam_id);
		var_dump($setset);
		redirect('pinjam/data_peminjaman');	
	}

	function history(){
		$this->load->model('model_pinjam');
		$data['history'] = $this->model_pinjam->show_data_return();
		// $data['pinjam'] = $get_data_buku->show_peminjaman->read();
		// var_dump($data);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('view_history', $data);
		$this->load->view('footer');
	}
}
