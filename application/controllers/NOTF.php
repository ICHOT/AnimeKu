<?php
    class NOTF extends CI_Controller{
        public function index(){
            $data['domain']='http://localhost/AnimeKu/';
            $data['judul'] = ' - 404 NOTFOUND';
            $this->load->view('templates/header.php',$data);
            $this->load->view('templates/nav.php',$data);
            $this->load->view('errors/404.php');
            $this->load->view('templates/footer.php');

        }
    }
        ?>