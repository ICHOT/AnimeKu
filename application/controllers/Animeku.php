<?php
class Animeku extends CI_Controller
{
    public function Index()
    {
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['judul'] = '';
        // ANIME ON GOING //
        $data['ongoing1'] = 'http://localhost/AnimeKu/anime/Mahou_Shoujo_Nante_Mou_Ii_Desukara';
        $data['ongambar1'] = base_url('assets/gambar/ANIME/Mahou_Shoujo_Nante_Mou_Ii_Desukara.jpg');

        $data['ongoing2'] = 'http://localhost/AnimeKu/';
        $data['ongambar2'] = base_url('assets/gambar/ANIME/DarwinGame.jpg');

        $data['ongoing3'] = 'http://localhost/AnimeKu/';
        $data['ongambar3'] = base_url('assets/gambar/ANIME/BLOOD-C.png');

        $data['ongoing4'] = 'http://localhost/AnimeKu/';
        $data['ongambar4'] = base_url('assets/gambar/ANIME/CorpseParty.jpg');

        $data['ongoing5'] = 'http://localhost/AnimeKu/';
        $data['ongambar5'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');

        $data['ongoing6'] = 'http://localhost/AnimeKu/';
        $data['ongambar6'] = base_url('assets/gambar/ANIME/Junko.png');

        $data['ongoing7'] = 'http://localhost/AnimeKu/';
        $data['ongambar7'] = base_url('assets/gambar/ANIME/Madoka.jpg');

        $data['ongoing8'] = 'http://localhost/AnimeKu/';
        $data['ongambar8'] = base_url('assets/gambar/ANIME/SAO.jpg');

        $data['ongoing9'] = 'http://localhost/AnimeKu/';
        $data['ongambar9'] = base_url('assets/gambar/ANIME/DarwinGame.jpg');

        $data['ongoing10'] = 'http://localhost/AnimeKu/';
        $data['ongambar10'] = base_url('assets/gambar/ANIME/BOFURI.png');

        $data['ongoing11'] = 'http://localhost/AnimeKu/';
        $data['ongambar11'] = base_url('assets/gambar/ANIME/Azur-Lane.jpg');

        $data['ongoing12'] = 'http://localhost/AnimeKu/';
        $data['ongambar12'] = base_url('assets/gambar/ANIME/BLOOD-C.png');

        $data['ongoing13'] = 'http://localhost/AnimeKu/';
        $data['ongambar13'] = base_url('assets/gambar/ANIME/Madoka.jpg');

        $data['ongoing14'] = 'http://localhost/AnimeKu/';
        $data['ongambar14'] = base_url('assets/gambar/ANIME/Junko.png');

        $data['ongoing15'] = 'http://localhost/AnimeKu/';
        $data['ongambar15'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');


        // ANIME REKOMENDASI ADMIN //

        $data['rekomendasi1'] = 'http://localhost/AnimeKu/anime/Mahou_Shoujo_Nante_Mou_Ii_Desukara';
        $data['rgambar1'] = base_url('assets/gambar/ANIME/Mahou_Shoujo_Nante_Mou_Ii_Desukara.jpg');

        $data['rekomendasi2'] = 'http://localhost/AnimeKu/anime/SteinsGate';
        $data['rgambar2'] = base_url('assets/gambar/ANIME/STEINSGATE.png');

        $data['rekomendasi3'] = 'http://localhost/AnimeKu/anime/BloodC';
        $data['rgambar3'] = base_url('assets/gambar/ANIME/BloodC.jpg');

        $data['rekomendasi4'] = 'http://localhost/AnimeKu/anime/CorpseParty';
        $data['rgambar4'] = base_url('assets/gambar/ANIME/CorpseParty.jpg');

        $data['rekomendasi5'] = 'http://localhost/AnimeKu/anime/DrStone';
        $data['rgambar5'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');

        $data['rekomendasi6'] = 'http://localhost/AnimeKu/anime/Kon';
        $data['rgambar6'] = base_url('assets/gambar/ANIME/Kon.jpg');

        $data['rekomendasi7'] = 'http://localhost/AnimeKu/anime/Mahou_Shoujo_Madoka_Magica';
        $data['rgambar7'] = base_url('assets/gambar/ANIME/Madoka.jpg');

        $data['rekomendasi8'] = 'http://localhost/AnimeKu/anime/Hyouka';
        $data['rgambar8'] = base_url('assets/gambar/ANIME/Hyouka.jpg');

        $data['rekomendasi9'] = 'http://localhost/AnimeKu/anime/YoujoSenki';
        $data['rgambar9'] = base_url('assets/gambar/ANIME/YoujoSenki.jpg');

        $data['rekomendasi10'] = 'http://localhost/AnimeKu/anime/Bofuri';
        $data['rgambar10'] = base_url('assets/gambar/ANIME/BOFURI.png');

        $data['rekomendasi11'] = 'http://localhost/AnimeKu/anime/MadeInAbyss';
        $data['rgambar11'] = base_url('assets/gambar/ANIME/MadeInAbyss.png');

        $data['rekomendasi12'] = 'http://localhost/AnimeKu/anime/Kanata_No_Astra';
        $data['rgambar12'] = base_url('assets/gambar/ANIME/Kanatanoastra.jpg');

        $data['rekomendasi13'] = 'http://localhost/AnimeKu/anime/Mushishi';
        $data['rgambar13'] = base_url('assets/gambar/ANIME/Mushishi.jpg');

        $data['rekomendasi14'] = 'http://localhost/AnimeKu/anime/MahouShoujoSite';
        $data['rgambar14'] = base_url('assets/gambar/ANIME/mahousoujosite.jpg');

        $data['rekomendasi15'] = 'http://localhost/AnimeKu/anime/Gamers';
        $data['rgambar15'] = base_url('assets/gambar/ANIME/Gamers.jpg');


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbar.php', $data);
        $this->load->view('index.php', $data);
        $this->load->view('random-anime.php', $data);
        $this->load->view('templates/footer.php');
    }
}
