<?php
    class Listanime extends CI_Controller{
        public function index(){
            $data['domain']='http://localhost/AnimeKu/';
            $data['judul'] = ' - Anime List';

            $this->load->view('templates/header.php',$data );
            $this->load->view('templates/navbar.php',$data);
            $this->load->view('list/index.php');
            $this->load->view('templates/footer.php');

        }
    }
        ?>