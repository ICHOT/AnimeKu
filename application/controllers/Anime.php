<?php
    class Anime extends CI_Controller{

            // ================================================================


public function Mahou_Shoujo_Nante_Mou_Ii_Desukara(){
    $data['judul'] = ' - Mahou Shoujo Nante Mou Ii Desukara';
    $data['domain']='http://localhost/AnimeKu/';
            
     
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaroff.php',$data);
            $this->load->view('anime/MahouShoujoNanteMouIiDesukara.php', $data);
            $this->load->view('templates/footer.php');
        }
        public function SteinsGate(){
            $data['judul'] = ' - Steins Gate';
            $data['domain']='http://localhost/AnimeKu/';
            $data['anime']='Steins Gate';

 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaroff.php');
            $this->load->view('anime/SteinsGate.php',$data);
            $this->load->view('templates/footer.php');
        }
        public function BloodC(){
            $data['judul'] = ' - BloodC';
            $data['domain']='http://localhost/AnimeKu/';
            $data['anime']='BloodC';

            
 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaroff.php');
            $this->load->view('anime/BloodC.php',$data);
            $this->load->view('templates/footer.php');
        }
        public function CorpseParty(){
            $data['judul'] = ' - CorpseParty';
            $data['domain']='http://localhost/AnimeKu/';
            $data['anime']='Corpse Party';

 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaroff.php');
            $this->load->view('anime/CorpseParty.php',$data);
            $this->load->view('templates/footer.php');
        }     
        public function DrStone(){
            $data['judul'] = ' - DrStone';
            $data['domain']='http://localhost/AnimeKu/';
            $data['anime']='Dr. Stone';

            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaroff.php');
            $this->load->view('anime/DrStone.php',$data);
            $this->load->view('templates/footer.php');
        }   
        public function Mahou_Shoujo_Madoka_Magica(){
            $data['judul'] = ' - Mahou Shoujo Madoka★Magica';
            $data['domain']='http://localhost/AnimeKu/';
            $data['anime']='Mahou Shoujo Madoka★Magica';


            
 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbaroff.php');
            $this->load->view('anime/MadokaMagicia.php',$data);
            $this->load->view('templates/footer.php');
        }
        public function ANIME7(){
            $data['judul'] = ' - BOFURI - 7';


            
 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME8(){
            $data['judul'] = ' - BOFURI - 8';


           
 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME9(){
            $data['judul'] = ' - BOFURI - 9';


           
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME10(){
            $data['judul'] = ' - BOFURI - 10';


           
 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME11(){
            $data['judul'] = ' - BOFURI - 11';


            
 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME12(){
            $data['judul'] = ' - BOFURI - 12';


            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME13(){
            $data['judul'] = ' - BOFURI - 13';


 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME14(){
            $data['judul'] = ' - BOFURI - 14';


 
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }
        public function ANIME15(){
            $data['judul'] = ' - BOFURI 15';
 
            $this->load->view('templates/header.php', );
            $this->load->view('templates/navbar.php');
            $this->load->view('anime/ANIME5.php');
            $this->load->view('templates/footer.php');
        }



    }

?>