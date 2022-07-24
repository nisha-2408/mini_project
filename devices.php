<?php include 'config/database.php' ?>

<?php
$sql = 'SELECT * FROM products';
$result = mysqli_query($conn, $sql);
$prod_list = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedWay-Devices</title>
  <link rel="icon" type="image/x-icon" href="./images/MedWay-logos_black.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="devices.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/4a6a8e48e5.js" crossorigin="anonymous"></script>
  <script src="jquery-3.5.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="home.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script>

    function addToCart(id){
      console.log(id);
      var add = new XMLHttpRequest();
      add.onreadystatechange = function() {
        if(this.readyState==4 && this.status==200){
          console.log(this.responseText);
        }
      }
      add.open("POST", "cart1.php?id="+id, true);
      add.send();
    }
  </script>
</head>

<body>
  <div>
    <div class="sidepanel" id="price">
      <div style="padding: 4%;"><a href="javascript:void(0)" class="closebtn" onclick="hide_pr()">
          <div class="top"><i class="far fa-window-close fa-2x"></i>
        </a>
        <h2>Brand</h2>
      </div>
      <div class="list">
        <div><input type="checkbox" id="br1" name="br1">
          <label for="br1">
            <h5>Accu-chek</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br2" name="br2">
          <label for="br2">
            <h5>Accusure</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br3" name="br3">
          <label for="br3">
            <h5>Aiqura</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br4" name="br4">
          <label for="br4">
            <h5>All Care</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br5" name="br5">
          <label for="br5">
            <h5>Apollo Sugar</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br6" name="br6">
          <label for="br6">
            <h5>Beato</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br7" name="br7">
          <label for="br7">
            <h5>Beurer</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br8" name="br8">
          <label for="br8">
            <h5>Bpl</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br9" name="br9">
          <label for="br9">
            <h5>Care Touch</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br10" name="br10">
          <label for="br10">
            <h5>Carent</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br11" name="br11">
          <label for="br11">
            <h5>Choicemmed</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br12" name="br12">
          <label for="br12">
            <h5>Contec</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br13" name="br13">
          <label for="br13">
            <h5>Contour</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br14" name="br14">
          <label for="br14">
            <h5>Control D</h5>
          </label><br>
        </div>
        <div><input type="checkbox" id="br15" name="br15">
          <label for="br15">
            <h5>Coronation</h5>
          </label><br>
        </div>
      </div>
      <div class="flex-container down-side">
        <div class="close">
          <h5>Clear All</h5>
        </div>
        <div class="apply">
          <h5>Apply</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="sidepanel" id="brand">
    <div style="padding: 4%;"><a href="javascript:void(0)" class="closebtn" onclick="hide_br()">
        <div class="top"><i class="far fa-window-close fa-2x"></i>
      </a>
      <h2>Brand</h2>
    </div>
    <div class="list">
      <div><input type="checkbox" id="br1" name="br1">
        <label for="br1">
          <h5>Accu-chek</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br2" name="br2">
        <label for="br2">
          <h5>Accusure</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br3" name="br3">
        <label for="br3">
          <h5>Aiqura</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br4" name="br4">
        <label for="br4">
          <h5>All Care</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br5" name="br5">
        <label for="br5">
          <h5>Apollo Sugar</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br6" name="br6">
        <label for="br6">
          <h5>Beato</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br7" name="br7">
        <label for="br7">
          <h5>Beurer</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br8" name="br8">
        <label for="br8">
          <h5>Bpl</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br9" name="br9">
        <label for="br9">
          <h5>Care Touch</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br10" name="br10">
        <label for="br10">
          <h5>Carent</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br11" name="br11">
        <label for="br11">
          <h5>Choicemmed</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br12" name="br12">
        <label for="br12">
          <h5>Contec</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br13" name="br13">
        <label for="br13">
          <h5>Contour</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br14" name="br14">
        <label for="br14">
          <h5>Control D</h5>
        </label><br>
      </div>
      <div><input type="checkbox" id="br15" name="br15">
        <label for="br15">
          <h5>Coronation</h5>
        </label><br>
      </div>
    </div>
    <div class="flex-container down-side">
      <div class="close">
        <h5>Clear All</h5>
      </div>
      <div class="apply">
        <h5>Apply</h5>
      </div>
    </div>
  </div>
  </div>
  <div class="sidepanel" id="category">
    <div style="padding: 4%;"><a href="javascript:void(0)" class="closebtn" onclick="hide_cat()">
        <div class="top"><i class="far fa-window-close fa-2x"></i>
      </a>
      <h2>Category</h2>
    </div>
    <div class="list">
      <div><input type="radio" id="cat1" name="cat1">
        <label for="cat1">
          <h5>Glucometer</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat2" name="cat2">
        <label for="cat2">
          <h5>Bp Monitors</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat3" name="cat3">
        <label for="cat3">
          <h5>Oximeter</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat4" name="cat4">
        <label for="cat4">
          <h5>Thermometer</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat5" name="cat5">
        <label for="cat5">
          <h5>Covid kits</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat6" name="cat6">
        <label for="cat6">
          <h5>Air Mattress</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat7" name="cat7">
        <label for="cat7">
          <h5>Body Massager</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat8" name="cat8">
        <label for="cat8">
          <h5>Electric Heating Pads</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat9" name="cat9">
        <label for="cat9">
          <h5>Nebulizer</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat10" name="cat10">
        <label for="cat10">
          <h5>Spirometers</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat11" name="cat11">
        <label for="cat11">
          <h5>Stethoscopes</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat12" name="cat12">
        <label for="cat12">
          <h5>Trimmers</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat13" name="cat13">
        <label for="cat13">
          <h5>Vaporizers</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat14" name="cat14">
        <label for="cat14">
          <h5>Weighing Scale</h5>
        </label><br>
      </div>
      <div><input type="radio" id="cat15" name="cat15">
        <label for="cat15">
          <h5>Others</h5>
        </label><br>
      </div>
    </div>
    <div class="flex-container down-side">
      <div class="close">
        <h5>Clear All</h5>
      </div>
      <div class="apply">
        <h5>Apply</h5>
      </div>
    </div>
  </div>
  </div>
  <div id="blur">
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
        <div class="col-6">
          <button class="button">Select Pincode <i class="fas fa-caret-down"></i></button>
          <form class="exampl">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <div class="col-4">
          <span class="login">
            <div class="sd">
              <a href="index.php"><i class="fas fa-home"></i>HOME</a>
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
    <div class="flex-container">
      <div class="filters">
        <h3>Filter</h3>
        <div class="category">
          <h5>Category</h5>
          <div><input class="type" type="checkbox" id="cat1" name="cat1" value="Glucometer" onchange="chec(0)">
            <label for="cat1">
              <h6>Glucometer</h6>
            </label><br>
          </div>
          <div><input class="type" type="checkbox" id="cat2" name="cat2" value="Bp Monitors" onchange="chec(1)">
            <label for="cat1">
              <h6>Bp Monitors</h6>
            </label><br>
          </div>
          <div><input class="type" type="checkbox" id="cat3" name="cat3" value="Oximeter" onchange="chec(2)">
            <label for="cat1">
              <h6>Oximeter</h6>
            </label><br>
          </div>
          <div><input class="type" type="checkbox" id="cat4" name="cat4" value="Thermometer" onchange="chec(3)">
            <label for="cat1">
              <h6>Thermometer</h6>
            </label><br>
          </div>
          <div><input class="type" type="checkbox" id="cat5" name="cat5" value="Covid" onchange="chec(4)">
            <label for="cat1">
              <h6>Covid kits</h6>
            </label><br>
          </div>
          <h5 class="view-more" onclick="show_cat()">View More</h5>
        </div>
        <div class="category">
          <h5>Brand</h5>
          <form method="post" action="devices_handle.php">
            <div><input class="brand" type="checkbox" id="br1" name="formDoor[]" value="Accu-Chek">
              <label for="br1">
                <h6>Accu-chek</h6>
              </label><br>
            </div>
            <div><input class="brand" type="checkbox" id="br2" name="formDoor[]" value="Accusure">
              <label for="br2">
                <h6>Accusure</h6>
              </label><br>
            </div>
            <div><input class="brand" type="checkbox" id="br3" name="formDoor[]" value="Aiqura">
              <label for="br3">
                <h6>Aiqura</h6>
              </label><br>
            </div>
            <div><input class="brand" type="checkbox" id="br4" name="formDoor[]" value="All Care">
              <label for="br4">
                <h6>All Care</h6>
              </label><br>
            </div>
            <div><input class="brand" type="checkbox" id="br5" name="formDoor[]" value="Apollo Sugar">
              <label for="br5">
                <h6>Apollo Sugar</h6>
              </label><br>
            </div>
            <input type="submit" value="Apply filter">
          </form>
          

          <h5 class="view-more" onclick="show_br()">View More</h5>
        </div>
        <div class="category">
          <h5>Price</h5>
          <div><input type="checkbox" id="pr1" name="pr1">
            <label for="pr1">
              <h6>Below 99</h6>
            </label><br>
          </div>
          <div><input type="checkbox" id="pr2" name="pr2">
            <label for="pr2">
              <h6>100-199</h6>
            </label><br>
          </div>
          <div><input type="checkbox" id="pr3" name="pr3">
            <label for="pr3">
              <h6>200-299</h6>
            </label><br>
          </div>
          <div><input type="checkbox" id="pr4" name="pr4">
            <label for="pr4">
              <h6>300-399</h6>
            </label><br>
          </div>
          <div><input type="checkbox" id="pr5" name="pr5">
            <label for="pr5">
              <h6>400-499</h6>
            </label><br>
          </div>
          <h5 class="view-more" onclick="show_pr()">View More</h5>
        </div>
      </div>
      <div class="device-list">
        <div class="row">
          <div class="col-6">
            <h3>HealthCare Devices</h3>
          </div>
          <div class="sort col-6">
            <span>
              <p style="float: left; padding: 3%;">Sort by:</p>
              <div class="drop">
                <div class="drop-down">
                  <h5>Popularity <i class="fas fa-caret-down" style="float: right; padding: 3%;"></i></h5>
                </div>
                <div style="float: left;" class="drop-list ">
                  <h5 class="active">Popularity</h5>
                  <h5>Price: High to Low</h5>
                  <h5>Price: Low to High</h5>
                  <h5>Discount</h5>
                </div>
              </div>
            </span>
          </div>
        </div>
        <div class="row" style="padding: 5%; position: relative; z-index: 0;">
          <?php foreach ($prod_list as $item) : ?>
            
            <div class="col-3 cards card">
              <a href="device_1.html" class="info">
                <div>
                  <center><img src=<?php echo $item['image']; ?> style="height: 90%; width: 70%; padding: 5%;"></center>
                </div>
                <div class="info">
                  <h5>
                    <?php echo $item['product_name']; ?>
                  </h5>
                  <h6>MRP ₹<?php echo $item['price']; ?></h6>
                </div>
              </a>
              <div class="add-cart w3-animate-top">
                <center>
                <h5 onclick="addToCart(<?php echo $item['product_id'] ?>)">Add to Cart</h5>
                </center>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="devices.js"></script>
</body>

</html>