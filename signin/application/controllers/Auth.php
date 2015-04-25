<?php
class Auth extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Model_User');
    }
    
    function login()
    {
    if(isset($_POST['submit'])){
      
       $username    =   $this->input->post('username');
       $password    =   $this->input->post('password');
       $hasil       =   $this->Model_User->login($username, $password);
       if ($hasil==1)
       {
           $this->session->set_userdata(array('status_login'=>'oke'));
           redirect('home');
       
       }
       else{
           echo "<script language=\"javascript\">alert('Username atau Password anda salah');
           window.location.href='login';</script>";   
       }
    }
    else{
        cek_session_login();
        $this->load->view('form_login');
    }
    }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}