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

    <title>Hello, world!</title>
  </head>
  <body>
    
    <?php
      include("session.php");
      
      $sql = "select * from events";
      $result = mysqli_query($db,$sql) or die ("VERY BAD");
    ?>
    
<!--    <div class="fancybg">-->
      
      <img class="bgstafa" src="img/fancy.jpg">
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
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
            <a class="nav-link" href="#">The Band</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Shows</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">View Profile</a>
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
      
    
    
    <div class="vidbg">
    <div class="container">
      <a data-toggle="modal" data-target="#exampleModalCenter">
      <div class="main">
        
      </div>
        </a>
    </div>
    </div>
    
    
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <iframe width="100%" height="500px" src="https://www.youtube.com/embed/E1-2tusj0VM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    
    
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
    <div class="eventbg">
    
    <div class="container-fluid">
      <div class="horyt">
        <div class="single">
          <a class="overlaid" href="http://kishan.co.in">
          <iframe src="https://www.youtube.com/embed/VroiyTf7FIQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </a>
          <iframe src="https://www.youtube.com/embed/LxJUBMkXdcE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <iframe src="https://www.youtube.com/embed/HzfCI8rJgY0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <iframe src="https://www.youtube.com/embed/DHn_2omIybc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <iframe src="https://www.youtube.com/embed/bC2gQUt9Td4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    
    
    <div class="container-fluid album">
      <h1>Events</h1>
      <div class="row">
        <div class="col-md-4">
          
          <div class="back" style="background-image: url(img/corporate.jpg)">
          <div class="event">
            <h3>Corporate Events</h3>
            <br>
            <div class="alshow">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          
          <div class="back" style="background-image: url(img/gig.jpg)">
          <div class="event">
            <h3>Gigs</h3>
            <br>
            <div class="alshow">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          
          <div class="back" style="background-image: url(img/wedding.jpg)">
          <div class="event">
            <h3>Weddings</h3>
            <br>
            <div class="alshow">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    <div class="grape">
      <h1>Grapevine</h1>
      <div class="owl-carousel">
        <div class="onegrape">
          <div class="row">
            <div class="col-md-4 col-4">
              <div class="testimg" style="background-image: url(http://im.rediff.com/movies/2017/mar/31raveena3.jpg);"></div>
            </div>
            <div class="col-md-8 col-8">
              <div class="huge"></div>These boys are amazing. They will make it big<br><br>
              <div class="name">- Raveena Tandon<br>Actress</div>
            </div>
          </div>
        </div>
        
        <div class="onegrape">
          <div class="row">
            <div class="col-md-4 col-4">
              <div class="testimg" style="background-image: url(http://ste.india.com/sites/default/files/2014/08/07/214308-ab-de-villiers-conf-1.jpg);"></div>
            </div>
            <div class="col-md-8 col-8">
              <div class="huge"></div>Loved jamming with the band. Looking forward to working with them in the future<br><br>
              <div class="name">- AB Devilliers<br>Cricketer</div>
            </div>
          </div>
        </div>
        
        <div class="onegrape">
          <div class="row">
            <div class="col-md-4 col-4">
              <div class="testimg" style="background-image: url(https://dhoom.filmipop.com/media//cast/2016/Aug/1472038136-mb6.jpg);"></div>
            </div>
            <div class="col-md-8 col-8">
              <div class="huge"></div>They rocked the party. They will become famous<br><br>
              <div class="name">- Madhur Bhandarkar<br>Director</div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    </div>
    
    <div class="tour">
      <div class="container">
      <h1>Tour Dates 2018</h1>
    
    <?php
      while($row = mysqli_fetch_array($result))
      { 
        echo '<div class="nothing">';
          echo '<div class="row justify-content-md-center">';
            echo '<div class="col-md-1 ddate">';
              echo $row['date'];
            echo '</div>';
            echo '<div class="col-md-4 dplace">';
              echo '<h4>';
              echo $row['title'];
              echo '</h4>';
              echo '<i>';
              echo $row['description'];
              echo '</i>';
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
    </div>

    <div class="conform">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6" style="text-align: center">
            <h1>Get in touch</h1>
            <hr style="margin-top: 30px">
            <div class="social">
              <a href="#"><i class="fab fa-facebook-square"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-soundcloud"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <hr style="margin-bottom: 30px">
          </div>
          
          <div class="col-md-6">
            <form action="thanks.php" method="post">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label>Email ID</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message"></textarea>
              </div>
              
              
              <button type="submit" class="btn darkish" style="width: 100%">Submit</button>
            </form>
          </div>
        </div>
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