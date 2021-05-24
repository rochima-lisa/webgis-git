<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?=templates()?>index.html">OKIApi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?=url('beranda')?>">Beranda</a></li>
          <li><a href="<?=url('peta-dasar')?>">Peta Hotspot</a></li>
          <li class="drop-down"><a href="">Data dan Grafik</a>
            <ul>
              <li><a href="<?=url('data')?>">Data Tabel</a></li>
              <li><a href="<?=url('statistik')?>">Grafik Jumlah Hotspot</a></li>
              <li><a href="<?=url('luas')?>">Grafik Luas Area</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="<?=url('input')?>">Input Data</a></li>
          <li><a href="<?=url('about')?>">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->