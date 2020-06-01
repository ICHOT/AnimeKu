<?php
class Genre extends CI_Controller
{
  public function index()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Genre';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre.php');
    // $this->load->view('templates/footer.php');
  }
  public function Action()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Action';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/action.php');
    // $this->load->view('templates/footer.php');
  }
  public function Adventure()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Adventure';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/adventure.php');
    // $this->load->view('templates/footer.php');
  }
  public function Comedy()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Comedy';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/comedy.php');
    // $this->load->view('templates/footer.php');
  }
  public function Demons()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Demons';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/demons.php');
    // $this->load->view('templates/footer.php');
  }
  public function Drama()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Drama';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/drama.php');
    // $this->load->view('templates/footer.php');
  }
  public function Ecchi()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Ecchi';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/ecchi.php');
    // $this->load->view('templates/footer.php');
  }
  public function Fantasy()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Fantasy';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/fantasy.php');
    // $this->load->view('templates/footer.php');
  }
  public function Game()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Game';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/game.php');
    // $this->load->view('templates/footer.php');
  }
  public function Harem()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Harem';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/harem.php');
    // $this->load->view('templates/footer.php');
  }
  public function Historical()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Historical';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/historical.php');
    // $this->load->view('templates/footer.php');
  }
  public function Horror()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Horror';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/horror.php');
    // $this->load->view('templates/footer.php');
  }
  public function Josei()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Josei';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/josei.php');
    // $this->load->view('templates/footer.php');
  }
  public function Magic()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Magic';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/magic.php');
    // $this->load->view('templates/footer.php');
  }
  public function Martial_Arts()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Martial Arts';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/martialarts.php');
    // $this->load->view('templates/footer.php');
  }
  public function Mecha()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Mecha';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/meha.php');
    // $this->load->view('templates/footer.php');
  }
  public function Militay()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Militay';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/military.php');
    // $this->load->view('templates/footer.php');
  }
  public function Music()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Music';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/music.php');
    // $this->load->view('templates/footer.php');
  }
  public function Mystey()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Mystery';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/mystery.php');
    // $this->load->view('templates/footer.php');
  }
  public function Psychological()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Psychological';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/psychological.php');
    // $this->load->view('templates/footer.php');
  }
  public function Parody()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Parody';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/parody.php');
    // $this->load->view('templates/footer.php');
  }
  public function Police()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Police';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/police.php');
    // $this->load->view('templates/footer.php');
  }
  public function Romance()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Romance';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/Romance.php');
    // $this->load->view('templates/footer.php');
  }
  public function School()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - School';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/school.php');
    // $this->load->view('templates/footer.php');
  }
  public function Samurai()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Samurai';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/samurai.php');
    // $this->load->view('templates/footer.php');
  }
  public function Sci_Fi()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Sci_Fi';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/sci-fi.php');
    // $this->load->view('templates/footer.php');
  }
  public function Seinen()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Seinen';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/seinen.php');
    // $this->load->view('templates/footer.php');
  }
  public function Shoujo()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Shoujo';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/shoujo.php');
    // $this->load->view('templates/footer.php');
  }
  public function Shoujo_Ai()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Shoujo_Ai';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/shoujo-ai.php');
    // $this->load->view('templates/footer.php');
  }
  public function Shounen()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Shounen';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/shounen.php');
    // $this->load->view('templates/footer.php');
  }
  public function Slice_Of_Life()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Slice Of Life';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/slice-of-life.php');
    // $this->load->view('templates/footer.php');
  }
  public function Sports()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Sports';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/sports.php');
    // $this->load->view('templates/footer.php');
  }
  public function Space()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Space';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/space.php');
    // $this->load->view('templates/footer.php');
  }
  public function Super_Power()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Super Power';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/super-power.php');
    // $this->load->view('templates/footer.php');
  }
  public function Supernatural()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Supernatural';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/supernatural.php');
    // $this->load->view('templates/footer.php');
  }
  public function Thriller()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Thriller';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/thriller.php');
    // $this->load->view('templates/footer.php');
  }
  public function Vampire()
  {
    $data['domain'] = 'http://localhost/AnimeKu/';
    $data['judul'] = ' - Vampire';
    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/navbaroff.php', $data);
    $this->load->view('genre/vampire.php');
    // $this->load->view('templates/footer.php');
  }
}
