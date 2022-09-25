<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URL;?>Website/car_shop/bootstrap.css">
    <link rel="stylesheet" href="<?=URL;?>Website/car_shop/cars.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?=URL;?>Website/car_shop/cars.js"></script>
    <title><?=$title_page;?></title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand position-fixed" href="#myPage"><img src="<?=URL;?>Website/car_shop/bmw/BMW-logo.png" alt="logo"></a>
                <a class="navbar-brand position-fixed" href="#myPage"><img src="<?=URL;?>Website/car_shop/Mercedes/mercedes-logo.jpg" alt="logo"></a>
                <a class="navbar-brand position-fixed" href="#myPage"><img src="<?=URL;?>Website/car_shop/pego/pego-logo.jpg" alt="logo"></a>
              </div>


              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <?php foreach($menu as $m):?>
                  <li><a href="<?=URL;?>home/index"><?=$m['name'];?></a></li>
                  <?php endforeach;?>
                </ul>
              </div>
            </div>

          </nav>
          
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?=URL;?>Website/car_shop/pego/pego.jpg" alt="Pego" style="width:100%;">
            </div>
      
            <div class="item">
              <img src="<?=URL;?>Website/car_shop/bmw/bmw.jpg" alt="BMW" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="<?=URL;?>Website/car_shop/Mercedes/mercedes.jpg" alt="Mercedes" style="width:100%;">
            </div>
        </div>

            <!-- Left and right controls -->
             <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
             <span class="sr-only">Previous</span>
             </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
             </a>
        </div>
      </div>

    <div class="container-fluid text-danger">
        <div id="portfolio" class="container-fluid text-center bg-grey">
            <?= $headline;?><br>
            <h4><?=$details;?></h4>

            <div class="row text-center slideanim">

              <div class="col-sm-4 text-break box-shadow reveal">
                <div class="thumbnail">
                  <a href=""><img src="<?=URL;?>Website/post_img/assets/img/pego/<?=$image_1?>" alt="Pego" width="400" height="150"></a>
                  <h3><strong><?=$title_post_1;?></strong></h3>
                  <bdo dir=""><b><?=$description_1;?></b></bdo>
                </div>
              </div>

              <div class="col-sm-4 text-break box-shadow reveal">
                <div class="thumbnail">
                  <img src="<?=URL;?>Website/post_img/assets/img/bmw/<?=$image_2?>" alt="BMW" width="400" height="300">
                  <p><strong><?=$title_post_2?></strong></p>
                  <bdo dir="rtl"><?=$description_2?></bdo>
                </div>
              </div>

              <div class="col-sm-4 text-break box-shadow reveal">
                <div class="thumbnail">
                  <img src="<?=URL;?>Website/post_img/assets/img/mercedes/<?=$image_3?>" alt="Mercedes" width="400" height="150">
                  <p><strong><?=$title_post_3;?></strong></p>
                  <bdo dir="rtl"><?=$description_3;?></bdo>
                </div>
              </div>

            </div><br>
    </div>
  </div>
  
    
  <footer class="text-center">
    <a class="up-arrow move-arrow" href="C:\Users\mohamed\Desktop\web-cars\cars.html" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Made By Mohamed Ashraf</p> 
    <div class="container-fluid">  
      <div class="row">  
      <div class="col-md-12">
      <img class="logo-pego" src="<?=URL;?>Website/car_shop/pego/Pego-Logo-1.jpg" alt="pego-logo">
      <img class="logo-bmw" src="<?=URL;?>Website/car_shop/bmw/bmw-logo-1.jpg" alt="bmw-logo">
      <img class="logo-mersedes" src="<?=URL;?>Website/car_shop/Mercedes/Mercedes-Logo-1.jpg" alt="mercedes-logo">
      <footer class="footer">  
      <div class="container-fluid">  
      <div class="row">  
      <div class="col-md-3 m-b-30">  
      <div class="footer-title m-t-5 m-b-20 p-b-8">  
      About us  
      </div>  
      <p class="white-text">  
      Lorem Ipsum.  
      </p>  
      </div>  
      <div class="col-md-3 m-b-30">  
      <div class="footer-title m-t-5 m-b-20 p-b-8">  
      Latest themes  
      </div>  
      <div class="footer-links">  
      <a href="#">  
      Appointment  
      </a>  
      <a href="#">  
      Health center  
      </a>  
      <a href="#">  
      Quality  
      </a>  
      <a href="#">  
      Wallstreet  
      </a>  
      </div>  
      </div>  
      <div class="col-md-3 m-b-30">  
      <div class="footer-title m-t-5 m-b-20 p-b-8">  
      Quick Links  
      </div>  
      <div class="footer-links">  
      <a href="#">  
      Blog  
      </a>  
      <a href="#">  
      FAQ  
      </a>  
      <a href="#">  
      Terms & conditions  
      </a>  
      <a href="#">  
      Privacy policy  
      </a>  
      </div>  
      </div>  
      <div class="col-md-3 m-b-30">  
      <div class="footer-title m-t-5 m-b-20 p-b-8">  
      Support  
      </div>  
      <div class="footer-links">  
      <a href="#">  
      Affiliate  
      </a>  
      <a href="#">  
      Login  
      </a>  
      <a href="#">  
      All theme package  
      </a>  
      <a href="#">  
      Support forum  
      </a>  
      </div>  
      <div class="footer-social-links m-t-30">  
      <li> <a href="#">  
      <i class="fa fa-facebook" aria-hidden="true"> </i> </a>  
      <a href="#"> <i class="fa fa-twitter" aria-hidden="true"> </i> </a>  
      <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"> </i> </a>  
      <a href="#"> <i class="fa fa-youtube" aria-hidden="true"> </i> </a>  
      </li>  
      </div>  
      </div>  
      </div>  
      </div>
      </footer>  
      <div class="footer-bottom">  
      Copyright ? 2017, All Rights Reserved  
      </div>  
      </div>  
      </div>  
      </div>
  </footer>
</body>
</html>