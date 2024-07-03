<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();

class Dashboard extends CI_Controller {

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

    public function index(){
        $this->load->model('Model_user');

        $data['info_buku'] = $this->Model_user->info_buku();

        $this->load->view('view_display_buku', $data);
    }

}

?>