<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">
    
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Best Kept Secret Band</title>
    
 
    
  </head>
  <body>
<!--
    
    <div class="stickyprofile">
      <a href="profile.pdf" target="_blank">VIEW PROFILE</a>
    </div>
    
-->
    <?php
      include("session.php");
      
      $sql = "select * from events";
      $result = mysqli_query($db,$sql) or die ("VERY BAD");
    ?>
    
    
<!--    <div class="fancybg">-->
      
      <img class="bgstafa" src="img/fancy.jpg">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
<!--      <a class="navbar-brand" href="#"><img src="img/logo.png"></a>-->
      

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#shows">Shows</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          
        </ul>
      </div>

      
      </div>
    </nav>
      
    <div class="fancylogo">
      <img src="img/logo.png">
    </div>
      
<!--    </div>-->
    
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
    <div class="vidbg" id="media">
    <div class="container">
      <a data-toggle="modal" data-target="#exampleModalCenter">
      <div class="main">
        
      </div>
      </a>
    </div>
    </div>
-->
    
    <!-- Button trigger modal -->

    <!-- Modal -->
<!--
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <video width="100%" controls>
              <source src="img/pcsir.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>
          </div>
        </div>
      </div>
    </div>
-->
    
    
    <!-- Optional JavaScript -->
  
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>