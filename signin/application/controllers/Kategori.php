<?php
class Kategori extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->load->model('model_kategori');
    }
    
    function index(){
        $data['record']=  $this->model_kategori->tampilkan_data();
        
        $this->load->view('kategori/lihat_data',$data);
    }
}