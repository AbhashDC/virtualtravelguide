<div class="row" >
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" >

        <!--TOP NAVBAR-->
          <nav class="navbar justify-content-between col-md-12" style="z-index:10;position:absolute;top:0%;background:rgba(0,0,0,0);">
            <a class="navbar-brand ml-4" href="#">
              <img src="images/logo.png" width="60" height="60" alt="">
            </a>
            <div class="navbarbtn mr-4">
             <button class="btn btn-outline-primary " type="submit">Login</button>
              <button class="btn btn-outline-primary " type="submit">Register</button>
            </div>
          </nav>
        <!--END OF TOP NAVBAR-->

        <!--SEARCH PORTION-->
          <div class="row justify-content-md-center" style="background:red;">
                <form class="form-inline col-md-8" style="position:absolute;top:46%;z-index:10;" >
                    <input type="text" class="form-control col-md-10 mr-3" style="width:70%;padding:10px;" placeholder="" >
                    <input type="submit" value="Search" class="btn btn-primary btn-lg">
                </form>
        </div>
        <!--END OF SEARCH PORTION -->

          <div class="carousel-item active" >
            <img class="d-block w-100" src="images/4.jpg" alt="First slide" style="height:100%;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/1.jpg" alt="Second slide" style="height:100%;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/2.jpg" alt="Third slide" style="height:100%;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <nav class="menu_splash justify-content-md-center" style="//background:Red;">
          <ul id="menu_splash" class="clearfix">
            <li class="nav1">
              <a href="#" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/ic1.png" alt="" class="img_icon">
                  <div class="txt1">Destinations</div>
                </div>
                <div class="back">
                  <img src="images/ic1.png" alt="" class="img_icon">
                  <div class="txt1">Destinations</div>
                </div>
              </div>
              </a>
            </li>
            <li class="nav2">
              <a href="vehiclerental.php" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/ic6.png" alt="" class="img_icon">
                  <div class="txt1">Vehicle Rental</div>
                </div>
                <div class="back">
                  <img src="images/ic6.png" alt="" class="img_icon">
                  <div class="txt1">Vehicle Rental</div>
                </div>
              </div>
              </a>
            </li>
            <li class="nav3">
              <a href="#" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/ic5.png" alt="" class="img_icon">
                  <div class="txt1">Packages</div>
                </div>
                <div class="back">
                  <img src="images/ic5.png" alt="" class="img_icon">
                  <div class="txt1">Packages</div>
                </div>
              </div>
              </a>
            </li>
            <li class="nav4">
              <a href="hotel.php" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/ic4.png" alt="" class="img_icon">
                  <div class="txt1">Hotels</div>
                </div>
                <div class="back">
                  <img src="images/ic4.png" alt="" class="img_icon">
                  <div class="txt1">Hotels</div>
                </div>
              </div>
              </a>
            </li>
            <li class="nav5">
              <a href="busbooking.php" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/ic7.png" alt="" class="img_icon">
                  <div class="txt1">Bus Booking</div>
                </div>
                <div class="back">
                  <img src="images/ic7.png" alt="" class="img_icon">
                  <div class="txt1">Bus Booking</div>
                </div>
              </div>
              </a>
            </li>
            <li class="nav6">
              <a href="ecommerce.php" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/ic8.png" alt="" class="img_icon">
                  <div class="txt1">Shop</div>
                </div>
                <div class="back">
                  <img src="images/ic8.png" alt="" class="img_icon">
                  <div class="txt1">Shop</div>
                </div>
              </div>
              </a>
            </li>
          </ul>
        </nav>
  </div>
<div class="row">

<!--NAVIGATION BAR-->
<?php include_once('include/inc_navigation.php'); ?>
<!--END OF NAVIGATION BAR-->

</div>


<div class="row">
<div id="fh5co-destination">
    <div class="tour-fluid">
      <div class="row">
        <div class="col-md-12">
          <ul id="fh5co-destination-list" class="animate-box">
            <li class="one-forth text-center" style="background-image: url(images/p1.jpg);">
              <a href="#">
                <div class="case-studies-summary" >
                  <h2>Kathmandu</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p2.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Pokhara</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p3.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Lumbini</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p4.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Chitwan</h2>
                </div>
              </a>
            </li>

            <li class="one-forth text-center" style="background-image: url(images/p5.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Ghalegaun</h2>
                </div>
              </a>
            </li>
            <li class="one-half text-center">
              <div class="title-bg">
                <div class="case-studies-summary" style="  padding:1em;">
                  <h2>Most Popular Destinations</h2>
                  <a href="#"><button class="btn btn-outline-light">View All Destinations</button></a>
                </div>
              </div>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p6.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Bandipur</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p7.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>ABC</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p8.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Mustang</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p9.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>PoonHill</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p10.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Langtang</h2>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="row" >
<div id="fh5co-tours col-md-12" class="hotpackage" >
<div class="row">
    <div class="col-md-12  text-center package-heading animate-box">
      <span>Hot Packages</span>

    </div>
  </div>
  <div class="row packagelist" >
    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
      <div href="#"><img src="images/pa1.jpg" class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Mardi Base Camp Trek</span>
          <span>8 Days 7 Nights </span>
          <section class="price badge badge-pill badge-primary" >Rs.10000</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now </a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
      <div href="#"><img src="images/pa2.jpg"  class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Ghandruk Poonhill Trek</span>
          <span>6 Days 5 Nights </span>
            <section class="price badge badge-pill badge-primary" >Rs.9000</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now </a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn" >
      <div href="#"><img src="images/pa3.jpg"  class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Rafting at Bhote Koshi River</span>
          <span>1 Day</span>
            <section class="price badge badge-pill badge-primary" >Rs.2500</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
      <div href="#"><img src="images/pa4.jpg"  class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Wild Adventure in Bardiya National</span>
          <span>4 Days 3 Nights</span>
            <section class="price badge badge-pill badge-primary" >Rs.8000</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now </a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
      <div href="#"><img src="images/pa5.jpg"  class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Pokhara Tour Economy </span>
          <span>3 Days 2 Nights</span>
            <section class="price badge badge-pill badge-primary" >Rs.5000</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now </a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
      <div href="#"><img src="images/pa6.jpg"  class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Chitwan Tour Economy</span>
          <span>3 Days 3 Nights</span>
          <section class="price badge badge-pill badge-primary" >Rs.5000</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
      <div href="#"><img src="images/pa7.jpg"  class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Upper Mustang Trek</span>
          <span>5 Days 4 Nights </span>
            <section class="price badge badge-pill badge-primary" >Rs.11000</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now </a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
      <div href="#"><img src="images/pa8.jpg"  class="img-responsive">
        <div class="desc">
          <span></span>
          <span class="package-title">Chandragiri</span>
          <span>1 Day</span>
            <section class="price badge badge-pill badge-primary" >Rs.1500</section><br>
          <a class="btn btn-default btn-outline" href="#">Book Now </a>
        </div>
      </div>
    </div>
    <div class="col-md-12 text-center animate-box">
      <p><a class="btn btn-lg btn-outline-primary" href="#">See All Offers </a></p>
    </div>
  </div>
</div>
</div>
