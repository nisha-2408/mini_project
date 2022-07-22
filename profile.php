<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedWay-Profile</title>
  <link rel="icon" type="image/x-icon" href="./images/MedWay-logos_black.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="cart.css">
  <link rel="stylesheet" href="login.html">
  <link rel="stylesheet" href="profile.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/4a6a8e48e5.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
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
              <a href="home.html"><i class="fas fa-home"></i>HOME</a>
              <a href="login.html"><i class="fas fa-users"></i>LOGIN/SIGN UP</a>
              <a href="cart-alt.html"><i class="fas fa-cart-plus"></i>CART</a>
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
    <div class="row padd" id="row">
      <div class="col-4" style=" padding-right:3%; border-right: 1px solid grey;">
        <a href="login.html">
          <div class="row">
            <div class="col-2 image">
              <img src="./images/outline_account_circle_black_24dp.png">
            </div>
            <div class="col-10" style="padding: 3%;">
              <h5 style="float: left;">Log In/Sign Up <i class="fas fa-angle-right"></i></h5>
            </div>
          </div>
        </a>
        <div onclick="order()">
          <h5 class="icon"><i class="fab fa-opencart"></i> My Orders <i class="fas fa-angle-right"></i></h5>
        </div>
        <div onclick="order1()">
          <h5 class="icon"><i class="fas fa-credit-card"></i> Saved Cards <i class="fas fa-angle-right"></i></h5>
        </div>
        <div onclick="order2()">
          <h5 class="icon"><i class="fas fa-heart"></i> My Wishlist <i class="fas fa-angle-right"></i></h5>
        </div>
        <div onclick="order3()">
          <h5 class="icon"><i class="fas fa-bell"></i> My Notifications <i class="fas fa-angle-right"></i></h5>
        </div>
      </div>
      <div class="col-1"></div>
      <div class="col-7 pers" id="order" style="display: none;">
        <div class="color">
          <center><img src="./images/empty_cart.png" style="width: 70%; height: 80%;"></center>
        </div>
      </div>
      <div class="col-7 pers" id="notify" style="display: none;">
        <div class="color">
          <center><img src="./images/undraw_Credit_card_re_blml.png" style="width: 60%; height: 70%;"></center>
          <div>
            <center>
              <div class="card-button" onclick="order4()">
                <h3>Add new Card</h3>
              </div>
            </center>
          </div>
        </div>
      </div>
      <div class="col-7 pers" id="wish" style="display: none;">
        <div class="color">
          <center><img src="./images/undraw_Wishlist_re_m7tv.png" style="width: 70%; height: 80%;"></center>
        </div>
      </div>
      <div class="col-7 pers" id="card" style="display: none;">
        <div class="color">
          <center><img src="./images/undraw_Fresh_notification_re_whq4.png" style="width: 60%; height: 70%;"></center>
        </div>
      </div>
      <div class="col-7 form-pad color" style="display:none;">
        <div class="row">
          <div class="col-4">
            <center><img src="./images/proud-credit-card-character-cartoon-260nw-688501501-removebg-preview.png">
            </center>
          </div>
          <div class="col-8">
            <form id="cardo">
              <label for="cardno">
                <h5>Card Number</h5>
              </label><br>
              <input type="text" id="cardno" name="cardno"><br>
              <div class="row">
                <div class="col-4">
                  <label for="name">
                    <h5>Cardholder Name</h5>
                  </label><br>
                  <input type="text" id="name" name="name"><br>
                </div>
                <div class="col-8">
                  <label for="date">
                    <h5>Valid Through</h5>
                  </label><br>
                  <input type="month" name="date" id="date" max="2030-03" placeholder="YYYY-MM"><br>
                </div>
              </div>
              <label for="cvv">
                <h5>Enter CVV</h5>
              </label><br>
              <input type="text" id="cvv" name="cvv"><br>
              <div class="pad-button"><button class="submit-button">
                  <h5>Add Card</h5>
                </button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row padd" id="xo">
      <div class="col " id="nisha">
        <a href="login.html">
          <div class="row">
            <div class="col-2 image">
              <img src="./images/outline_account_circle_black_24dp.png">
            </div>
            <div class="col-10" style="padding: 3%;">
              <h5 style="float: left;">Log In/Sign Up <i class="fas fa-angle-right"></i></h5>
            </div>
          </div>
        </a>
        <div onclick="order()">
          <h5 class="icon"><i class="fab fa-opencart"></i> My Orders <i class="fas fa-angle-right"></i></h5>
        </div>
        <div onclick="order1()">
          <h5 class="icon"><i class="fas fa-credit-card"></i> Saved Cards <i class="fas fa-angle-right"></i></h5>
        </div>
        <div onclick="order2()">
          <h5 class="icon"><i class="fas fa-heart"></i> My Wishlist <i class="fas fa-angle-right"></i></h5>
        </div>
        <div onclick="order3()">
          <h5 class="icon"><i class="fas fa-bell"></i> My Notifications <i class="fas fa-angle-right"></i></h5>
        </div>
      </div>
      <div class="col color" style="display: none;">
        <center><img src="./images/empty_cart.png" style="width: 50%; height: 65%;"></center>
      </div>
    </div>
    <div style="padding: 3%;">
      <div style=" padding: 2%; border-top: 1px solid rgba(172, 168, 168, 0.719);">
        <h6 style="color:rgba(172, 168, 168, 0.719);">Copyright 2021.Nisha . All rights reserved.</h6>
      </div>
    </div>
  </div>
  <script>
    var x = document.querySelector('.padd');
    var y = x.querySelectorAll(".col-7");
    var z = document.getElementById("nisha");
    function order() {
      y[0].style.display = "block";
      y[1].style.display = "none";
      y[2].style.display = "none";
      y[3].style.display = "none";
      y[4].style.display = "none";
    }
    function order1() {
      y[1].style.display = "block";
      y[0].style.display = "none";
      y[2].style.display = "none";
      y[3].style.display = "none";
      y[4].style.display = "none";
    }
    function order2() {
      y[2].style.display = "block";
      y[1].style.display = "none";
      y[0].style.display = "none";
      y[3].style.display = "none";
      y[4].style.display = "none";
    }
    function order3() {
      y[3].style.display = "block";
      y[1].style.display = "none";
      y[2].style.display = "none";
      y[0].style.display = "none";
      y[4].style.display = "none";
    }
    function order4() {
      y[3].style.display = "none";
      y[1].style.display = "none";
      y[2].style.display = "none";
      y[0].style.display = "none";
      y[4].style.display = "block";
    }
  </script>
  <script type="text/javascript" src="home.js"></script>
</body>

</html>