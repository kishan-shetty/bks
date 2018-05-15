<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Best Kept Secret Band</title>
  </head>
  <body>
    
    <div class="fancybg">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
<!--      <a class="navbar-brand" href="#"><img src="img/logo.png"></a>-->
      

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php"#shows>Shows</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#media">Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
          
        </ul>
      </div>

      
      </div>
    </nav>
      
      <div class="fancylogo">
<!--        <img src="img/logo.png">-->
        
        <div class="conform">
      <div class="container">
        
        
      <?php
      
        $body = "Name: " . $_POST['name'] . "\r\n" . "Email: " . $_POST['email'] . "\r\n" . "Message: " . $_POST['message'];

        if(mail("behram747@gmail.com, karan@wirality.co", "Website Contact form Submission", $body, "From: message@bestkeptsecretband.com"))
        echo "<h1>Thank you for your message!</h1>
        <br>
        We will get in touch with you shortly";
        else
        echo "Your mail could not be sent :(";
      
      ?>
        
        
        
      </div>
    </div>
        
      </div>
      
    </div>
    
<!--
    <div class="container-fluid topmenu">
    <div class="row">
      
      <div class="col-md-6">
        <img src="img/logo.png" style="height: 80px;">
      </div>
      
      <div class="col-md-6" style="text-align: right">
    <div class="menu">
      <img src="img/menu.svg" onclick="openNav()" style="height: 30px;">
    </div>
      </div>
    
   
      </div>
    </div>
-->
<!--
    
     <div id="mySidenav" class="sidenav">
      <a class="closebtn" onclick="closeNav()" style="cursor: pointer; color: white">X</a>
      <a href="#">HOME</a>
      <a href="#">THE BAND</a>
      <a href="#">SHOWS</a>
      <a href="#">MUSIC</a>
      <a href="#">MEDIA</a>
    </div>
-->
      
    
    
<!--
    <div class="vidbg">
    <div class="container">
      <div class="main">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/E1-2tusj0VM?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
    </div>
-->
    
<!--
    <div class="more">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" style="background: linear-gradient(45deg, #312246, #9f273e)">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/VroiyTf7FIQ?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <a href="https://www.youtube.com/channel/UC8YDvzSInCku9FP8igd5VwA"><button class="btn darkish">MORE ON YOUTUBE</button></a>
          </div>
          <div class="col-md-6" style="background: linear-gradient(45deg, #312246, #19626c)">
            <div style="background-image: url('https://scontent.fblr2-1.fna.fbcdn.net/v/t1.0-9/27544587_1724968304227350_9003890381730273712_n.jpg?oh=44bb2b2ee2421d18ec7e9d780ec543db&oe=5B17C22F'); height: 315px; width: 100%; background-size: cover; margin-bottom: 8px"></div>
            <a href="https://www.instagram.com/bestkeptsecretband/"><button class="btn darkish">MORE ON INSTAGRAM</button></a>
          </div>
        </div>
      </div>
    </div>
-->

    
<!--
    <div class="tour">
      <div class="container">
        <h1>Tour Dates 2018</h1>
        <div class="nothing">
          <div class="row justify-content-md-center">
            <div class="col-md-1 ddate">
              01 JAN
            </div>
            <div class="col-md-4 dplace">
              <h4>Lorem Ipsum dolor sit</h4>
              <i>Consectetur adipiscing elit</i>
            </div>
          </div>
        
        <div class="row justify-content-md-center">
            <div class="col-md-1 ddate">
              02 FEB
            </div>
            <div class="col-md-4 dplace">
              <h4>Lorem Ipsum dolor sit</h4>
              <i>Consectetur adipiscing elit</i>
            </div>
          </div>
        
        <div class="row justify-content-md-center">
            <div class="col-md-1 ddate">
              03 MAR
            </div>
            <div class="col-md-4 dplace">
              <h4>Lorem Ipsum dolor sit</h4>
              <i>Consectetur adipiscing elit</i>
            </div>
          </div>
        
        
        </div>
      </div>
    </div>
-->
    
    

    <!-- Optional JavaScript -->
    
<!--
    <script>
      /* Set the width of the side navigation to 250px */
      function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
      }

      /* Set the width of the side navigation to 0 */
      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
      }
    </script>
-->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>