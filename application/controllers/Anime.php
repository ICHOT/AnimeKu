<?php
class Anime extends CI_Controller
{


    // ================================================================


    public function Mahou_Shoujo_Nante_Mou_Ii_Desukara()
    {
        $data['judul'] = ' - Mahou Shoujo Nante Mou Ii Desukara';
        $data['domain'] = 'http://localhost/AnimeKu/';


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php', $data);
        $this->load->view('anime/MahouShoujoNanteMouIiDesukara.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function SteinsGate()
    {
        $data['judul'] = ' - Steins Gate';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Steins Gate';


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/SteinsGate.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function BloodC()
    {
        $data['judul'] = ' - BloodC';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'BloodC';



        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/BloodC.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function CorpseParty()
    {
        $data['judul'] = ' - CorpseParty';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Corpse Party';


        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/CorpseParty.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function DrStone()
    {
        $data['judul'] = ' - DrStone';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Dr. Stone';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/DrStone.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Mahou_Shoujo_Madoka_Magica()
    {
        $data['judul'] = ' - Mahou Shoujo Madoka★Magica';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Mahou Shoujo Madoka★Magica';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/MadokaMagicia.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Hyouka()
    {
        $data['judul'] = ' - Hyouka';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Hyouka';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Hyouka.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Domestic_Na_Kanojo()
    {
        $data['judul'] = ' - Domestic Na Kanojo';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Domestic Na Kanojo';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/DomesticNaKanojo.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Gamers()
    {
        $data['judul'] = ' - Gamers';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Gamers';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Gamers.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Kakushigoto()
    {
        $data['judul'] = ' - Kakushigoto';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Kakushigoto';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Kakushigoto.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Tower_Of_God()
    {
        $data['judul'] = ' - Tower Of God';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Tower Of God';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/TowerOfGod.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Kimetsu_No_Yaiba()
    {
        $data['judul'] = ' - Kimetsu No Yaiba';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Kimetsu No Yaiba';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/KimetsuNoYaiba.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function KaguyaSama()
    {
        $data['judul'] = ' - Kakushigoto';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'KaguyaSama';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/KaguyaSama.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Kon()
    {
        $data['judul'] = ' - Kon';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'K-ON';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Kon.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function MadeInAbyss()
    {
        $data['judul'] = ' - Made In Abyss';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Made In Abyss';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/MadeInAbyss.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function MahouShoujoSite()
    {
        $data['judul'] = ' - Mahou Shoujo Site';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Mahou Shoujo Site';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/MahouShoujoSite.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Mushishi()
    {
        $data['judul'] = ' - Mushishi';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Mushishi';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Mushishi.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function nichijou()
    {
        $data['judul'] = ' - Nichijou';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Nichijou';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Nichijou.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function YoujoSenki()
    {
        $data['judul'] = ' - Youjo Senki';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Youjo Senki';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/YoujoSenki.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Bofuri()
    {
        $data['judul'] = ' - Bofuri';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Bofuri';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Bofuri.php', $data);
        $this->load->view('templates/footer.php');
    }
    // ===
    public function Chihayafuru()
    {
        $data['judul'] = ' - ';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Chihayafuru';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Chihayafuru.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Cop_Craft()
    {
        $data['judul'] = ' - ';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Cop Craft';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/CopCraft.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Dororo()
    {
        $data['judul'] = ' - ';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Dororo';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Dororo.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Fruits_Basket()
    {
        $data['judul'] = ' - ';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Fruits Basket';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/FruitsBasket.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Isekai_Quartet()
    {
        $data['judul'] = ' - Isekai Quartet';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Isekai Quartet';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/IsekaiQuartet.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Gotobun_No_Hanayome()
    {
        $data['judul'] = ' - Gotobun No Hanayome';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Gotobun No Hanayome';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/GotobunNoHanayome.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Haikyuu()
    {
        $data['judul'] = ' - Haikyuu';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Haikyuu!!';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/Haikyuu.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Kanata_No_Astra()
    {
        $data['judul'] = ' - Kanata No Astra';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Kanata No Astra';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/KanataNoAstra.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Majutsushi_Orphen_Hagure_Tabi()
    {
        $data['judul'] = ' - Majutsushi Orphen Hagure Tabi';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Majutsushi Orphen Hagure Tabi';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/MajutsushiOrphenHagureTabi.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Murenase_Seton_Gakuen()
    {
        $data['judul'] = ' - Murenase Seton Gakuen';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Murenase Seton Gakuen';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/MurenaseSetonGakuen.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Yokusoku_No_Neverland()
    {
        $data['judul'] = ' - Yokusoku No Neverland';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Yokusoku No Neverland';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/YokusokuNoNeverland.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Owari_No_Seraph()
    {
        $data['judul'] = ' - Owari No Seraph';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Owari No Seraph';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/OwariNoSeraph.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Princess_Connect()
    {
        $data['judul'] = ' - Princess Connect Re Dive';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Princess Connect! Re:Dive';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/PrincessConnectReDive.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Sounan_Desu_ka()
    {
        $data['judul'] = ' - Sounan Desu ka?';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Sounan Desu Ka?';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/SounanDesuka.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function SSSS_Gridman()
    {
        $data['judul'] = ' - SSSS Gridman';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'SSSS Gridman';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/SSSSGridman.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Toaru_Kagaku_No_Railgun()
    {
        $data['judul'] = ' - Toaru Kagaku No Railgun';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Toaru Kagaku No Railgun';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/ToaruKagakuNoRailgun.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function Takagi_San()
    {
        $data['judul'] = ' - Takagi San';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'Takagi San';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/TakagiSan.php', $data);
        $this->load->view('templates/footer.php');
    }
    public function To_LOVE_Ru()
    {
        $data['judul'] = ' - To LOVE Ru';
        $data['domain'] = 'http://localhost/AnimeKu/';
        $data['anime'] = 'To LOVE Ru';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbaroff.php');
        $this->load->view('anime/ToLOVERu.php', $data);
        $this->load->view('templates/footer.php');
    }
}
