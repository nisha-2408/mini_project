<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedWay-Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="product.css">
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
              <a href="profile.html"><i class="fas fa-address-card"></i>PROFILE</a>
              <a href="login.html"><i class="fas fa-users"></i>LOGIN/SIGN UP</a>
              <a href="cart.html"><i class="fas fa-cart-plus"></i>CART</a>
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
            <p class="covid">OFFERS</p>
            <h1>HealthCare Products </h1>
            <div class="klc">
              <h4>FLAT 25% OFF </h4>
            </div>
            <div class="bn"><a href="#">BUY NOW!</a></div>
          </div>
        </div>
        <div class="col dis"><img src="./images/slider-hero-img.png" class="zoom"></div>
      </div>
    </div>





    <section class="product">
      <h2 class="product-category">Most commonly sold </h2>
      <div class="product-container">
        <div class="card">
           <center><img src="./images/cetrizine.jpg" alt="Medicines" style="width:70%; height: auto;"></center>
             <h1>Cetrizine</h1>
              <p class="price">₹22.22</p>
            <div style="padding: 3%;"><label for="cetrizine">Quantity:  </label>
            <input type="number" name="cetrizine" id="cet" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/dolo.png" alt="Medicines" style="width:70%; height: auto;"></center>
             <h1>Dolo 650</h1>
              <p class="price">₹24.73</p>
            <div style="padding: 3%;"><label for="dolo">Quantity:  </label>
            <input type="number" name="dolo" id="dolo" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/zincovita.webp" alt="Medicines" style="width:70%; height: auto; margin-top: 13%; margin-bottom: 13%;"></center>
             <h1>Zincovita Tablets</h1>
              <p class="price">₹85.05</p>
              <div style="padding: 3%;"><label for="zincovita">Quantity:  </label>
              <input type="number" name="zincovita" id="zinc" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/cofsils.webp" alt="Medicines" style="width:70%; height: auto; margin-top: 11%; margin-bottom: 11%;"></center>
             <h1>Cofsils</h1>
              <p class="price">₹22.5</p>
              <div style="padding: 3%;"><label for="cofsil">Quantity:  </label>
              <input type="number" name="cofsil" id="cof" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>


      </div>
      <h2 class="product-category">On Sale </h2>
      <div class="product-container">
        <div class="card">
           <center><img src="./images/evion.webp" alt="Medicines" style="width:70%; height: auto; margin-top: 11%; margin-bottom: 11%;"></center>
             <h1>Evion 400mg capsule</h1>
              <p class="price">₹28.78</p>
              <div style="padding: 3%;"><label for="evion">Quantity:  </label>
              <input type="number" name="evion" id="evi" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/calcimax.webp" alt="Medicines" style="width:42%; height: auto; margin-top: 10%; margin-bottom: 10%;"></center>
             <h1>Calcimax Total Tablet</h1>
              <p class="price">₹246</p>
              <div style="padding: 3%;"><label for="calci">Quantity:  </label>
              <input type="number" name="calci" id="cal" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/Follihair.webp" alt="Medicines" style="width:42%; height: auto; margin-top: 8%; margin-bottom: 8%;"></center>
             <h1>Follihair Tablet</h1>
              <p class="price">₹489.6</p>
              <div style="padding: 3%;"><label for="follihair">Quantity:  </label>
              <input type="number" name="follihair" id="fol" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>

          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/revital.webp" alt="Medicines" style="width:35%; height: auto;  margin-top: 2%; margin-bottom: 2%;"></center>
             <h1>Revital H Women Tablet</h1>
              <p class="price">₹286</p>
              <div style="padding: 3%;"><label for="revital">Quantity:  </label>
              <input type="number" name="revital" id="rev" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>



      </div>
            <div class="product-container">
        <div class="card">
           <center><img src="./images/evion.webp" alt="Medicines" style="width:70%; height: auto; margin-top: 11%; margin-bottom: 11%;"></center>
             <h1>Evion 400mg capsule</h1>
              <p class="price">₹28.78</p>
              <div style="padding: 3%;"><label for="evion">Quantity:  </label>
              <input type="number" name="evion" id="evi" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/calcimax.webp" alt="Medicines" style="width:42%; height: auto; margin-top: 10%; margin-bottom: 10%;"></center>
             <h1>Calcimax Total Tablet</h1>
              <p class="price">₹246</p>
              <div style="padding: 3%;"><label for="calci">Quantity:  </label>
              <input type="number" name="calci" id="cal" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/Follihair.webp" alt="Medicines" style="width:42%; height: auto; margin-top: 8%; margin-bottom: 8%;"></center>
             <h1>Follihair Tablet</h1>
              <p class="price">₹489.6</p>
              <div style="padding: 3%;"><label for="follihair">Quantity:  </label>
              <input type="number" name="follihair" id="fol" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>

          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
           <center><img src="./images/revital.webp" alt="Medicines" style="width:35%; height: auto;  margin-top: 2%; margin-bottom: 2%;"></center>
             <h1>Revital H Women Tablet</h1>
              <p class="price">₹286</p>
              <div style="padding: 3%;"><label for="revital">Quantity:  </label>
              <input type="number" name="revital" id="rev" min="0" max="5" step="1" value="1" style="padding: 3%;"></div>
          <p><button>Add to Cart</button></p>
        </div>



      </div>




    </section>
</div>
</body>
</html>