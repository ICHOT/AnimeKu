<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ICHOT</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Cara Download <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Laporkan Link Rusak</a>
      </li>


      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">ICHOT</a>
      </li>
    </ul>

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<!-- logo img-fluid-->
<div class="bglogo"></div>
<img src="<?= base_url('assets/'); ?>gambar/ANIME/Logo3.png" class="logo" alt="LOGO">



<!-- grup list -->
<br />
<div class="paket">
  <div><a href="<?= base_url(''); ?>"><button type="button" class="btn btn-outline-secondary">HOME</button> </a></div>
  <div><a href="<?php echo $domain; ?>listanime"><button type="button" class="btn btn-outline-secondary">LIST</button></a></div>

  <div><a href="<?php echo $domain; ?>Genre"><button type="button" class="btn btn-outline-secondary">GENRE</button></a></div>
  <!-- <div><a href="<?= base_url('anime/'); ?>"><button type="button" class="btn btn-outline-secondary">GENRE</button></a></div> -->
  <div><a href="<?= base_url('auth/'); ?>"><button type="button" class="btn btn-outline-secondary">ADMIN</button></a></div>
</div>
<br />
<!-- pemisah -->