<?php

class Home extends CI_Controller{
    
    function index(){
    cek_session();
    $this->load->view('home');  
    }
}
