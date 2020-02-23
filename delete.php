<?php 


$command = escapeshellcmd("mlflood.py");
$output = shell_exec($command);




?>

<!doctype html>
<html lang="en">
  <head>
    <title>Flood Prediction</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/jquery-ui.css">
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <link rel="stylesheet" href="css1/owl.theme.default.min.css">
    <link rel="stylesheet" href="css1/owl.theme.default.min.css">

    <link rel="stylesheet" href="css1/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css1/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css1/aos.css">

    <link rel="stylesheet" href="css1/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="" style="color: lightblue;"><a href="index.html" class="h2 mb-0">Flood Prediction<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="" style="color: lightblue;">
            <nav class="site-navigation position-relative text-right" role="navigation" style="color: lightblue;">

              <ul style="color: lightblue;" class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li style="font-color: lightblue;" > <a href="index.php
                  " class="nav-link" ><p style="color: black;">Home</p></a></li>
            
              
                <li><a href="#contact-section" class="nav-link"> <p style="color: black;">Contact</p></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  <br>  <br>  <br>

   
    
  
    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Prediction </h2>
          </div>
          <div class="container" >
         <div class="degree">
                 <p style="font-size: 30px;color: black;">Flood Inded  :<span><img src="images/icon-wind.png" alt="" style="font-size: 20px;"><?php  echo $output[1] ?></span></p>
                 <?php 
                  if($output[1]==0){
                    ?>
                  <p style="font-size: 70px;color:black; font-weight: 20px; font-family:cursive;text-align: center; ">Relax,Chances of flood are very less.Have a good day!</p>
                    <?php
                  }
                 ?>
                  <?php 
                  if($output[1]==1){
                    ?>
                  <p style="font-size: 70px;color:black; font-weight: 20px; font-family:cursive;text-align: center; ">There are high chances of flood,Act immediately.</p>
                    <?php
                  }
                 ?>
               </div>
     
        </div>
       
        </div>
      </div>
    </section>

   
   


   
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>The idea is to implement a robust model, culminating all the desired factors to predict
a possibility of flooding in a particular area. The desired factors would be duly analyzed
and the output would be generated with an increased amount of accuracy. </p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                

                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
            
            </div>
          </div>
         
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>