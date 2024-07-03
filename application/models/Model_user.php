<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_model {
    
    public function info_buku(){
        $this->db->select('*')
        ->from('tb_buku')
        ->limit(8);
        
        return $this->db->get()->result_array();
    }
}

?>