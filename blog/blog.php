<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Our blog about technologies, graphic design and web development">
<meta name="robots" content="index, follow">
<meta name="keywords" content="web,web design,designer,dizajn,tvorba www stranok,print graphic, 2D,vector,3D.blog">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="../logo.png" type="image/gif" sizes="16x16">
<title>Global Graphic & Design - Blog</title>
<link rel="canonical" href="https://www.globalgraphicdesign.eu">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="animate.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">body{font-family: Raleway;}</style>
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
</head>
<body>
<div id="main">
	
<nav id="menu" class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="../logo.png" alt="loginko" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="../index.php">Home</a>
      </li>
       <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="../registracia.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="../login.php">Sign in</a>
      </li>
    </ul>
  </div>  
</nav>


          <section id="variableBoxRight">

                <?php
                switch($_GET['id']) {
                default;
                require ("clanky.php");
                break;

                case 'read_more':
                include 'read_more.php';
                break;
                }
                ?>
            </section> 


</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>