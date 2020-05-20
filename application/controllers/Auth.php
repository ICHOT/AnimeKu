<?php
    class Auth extends CI_Controller{
        public function __construct(){
parent::__construct();
$this->load->library('form_validation');
        }
        
        public function index(){
$this->form_validation->set_rules('password','Password','required|trim');
if ($this->form_validation->run()== false){
    
    $data['judul'] = ' - LOGIN';
    $this->load->view('templates/nav.php' );
    $this->load->view('templates/headeroff.php',$data );
    $this->load->view('login.php');
    
}else{
    echo'berhasil';
}
        }
        public function register(){
            $this->form_validation->set_rules('name','Name','requires|trim');
            $this->form_validation->set_rules('email','Email','requires|trim|valid_email|is_unique[login.email]');



           if ($this->form_validation->run() == false){
               $data['judul'] = ' - REGISTER';
               $this->load->view('templates/nav.php' );
               $this->load->view('templates/header.php',$data );
               $this->load->view('register.php');


           }
        }
    }
    
        ?>