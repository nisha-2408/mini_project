<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedWay-Home</title>
  <link rel="icon" type="image/x-icon" href="./images/MedWay-logos_black.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/4a6a8e48e5.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="home.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>

<body>
  <div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Select Pincode</a>
      <a href="login.html">Login/Sign Up</a>
      <a href="cart.html">Cart</a>
    </div>
    <div class="topbar" id="lkg">
      <div class="row">
        <div class="col-2">
          <center><img src="./images/MedWay-logos_white.png" class="logo" alt="logo"></center>
        </div>
        <div class="col-7">
          <button class="button">Select Pincode <i class="fas fa-caret-down"></i></button>
          <form class="exampl">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div class="col-3">
          <span class="login">
            <div class="sd">
              <a href="profile.php"><i class="fas fa-address-card"></i>PROFILE</a>
              <a href="login.php"><i class="fas fa-users"></i>LOGIN/SIGN UP</a>
              <a href="cart-alt.php"><i class="fas fa-cart-plus"></i>CART</a>
            </div>
          </span>
        </div>
      </div>
    </div>
    <div class="topbar nkn">
      <div>
        <center><img src="./images/MedWay-logos_white.png" class="logo" alt="logo" style="float: left;"></center>
        <i class="fas fa-bars menu" style="float: right;" onclick="openNav()"></i>
      </div>
      <div>
        <form class="exampl">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <div class="loj">
      <a href="#"><img src="./images/corona.jpg" style="width: 100%; height: auto;"></a>
    </div>
    <div class="content">
      <div class="row" id="cont">
        <div class="col">
          <div class="margin">
            <p class="covid">COVID-19 PRODUCTS</p>
            <h1>FACE MASK THERMOMETERS</h1>
            <div class="klc">
              <h4>"Life isn't about waiting for the storm to pass, it's about learning how to dance in rain"</h4>
            </div>
            <div class="bn"><a href="http://localhost/mini_project/devices.php" target="_blank">BUY NOW!</a></div>
          </div>
        </div>
        <div class="col dis"><img src="./images/slider-hero-img.png" class="zoom"></div>
      </div>
    </div>
    <div class="row margin1 ">
      <div class="col pad">
        <div class="x">
          <h4 style="float: left; padding: 3%;">Order Medicines</h4>
          <img src="./images/medicine.png" style="float: right;">
        </div>
        <div style="padding: 7%;">
          <div class="btn1 y">
            <a href="products.php
          "><h6>Order Now</h6></a>
          </div>
        </div>
      </div>
      <div class="col pad">
        <div class="x1">
          <h4 style="float: left; padding: 2%;">HealthCare Products</h4>
          <img src="./images/healthcare.png" style="float: right;">
        </div>
        <div style="padding: 7%;">
          <div class="btn1 y1">
          <a href="http://localhost:5000/"><h6>Check Now</h6></a>
          </div>
        </div>
      </div>
      <div class="col pad">
        <div class="x2">
          <h4 style="float: left; padding: 3%;">What you take?</h4>
          <img src="./images/symptom.png" style="float: right;">
        </div>
        <div style="padding: 7%;">
          <div class="btn1 y2">
            <a href="details-alt.php
          "><h6>Check Now</h6></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin: 10px;">
      <div class="col-3 i"><img src="./images/safe.png"></div>
      <div class="col-8">
        <div class="row">
          <div class="col i"><img src="./images/safe1.png"></div>
          <div class="col i"><img src="./images/safe2.png"></div>
          <div class="col i"><img src="./images/safe3.png"></div>
          <div class="col i"><img src="./images/safe4.png"></div>
          <div class="col i"><img src="./images/safe5.png"></div>
        </div>
      </div>
    </div>
    <div class="mid">
      <h2>FEATURED BRANDS</h2>
    </div>
    <div class="row" style="margin: 10px;">
      <div class="col h">
        <img src="./images/sensodyne.jpg" style="width: 100%;">
      </div>
      <div class="col h">
        <img src="./images/vaseline.jpg" style="width: 100%;">
      </div>
      <div class="col h">
        <img src="./images/cetaphil.jpg" style="width: 100%;">
      </div>
      <div class="col h">
        <img src="./images/Accuchek.jpg" style="width: 100%;">
      </div>
      <div class="col h">
        <img src="./images/Dabur.jpg" style="width: 100%;">
      </div>
      <div class="col h">
        <img src="./images/Volini.png" style="width: 100%;">
      </div>
      <div class="col h" id="ui">
        <img src="./images/Liveasy.jpg" style="width: 100%;">
      </div>
      <div class="col h" id="ul">
        <a href="devices2.php
      "><img src="./images/Nivea.jpg" style="width: 100%;"></a>
      </div>
    </div>
    <div>
      <img src="./images/banner.webp" style="width: 100%; height: auto; margin: 5px; padding: 5px;">
    </div>
    <div class="mid" id="li">
      <h3>Top Categories</h3>
    </div>
    <div class="row" style="margin: 10px; padding: 5px;" id="li1">
      <div class="col h1">
        <a href="devices.php
      "><img src="./images/devices.jpg"></a>
      </div>
      <div class="col h1">
        <img src="./images/Ayurvedic.jpg">
      </div>
      <div class="col h1">
        <img src="./images/Nutrition.jpg">
      </div>
      <div class="col h1">
        <img src="./images/baby.jpg">
      </div>
    </div>
    <div class="mid">
      <h3>Top Articles</h3>
    </div>
    <div class="swiper mySwiper" id="ok">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="k">
            <a href="https://pharmeasy.in/blog/home-remedies-for-tonsillitis/" target="_blank"><img src="./images/mask lady.jpg" style="width: 100%; height: auto; border-radius:5%;">
            <div class="cont">
              <h4>Omicron Cases Outbreak-Total Case,Latest Updates</h4>
              <p>Around the world, more people continue to get vaccinated and 
                settle down into a life of normalcy which is helping us to slowly 
                move beyond the pandemic. The discovery of a new variant has raised 
                many new questions. We're talking, of course, about Omicron.
              </p>
            </div></a>
          </div>
        </div>
        <div class="swiper-slide">
          <div>
            <img src="./images/vaccine.jpg" style="width: 100%; height: auto; border-radius:5%;">
            <div class="cont">
              <h4>Covaxin Vs Covishield</h4>
              <p>Currently, the government hasn't allowed people to decide which vaccine they want to get, 
                but the result of the first phase clearly suggests that both the vaccines being inoculated 
                in India are safe and effective. As of now, 41.2 crore doses have been administered. 8.55 
                crore people of 6.3% of the total population are fully vaccinated.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div>
            <img src="./images/heart1.jpg" style="width: 100%; height: auto; border-radius:5%;">
            <div class="cont">
              <h4>Why Do More People Get Heart Attacks In Winter?</h4>
              <p>Why more heart attacks in winter? What could be causing this phenomenon and is there
                 any way you can lower your risk? The great thing is that since its discovery, many doctors 
                 and cardiology experts have put forth the potential causes for this rise. Let's understand the issue
                  and later look at what you can do to stay away from this health issue
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
      <div class="swiper-button-next so"></div>
      <div class="swiper-button-prev so"></div>
    </div>
    <div class="row" id="so">
      <div class="col-3" style="padding: 5%;">
        <img src="./images/ppls.svg" style="width: 100%; height: auto;">
        <div>
          <h2>25*10</h2>
          <h4>Registered Users as of December 2021</h4>
        </div>
      </div>
      <div class="col-3" style="padding: 5%;">
        <img src="./images/scooter.svg" style="width: 100%; height: auto;">
        <div>
          <h2>Just 10</h2>
          <h4>MedWay orders as of 2021</h4>
        </div>
      </div>
      <div class="col-3" style="padding: 5%;">
        <img src="./images/tablets.svg" style="width: 100%; height: auto;">
        <div>
          <h2>100+</h2>
          <h4>SKUs sold in 2021</h4>
        </div>
      </div>
      <div class="col-3" style="padding: 5%;">
        <img src="./images/location.svg" style="width: 100%; height: auto;">
        <div>
          <h2>18+</h2>
          <h4>PinCodes Serviced for the month of December 2021</h4>
        </div>
      </div>
    </div>
    <div>
      <center>
        <h1>What our clients say about us?</h1>
        <h5>Sed ut perspiciatis unde omnis iste natus error</h5>
      </center>
    </div>
    <div class="row" id="il" style="padding: 3%;">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="row">
          <div class="col-6" style="border: 1px solid black; padding:2%;">
            <div>
              <img src="./images/test image.webp">
              <span style="float:right;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </span>
            </div>
            <div class="cont1" style="padding: 5%;">
              <h4>have to write something...have no idea what to write....just filling
                the gaps...if u are good at writing and lying ...please write these reviews for us
              </h4>
            </div>
          </div>
          <div class="col-6" style="border: 1px solid black; padding:2%">
            <div>
              <img src="./images/test image.webp">
              <span style="float:right;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </span>
            </div>
            <div class="cont1" style="padding: 5%;">
              <h4>have to write something...have no idea what to write....just filling
                the gaps...if u are good at writing and lying ...please write these reviews for us
              </h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    <div class="row" style="background-color: rgb(248, 246, 246); padding: 5%;">
      <div class="col" style="margin-right: 2%; background-color: white;">
        <div style="padding: 3%;">
          <centre><i class="fas fa-shipping-fast fa-2x"></i>
            <h2>Free Shipping</h2>
            <p>Sed perspicia unde omnis iste nat error voluptate accus</p>
          </centre>
        </div>
      </div>
      <div class="col" style="margin-left: 2%; margin-right: 2%; background-color: white;">
        <div style="padding: 3%;">
          <centre><i class="fas fa-rupee-sign fa-2x"></i>
            <h2>Money Refund</h2>
            <p>Sed perspicia unde omnis iste nat error voluptate accus</p>
          </centre>
        </div>
      </div>
      <div class="col" style="margin-left: 2%; background-color: white;">
        <div style="padding: 3%;">
          <centre><i class="fas fa-shipping-fast fa-2x"></i>
            <h2>Free Shipping</h2>
            <p>Sed perspicia unde omnis iste nat error voluptate accus</p>
          </centre>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col" style="padding: 5%;">
        <h2>About Company</h2>
        <h6>But must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h6>
        <div>
          <i class="fab fa-facebook fa-2x" style="padding:3%;"></i>
          <i class="fab fa-instagram-square fa-2x" style="padding:3%;"></i>
          <i class="fab fa-twitter fa-2x" style="padding:3%;"></i>
          <i class="fab fa-linkedin fa-2x" style="padding:3%;"></i>
        </div>
      </div>
      <div class="col" style="padding: 5%;">
        <h2>Contact Us</h2>
        <div>
            <h6><i class="fas fa-location-arrow fa-2x"></i>KlbTheme, 789 Main rd,
              Anytown, CA 12345 USA
            </h6>
        </div>
        <div>
            <h6><i class="fas fa-phone fa-2x"></i> + 888 456-7890</h6>
        </div>
        <div>
            <h6><i class="fas fa-envelope-square fa-2x"></i> medway@klbtheme.com</h6>
        </div>
      </div>
    </div>
    <div style="padding: 3%;">
      <div style=" padding: 2%; border-top: 1px solid rgba(172, 168, 168, 0.719);">
        <h6 style="color:rgba(172, 168, 168, 0.719);">Copyright 2021.Nisha . All rights reserved.</h6>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      direction: 'horizontal',
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

  </html>