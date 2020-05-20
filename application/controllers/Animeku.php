<?php
    class Animeku extends CI_Controller{
        public function Index(){
            $data['domain']='http://localhost/AnimeKu/';
            $data['judul'] = '';
            // ANIME ON GOING //
            $data['ongoing1'] = 'http://localhost/AnimeKu/anime/Mahou_Shoujo_Nante_Mou_Ii_Desukara';
            $data['ongambar1'] = base_url('assets/gambar/ANIME/Mahou_Shoujo_Nante_Mou_Ii_Desukara.jpg');
            
            $data['ongoing2'] = base_url('anime/anime2');
            $data['ongambar2'] = base_url('assets/gambar/ANIME/DarwinGame.jpg');

            $data['ongoing3'] = base_url('anime/anime3');
            $data['ongambar3'] = base_url('assets/gambar/ANIME/BLOOD-C.png');

            $data['ongoing4'] = base_url('anime/anime4');
            $data['ongambar4'] = base_url('assets/gambar/ANIME/CorpseParty.jpg');

            $data['ongoing5'] = base_url('anime/anime5');
            $data['ongambar5'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');

            $data['ongoing6'] = base_url('anime/anime6');
            $data['ongambar6'] = base_url('assets/gambar/ANIME/Junko.png');

            $data['ongoing7'] = base_url('anime/anime7');
            $data['ongambar7'] = base_url('assets/gambar/ANIME/Madoka.jpg');

            $data['ongoing8'] = base_url('anime/anime8');
            $data['ongambar8'] = base_url('assets/gambar/ANIME/SAO.jpg');

            $data['ongoing9'] = base_url('anime/anime9');
            $data['ongambar9'] = base_url('assets/gambar/ANIME/DarwinGame.jpg');

            $data['ongoing10'] = base_url('anime/anime10');
            $data['ongambar10'] = base_url('assets/gambar/ANIME/BOFURI.png');

            $data['ongoing11'] = base_url('anime/anime11');
            $data['ongambar11'] = base_url('assets/gambar/ANIME/Azur-Lane.jpg');

            $data['ongoing12'] = base_url('anime/anime12');
            $data['ongambar12'] = base_url('assets/gambar/ANIME/BLOOD-C.png');

            $data['ongoing13'] = base_url('anime/anime13');
            $data['ongambar13'] = base_url('assets/gambar/ANIME/Madoka.jpg');

            $data['ongoing14'] = base_url('anime/anime14');
            $data['ongambar14'] = base_url('assets/gambar/ANIME/Junko.png');

            $data['ongoing15'] = base_url('anime/anime15');
            $data['ongambar15'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');


            // ANIME REKOMENDASI ADMIN //

            $data['rekomendasi1'] = 'http://localhost/AnimeKu/anime/Mahou_Shoujo_Nante_Mou_Ii_Desukara';
            $data['rgambar1'] = base_url('assets/gambar/ANIME/Mahou_Shoujo_Nante_Mou_Ii_Desukara.jpg');
            
            $data['rekomendasi2'] ='http://localhost/AnimeKu/anime/SteinsGate';
            $data['rgambar2'] = base_url('assets/gambar/ANIME/STEINSGATE.png');

            $data['rekomendasi3'] = 'http://localhost/AnimeKu/anime/BloodC';
            $data['rgambar3'] = base_url('assets/gambar/ANIME/BloodC.jpg');

            $data['rekomendasi4'] = 'http://localhost/AnimeKu/anime/CorpseParty';
            $data['rgambar4'] = base_url('assets/gambar/ANIME/CorpseParty.jpg');

            $data['rekomendasi5'] = 'http://localhost/AnimeKu/anime/DrStone';
            $data['rgambar5'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');

            $data['rekomendasi6'] = 'http://localhost/AnimeKu/anime/Mahou_Shoujo_Madoka_Magica';
            $data['rgambar6'] = base_url('assets/gambar/ANIME/Junko.png');

            $data['rekomendasi7'] = 'http://localhost/AnimeKu/anime/Mahou_Shoujo_Madoka_Magica';
            $data['rgambar7'] = base_url('assets/gambar/ANIME/Madoka.jpg');

            $data['rekomendasi8'] = base_url('anime/anime8');
            $data['rgambar8'] = base_url('assets/gambar/ANIME/SAO.jpg');

            $data['rekomendasi9'] = base_url('anime/anime9');
            $data['rgambar9'] = base_url('assets/gambar/ANIME/DarwinGame.jpg');

            $data['rekomendasi10'] = base_url('anime/anime10');
            $data['rgambar10'] = base_url('assets/gambar/ANIME/BOFURI.png');

            $data['rekomendasi11'] = base_url('anime/anime11');
            $data['rgambar11'] = base_url('assets/gambar/ANIME/Azur-Lane.jpg');

            $data['rekomendasi12'] = base_url('anime/anime12');
            $data['rgambar12'] = base_url('assets/gambar/ANIME/BLOOD-C.png');

            $data['rekomendasi13'] = base_url('anime/anime13');
            $data['rgambar13'] = base_url('assets/gambar/ANIME/Madoka.jpg');

            $data['rekomendasi14'] = base_url('anime/anime14');
            $data['rgambar14'] = base_url('assets/gambar/ANIME/Junko.png');

            $data['rekomendasi15'] = base_url('anime/anime15');
            $data['rgambar15'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');

            // $data['rekomendasi1'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi2'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi3'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi4'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi5'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi6'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi7'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi8'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi9'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi10'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi11'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi12'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi13'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi14'] = base_url('rekomendasi/rek1');
            // $data['rekomendasi15'] = base_url('rekomendasi/rek1');
           

            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php',$data);
            $this->load->view('index.php' , $data);
            $this->load->view('random-anime.php',$data);
            $this->load->view('templates/footer.php');
        }


    }

?>