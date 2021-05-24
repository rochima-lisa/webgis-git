<?php 
 include '_loader.php';
 $setTemplate=true;
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
  }
  else{
    $halaman='beranda';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();
  
  if($setTemplate==true){
    
?>

<!DOCTYPE html>
<html lang="en">
<?php include '_layouts/head.php'?>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">geomatika@its.ac.id</a>
        <i class="icofont-phone"></i> +62 821 3233 3324
      </div>
      <div class="social-links">
        <a href="https://www.its.ac.id/tgeomatika/id/beranda/" class="web"><i class="icofont-web"></i></a>
        <a href="https://www.instagram.com/its_geomatics/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.linkedin.com/in/diya-rochima/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>


<div class="wrapper">

<?php
  include '_layouts/header.php';
?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>
        <?=$judul?>
      </h2>
      <ol>
        <li><a href="#">Home</a></li>
        <li class="active"><?=$judul?></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<?php
  echo $content;
?>

</main><!-- End #main -->

<?php
  include '_layouts/footer.php';
?>

<!-- ======= Tombol Back to Top ======= -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


<?php
  include '_layouts/javascript.php';
?>

</div>
</body>
</html>


<?php } else {
  echo $content;
}


if(isset($fileJs)){
    include '_halaman/js/'.$fileJs.'.php';
  }
  
?>