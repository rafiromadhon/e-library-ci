<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();

class Login extends CI_Controller {

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

        // Load form helper library
		$this->load->helper('form');

        // Load form validation library
		$this->load->library('form_validation');

        // Load session library
		$this->load->library('session');

        // Load database
		$this->load->model('login_user');
	}


	public function index()
	{
		$this->load->view('login');
	}

    // =========== INI FUNCTION AUTENTIFIKASI LOGIN =======================
	public function dashboard() {
		$this->load->model('Model_dashboard');
		$isi['all_anggota'] = $this->Model_dashboard->get_jumlah_anggota();
		$isi['all_buku'] = $this->Model_dashboard->get_jumlah_buku();
		$isi['jml_pinjam_aktif'] = $this->Model_dashboard->get_pinjam_aktif();
		$isi['history_pinjam'] = $this->Model_dashboard->get_history_pinjam();

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('admin_page', $isi);
				$this->load->view('footer');
			}else{
				$this->load->view('login');
			}
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$result = $this->login_user->login($data);
			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->login_user->read_user_information($username);
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->username,
						'fullname' => $result[0]->fullname
					);
                // Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					// var_dump($session_data);
					$this->load->view('header');
					$this->load->view('sidebar');
					$this->load->view('admin_page', $isi);
					$this->load->view('footer');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('login', $data);
			}
		}
	}

    //======== INI FUNCTION LOGOUT ================
	public function logout() {

        // Removing session data
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = '';
		$this->load->view('login', $data);
	}
}
