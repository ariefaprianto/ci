<?php
class Model_kategori extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_kategori');
    }
    
    function tampilkan_data() {
        
        return $this->db->get('kategori_barang');
    }
}