<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedWay-LogIn</title>
  <link rel="icon" type="image/x-icon" href="./images/MedWay-logos_black.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="login.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/4a6a8e48e5.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="home.js"></script>
</head>

<body>
  <div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Select Pincode</a>
      <a href="home.html">Home</a>
      <a href="cart.html">Cart</a>
    </div>
    <div class="topbar1" id="lkg">
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
              <a href="index.php"><i class="fas fa-home"></i>HOME</a>
              <a href="profile.html"><i class="fas fa-address-card"></i>PROFILE</a>
              <a href="cart-alt.html"><i class="fas fa-cart-plus"></i>CART</a>
            </div>
          </span>
        </div>
      </div>
    </div>
    <div class="topbar1 nkn">
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
    <div class="row">
      <div class="col w3-animate-left" id="img1">
        <img src="./images/bg.png">
      </div>
      <div class="col w3-animate-right mar" id="log1">
        <div class="crd">
          <div class="pad2">
            <h2 style="text-align: center;">LOGIN</h2>
          </div>
          <div>
            <form style="padding:0% 10% 0% 10%;" action="home.html">
              <label for="uname">User Name: </label><br>
              <input type="text" id="uname" name="uname" class="form" placeholder="&#xf007; Enter your username"
                style="font-family:Arial, FontAwesome"><br>
              <label for="password">Password: </label><br>
              <input type="password" id="password" name="password" class="form"
                placeholder="&#xf023; Enter your password" style="font-family:Arial, FontAwesome">
              <a href="#" style="margin-right:2%;">
                <p style="text-align: right;">Forgot Password?</p>
              </a>
              <div>
                <button type="submit" class="log">
                  <h5>LOGIN</h5>
                </button>
              </div>
            </form>
            <div style="padding: 1%; text-align: center;">
              <p>Or Login using</p>
              <div style="padding:0% 3% 0% 3%;">
                <i class="fab fa-facebook fa-2x" style="color: 	#4267B2;"></i>
                <i class="fab fa-google-plus fa-2x" style="color:  #DB4437;"></i>
              </div>
            </div>
            <div style="text-align: center;">
              <p>New User?</p>
              <div style="padding:1% 10% 1% 10%;">
                <h5 style="cursor: pointer;" class="log" onclick="sign()">SIGN UP</h5><br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col mar1" id="log2" style="display: none;">
        <div class="crd">
          <div class="pad2">
            <h2 style="text-align: center;">SIGN UP</h2>
          </div>
          <div>
            <form style="padding:0% 10% 0% 10%;" method="post" action="home.html" id="sign">
              
              <label for="uname">User Name: </label><br>
              <input type="text" id="uname" name="uname" class="form" placeholder="&#xf007; Enter your username"
                style="font-family:Arial, FontAwesome" required><br>
                <p>Username must be alphanumeric and contain 5-12 characters</p>
              <label for="mail">Email: </label><br>
              <input type="email" id="mail" name="mail" class="form" placeholder="&#xf023; Enter your email"
                style="font-family:Arial, FontAwesome" required><br>
              <label for="cpassword">Password: </label><br>
              <input type="password" id="password" name="password" class="form"
                placeholder="&#xf023; Confirm your password" style="font-family:Arial, FontAwesome" required><br>
                <p>Must alphanumberic(@,_,- also allowed) and contain 8-20 characters</p>
              <input type="checkbox">
              <p>Remember Me</p>
              <div>
                <button type="submit" class="log">
                  <h5>SIGN UP</h5>
                </button>
              </div>
              <div style="text-align: center;">
                <p>Already Registered?</p>
                <div>
                  <h5 style="cursor: pointer;" class="log" onclick="login()">LOGIN</h5><br>
                </div>
              </div>
          </div>
          </form>

        </div>
      </div>

    </div>
    <div style="padding: 3%;">
      <div style=" padding: 2%; border-top: 1px solid rgba(172, 168, 168, 0.719);">
        <h6 style="color:rgba(172, 168, 168, 0.719);">Copyright 2021.Nisha . All rights reserved.</h6>
      </div>
    </div>
  </div>
  <script src="login.js"></script>
</body>

</html>