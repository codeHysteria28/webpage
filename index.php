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
<meta http-equiv="X-UA-cCmpatible" content="IE=edge, chrome=1">
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
<title>Global Graphic & Design - Webdesign and Print Graphic</title>
<link rel="canonical" href="https://www.globalgraphicdesign.eu">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="animate.css">
<link rel="stylesheet" href="hover-min.css">
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

      <h1 class="text-center slideInDown animated delay-1s">We provide custom website and design<br> services for individual</h1>
      <p class="text-center slideInDown animated delay-1s" id="chacha">Are you looking to establish,improve or maintain  presence whether it's online or offline?</p><br><br>

      <div class="container">
        <div class="row">
         <div class="col text-center">
          <a href=""><button class="btn btn-primary slideInDown animated delay-1s" id="learnMore" name="btn">Learn More</button></a>
          <a href="team.php"><button class="btn btn-primary slideInDown animated delay-1s" id="meetUs" name="btn">Meet Us</button></a>
        </div>
        </div>
      </div>

      <p class="text-center wow slideInDown animated" id="focus">FOCUS ON YOUR BUSINESS</p>
      <h2 class="text-center wow slideInDown animated" id="visuals">We'll take care of your visuals</h2>

      <div class="container cont1">
        <div class="row"> 

          <div class="col-md-4">
            <h3 class="headings"><div class="rectangle"></div>Web Development</h3>
            <p class="col-text">Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services.</p>
          </div>


          <div class="col-md-4">
            <h3 class="headings"><div class="rectangle"></div>Print</h3>
            <p class="col-text">Print design, a subset of graphic design, is a form of visual communication used to convey information to an audience through intentional aesthetic design printed on a tangible surface, designed to be printed on paper, as opposed to presented on a digital platform. A design can be considered print design if its final form was created through an imprint made by the impact of a stamp, seal, or dye on the surface of the paper.</p>
          </div><br>

        </div>
      </div>



            <div class="container cont1">
        <div class="row"> 

          <div class="col-md-4">
            <h3 class="headings"><div class="rectangle"></div>3D Graphic</h3>
            <p class="col-text">3D computer graphics or three-dimensional computer graphics (in contrast to 2D computer graphics), are graphics that use a three-dimensional representation of geometric data (often Cartesian) that is stored in the computer for the purposes of performing calculations and rendering 2D images. Such images may be stored for viewing later or displayed in real-time.</p>
          </div>


          <div class="col-md-4">
            <h3 class="headings"><div class="rectangle"></div>SEO</h3>
            <p class="col-text">Search engine optimization (SEO) is the process of increasing the visibility of a website or a web page to users of a web search engine. The term excludes the purchase of paid placement, referring only to the improvement of unpaid results (known as "natural" or "organic" results).
SEO is performed because a website will receive more visitors from a search engine the higher the website ranks in the search engine results page (SERP). </p>
          </div><br><br>

          

        </div>
      </div>

<p class="text-center wow slideInDown animated" id="ref">REFERENCES</p>
<h2 class="text-center wow slideInDown animated" id="vis">We'll take care of your needs</h2>




  <div class="container">
    <blockquote>
      <p id="quoteText">There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for. Quick response, the final file was same as I wanted. Thank you guys!</p>
      <cite>&mdash; <span id="quoteAuthor">Mark O'Reilly</span>
      </cite>
    </blockquote>
  </div><br><br><br><br>



<form id="contact_form" method="post" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-4">
                <div class="row" id="form_row">
                    <div class="col-md-6">
                      <strong class="talk">Contact Us</strong><br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your name" name="meno" required style="width: 195px;" />
                        </div>
                        <div class="form-group">
                            <label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" placeholder="Your email" autocomplete='email' name="email" required id="mailos" style="width: 200px;"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="text" class="form-control" placeholder="Project Details" autocomplete='details' name="sprava" style="width: 200px;" required id="mailos" />
                            </div>
                        </div>
                        <input type="submit" name="btn" class="btn btn-primary" style="width: 150px;font-family: Raleway;" value="Send">
                        <div class="form-group">
                        <a href="https://www.facebook.com/GlobalGD" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/branislav-buna-0bab87181/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/global_graphicdesign" target="_blank"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                </div>
        </div>
                <div class="col-md-4" id="address">
            <address>
                <strong class="talk">Let's talk Business<br>
                </strong><br>
                <p>250 Castlecurragh Heath, Blanchradstown<br>
                Dublin 15, Ireland</p>
                <a href="mailto:#">postmaster@globalgraphicdesign.eu</a><br><br>
                <abbr title="Phone" class="phone">
                    Phone no.:</abbr>
                +353 83 039 8792<br>
            </address>
        </div>
    </div>
</div>
</form>

<!-- Footer -->
<footer class="page-footer font-small bg-light lighten-3 pt-4">
    <div class="footer-copyright text-center py-3 text-primary">© 2019 Copyright: Global Graphic & Design<br>
      Design:<a href="https://www.instagram.com/saavitar/" target="_blank">&nbsp;Adam Rybák</a>
    </div>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cd04cc2d07d7e0c639229ce/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>