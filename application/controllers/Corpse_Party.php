<?php
class Corpse_Party extends CI_Controller{

    public function Episode_1(){
        $data['judul'] = ' - Corpse Party';
        $data ['episode'] = 'Episode 1';
        $data['domain']='http://localhost/AnimeKu/';
    $data ['video']= '<h1>BELUM TERSEDIA</h1>';
        
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaron.php', $data);
            $this->load->view('stream/anime.php', $data);
            $this->load->view('templates/footer.php');
    
    }
        public function Episode_2 (){
            $data['judul'] = ' - Corpse Party';
            $data ['episode'] = 'Episode 2';
            $data['domain']='http://localhost/AnimeKu/';
    $data ['video']= '<h1>BELUM TERSEDIA</h1>';
            
    
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaron.php', $data);
            $this->load->view('stream/anime.php', $data);
            $this->load->view('templates/footer.php');
    
        }
        public function Episode_3 (){
            $data['judul'] = ' - Corpse Party';
            $data ['episode'] = 'Episode 3';
            $data['domain']='http://localhost/AnimeKu/';
    $data ['video']= '<h1>BELUM TERSEDIA</h1>';
    
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaron.php', $data);
            $this->load->view('stream/anime.php', $data);
            $this->load->view('templates/footer.php');
    
        }
        public function Episode_4 (){
            $data['judul'] = ' - Corpse Party';
            $data ['episode'] = 'Episode 4';
            $data['domain']='http://localhost/AnimeKu/';
    $data ['video']= '<h1>BELUM TERSEDIA</h1>';
    
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaron.php', $data);
            $this->load->view('stream/anime.php', $data);
            $this->load->view('templates/footer.php');
    
        }

}

?>