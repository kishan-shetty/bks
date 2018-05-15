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

    <style>
      
      .showlogo
      {
        text-align: center;
        padding-top: 100px;
        padding-bottom: 50px;
      }
      
      .showlogo img
      {
        height: 150px;
      }
      
    </style>
    
    <title>Best Kept Secret Band</title>
  </head>
  <body>
    
    <?php
      include("session.php");
      
      $sql = "select * from events";
      $result = mysqli_query($db,$sql) or die ("VERY BAD");
    ?>
    
<!--    <div class="fancybg">-->
      
      <img class="bgstafa" src="img/eventbb.jpg">
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
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
            <a class="nav-link" href="#">Shows</a>
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
      
<!--      <div class="fancylogo">-->
    <div class="showlogo">
        <img src="img/logo.png">
    </div>
<!--      </div>-->
      
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
      
    
   
    
    
    
    
    
    

    
    <div class="tour">
      <div class="container">
      <h1>Tour Dates 2018</h1>
    
    <?php
      while($row = mysqli_fetch_array($result))
      { 
        echo '<div class="nothing">';
          echo '<div class="row justify-content-md-center">';
            echo '<div class="col-md-2 ddate">';
              echo $row['date'];
            echo '</div>';
            echo '<div class="col-md-4 dplace">';
              echo '<h4>';
              echo $row['title'];
              echo '</h4>';
            echo '</div>';
          echo '</div>';
          echo '</div>';
      }
        ?>
<!--
        
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
        
-->
        
        </div>
      </div>


  

    <!-- Optional JavaScript -->
    
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
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="owl.carousel.min.js"></script>
    
    <script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          loop:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:2
              }
          }
        });
      });
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>