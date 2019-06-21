<?php
if (isset($_POST['btn'])) {
  
  $msg = "";
/*include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";*/


    $meno = $_POST['meno'];
    $email = $_POST['email'];
    $predmet = $_POST['value'];
    $msg= '<div class="jumbotron">'. $_POST['meno'] . '<br>' . $_POST['email'] .'<br>' . $_POST['sprava'].'</div>';

    require('phpmailer/PHPMailerAutoload.php');
  
      $mail = new PHPMailer();
      $mail->CharSet = "UTF-8";
      $mail->addAddress('postmaster@globalgraphicdesign.eu');
      $mail->setFrom($email);
      $mail->Subject = $predmet;
      $mail->isHTML(true);
      $mail->Body = $msg;

      if ($mail->send()) {
          header("Location: email_gen_msg.html");
      } else{
         //$msg = "Vyskitla sa chyba, skúste to znova!";
        echo 'nastala chyba';
       }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Graphic Company Global Graphic & design. We are making website , print graphic and 3D templates for customers">
<meta name="robots" content="index, follow">
<meta name="keywords" content="web,web design,designer,dizajn,tvorba www stranok,print graphic, 2D,vector,3D">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="fav.png" type="image/gif" sizes="16x16">
<title>Global Graphic & Design - Store</title>
<link rel="canonical" href="https://www.globalgraphicdesign.eu">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130975904-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130975904-1');
</script>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
<style type="text/css">body {font-family: Raleway;}</style>
</head>
<body>

<div id="main_2">
  
<nav id="menu" class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="logo.png" alt="loginko" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="portfolio.php">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="pricing.php">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="blog/blog.php">Blog</a>
      </li>
    </ul>
  </div>  
</nav>
<br><br>


<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">€0</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Website</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Print Graphic</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>3D Graphic</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Free PSD/PDF template</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>10% prize reduction</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>News feed</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Consultation</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Order</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
            <h6 class="card-price text-center">€50</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Birtday Invitations</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Business Cards</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Logo + Logo manual</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Branding/Mock up</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>3x PSD/PDF templates</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>3D Graphic</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Consultation</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>24/7 LiveChat support</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Order</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">€250</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Business Website</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>E-commerce Website</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Portfolio/Blog Website</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>HTTPS protocol</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Domain</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Web Hosting</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>SEO</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>24/7 LiveChat support</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Order</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>