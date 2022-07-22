<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedWay-Delivery</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="login.html">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/4a6a8e48e5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="home.js"></script>
    <script type="text/javascript" src="cart.js"></script>
</head>

<body>
    <div class="id">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Select Pincode</a>
            <a href="home.html">Home</a>
            <a href="login.html">Login/Sign Up</a>
        </div>
        <div class="topbar2" id="lkg">
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
                            <a href="profile.html"><i class="fas fa-address-card"></i>PROFILE</a>
                            <a href="login.html"><i class="fas fa-users"></i>LOGIN/SIGN UP</a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="topbar nkn">
            <div>
                <center><img src="./images/MedWay-logos_white.png" class="logo" alt="logo" style="float: left;">
                </center>
                <i class="fas fa-bars menu" style="float: right;" onclick="openNav()"></i>
            </div>
            <div>
                <form class="exampl">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div id="jig">
            <div class="container1" style="padding: 5%;">
                <form>
                    <h4>Delivery Address:</h4>
                    <label for="name">
                        <h5>Name: </h5>
                    </label><br>
                    <input type="text" id="name" name="name" class="width"><br>
                    <label for="mail">
                        <h5>Email: </h5>
                    </label><br>
                    <input type="email" id="mail" name="mail" class="width"><br>
                    <label for="number">
                        <h5>Phone Number: </h5>
                    </label><br>
                    <input type="text" id="number" name="number" class="width"><br>
                    <label for="address">
                        <h5>Address: </h5>
                    </label><br>
                    <input type="text" id="address" name="address" class="width" style="line-height: 5em;"><br>
                    <label for="landm">
                        <h5>Landmark(Optional): </h5>
                    </label><br>
                    <input type="text" id="landm" name="landm" class="width"><br>
                    <div style="padding:3% 10% 3% 10%;">
                        <button type="submit" class="log1">
                            <h5>Add Address</h5>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div style="padding: 3%;">
            <div style=" padding: 2%; border-top: 1px solid rgba(172, 168, 168, 0.719);">
                <h6 style="color:rgba(43, 41, 41, 0.719);">Copyright 2021.Nisha . All rights reserved.</h6>
            </div>
        </div>
    </div>
</body>

</html>