<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedWay</title>
  <link rel="icon" type="image/x-icon" href="./images/MedWay-logos_black.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Akaya+Telivigala&family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="device_1.css">
  <link rel="stylesheet" href="devices.css">
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
              <a href="home.html"><i class="fas fa-home"></i>HOME</a>
              <a href="profile.html"><i class="fas fa-address-card"></i>PROFILE</a>
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
    <div class="just-pad">
    <div class="product-container">
      <div class="product-image">
        <div><div class="style fad"><center><img src="./images/accu_gluco-removebg-preview.png"></center></div>
        <div class="style fad mid"><center><img src="./images/image (3).jpg"></center></div>
        <div class="style fad mid"><center><img src="./images/image.jpg"></center></div>
        <div class="style fad mid"><center><img src="./images/image (1).jpg"></center></div>
        <div class="style fad mid"><center><img src="./images/image (2).jpg"></center></div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a></div><br>
        <div style="text-align: center;" id="mid">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      </div>
      <div class="product-info">
        <h2>Accu-Chek Active Glucometer Test Strips Box Of 50</h2>
        <p>Accu-Chek Active blood glucose test strips can help you with your blood sugar monitoring.</p>
        <h6>₹799.50</h6><br>
        <div class="flex-containers">
          <div class="detail detail-active" id="detail" onclick="show_content(0)">
            <h5>Details</h5>
          </div>
          <div class="detail" id="ing" onclick="show_content(1)">
            <h5>Features</h5>
          </div>
          <div class="detail" id="dir" onclick="show_content(2)">
            <h5>Directions</h5>
          </div>
          <div class="detail" id="stg" onclick="show_content(3)">
            <h5>Strorage</h5>
          </div>
        </div>
        <div class="detail-info swing-in-top-bck" id="key">
          <h5>Key Highlights</h5>
          <ul>
            <li><strong>Accu-Check Active blood glucose test strips </strong>can help you with your blood sugar monitoring.</li>
            <li>These strips can be of help to Type 1 Diabetes as well as Type 2 Diabetes patients.</li>
          </ul>
        </div>
        <div class="detail-info style swing-in-top-bck" id="spec">
          <h5>Product Specifications and Features</h5>
          <ul>
            <li>There are 50 strips in every box.</li>
            <li>Each must be used once and then disposed of.</li>
            <li>The results are displayed in about 5 seconds.</li>
            <li>Only one droplet of blood is required.</li>
          </ul>
        </div>
        <div class="detail-info style swing-in-top-bck" id="use">
          <h5>How to Use</h5>
          <ul>
            <li>First, take one test strip and insert it into the Glucometer.</li>
            <li>Gently prick the tip of your finger with the <strong>Accu-Check lancets.</strong></li>
            <li>Collect the blood sample on the test strip.</li>
          </ul>
        </div>
        <div class="detail-info style swing-in-top-bck" id="stor">
          <h5>Storage Information</h5>
          <ul>
            <li>Store the box away from direct sunlight in a cool and dry place(4-30 degree celsius).</li>
            <li>Close the box properly after taking a strip out.</li>
            <li>Keep it out of the reach of the children.</li>
          </ul>
        </div>
      </div>
      <div class="product-rate">
        <div class="box">
          <a href="cart-alt.html"><div>
            <center><i class="far fa-plus-square fa-2x"></i></center>
            <center><h6>Purchase</h6></center>
          </div></a>
        </div>
        <div class="box">
          <a href="#faq"><div>
            <center><i class="fas fa-question fa-2x"></i></center>
            <center><h6>FAQ</h6></center>
          </div></a>
        </div>        
        <div class="box">
          <a href="#rate"><div>
            <center><h6>User Satisfaction</h6></center>
            <center><div class="circular-progress">
              <div class="value-container">0%</div>
            </div></center>
          </div></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 faq-bg" id="faq"><h4>FAQ</h4>
    <div class="blur-bg"><div class="faq">
      <div class="q" onclick="collapse(0)"><h5>Q1:  Will I have to discard the Accu-Chek Active Strip after use? <i class="fas fa-angle-down" style="float: right;"></i></h5></div>
      <div class="answer">
      <h5>Ans: Yes, you must use a fresh new test strip every time for accurate results.</h5>
    </div>
    </div>
    <div class="faq">
      <div class="q" onclick="collapse(1)"><h5>Q2: Will I be able to delete the stored results?<i class="fas fa-angle-down" style="float: right;"></i></h5></div>
      <div class="answer">
      <h5>Ans: No, it is not possible to delete the stored results.</h5>
    </div>
    </div>
    <div class="faq">
      <div class="q" onclick="collapse(2)"><h5>Q3: How long does the Accu-Chek battery last when paired with a smartphone?<i class="fas fa-angle-down" style="float: right;"></i></h5></div>
      <div class="answer">
      <h5>Ans: It depends on the connectivity of the meter enabled. The battery usually lasts for 750 tests. Normal testing without connectivity should produce approximately 1,000 test results.</h5>
    </div>
    </div>
    <div class="faq">
      <div class="q" onclick="collapse(3)"><h5>Q4: What is the Last Result feature?<i class="fas fa-angle-down" style="float: right;"></i></h5></div>
      <div class="answer">
      <h5>Ans: The Last Result feature allows you to check both your current BG result along with the time and date of the most recent BG result (within 24 hours).</h5>
    </div>
    </div>
    <div class="faq">
      <div class="q" onclick="collapse(4)"><h5>Q5: What is a normal glucometer reading?<i class="fas fa-angle-down" style="float: right;"></i></h5></div>
      <div class="answer">
      <h5>Ans: The American Diabetes Association says that blood glucose levels in diabetic patients should be between 80-130 mg/dL (fasting) or lower than 180 mg/dL (post-prandial).</h5>
    </div>
    </div>
    <div class="faq">
      <div class="q" onclick="collapse(5)"><h5>Q6: How do blood glucose monitors work?<i class="fas fa-angle-down" style="float: right;"></i></h5></div>
      <div class="answer">
      <h5>Ans: The lance is used to prick the skin at the tip of the forefinger. The droplet is then collected on the test strip which quickly absorbs the blood. The reflective photometry method then analyses the sample and reveals the level of glucose in your blood.
      </h5>
    </div>
    </div>
    <div class="faq">
      <div class="q" onclick="collapse(6)"><h5>Q7: How often should you test your blood glucose with a glucometer?<i class="fas fa-angle-down" style="float: right;"></i></h5></div>
      <div class="answer">
      <h5>Ans: This depends on how high your blood sugar is and the type of diabetes you have been diagnosed with. Speak with your doctor to find out how many times you should test yourself.</h5>
    </div>
    </div>
  </div>
    </div>
    <div class="col-5 just-border">
      <div class="detailed"><h4>Product Details</h4>
        <div class="no-use">
          <h5>Brand: <a href="#" >ACCU-CHECK INSTANT</a></h5>
          <h5>Expires on or After: 20/05/2022</h5>
          <h5>Country of Origin: India, Germany</h5>
          <h5>Warranty: 1 Year from date of purchase</h5>
          <h5><a href="#">Manufacturer Details</a></h5>
        </div></div>
        <div class="disclaimer">
          <p>Disclaimer</p><br>
          <p>If the seal of the product is broken it will be non-returnable.</p>
        </div>
    </div>
    </div>
    <div class="rating" id="rate">
      <h3>Ratings and Reviews</h3>
        <div class="row">
          <div class="col-3 rating-card">
            <center><h5 class="body-copy"><span>4.3/</span>5</h5>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <h5>1271 ratings</h5></center>
          </div>
          <div class="col-7 rating-star">
            <div class="star-container">
              <div class="star-head"><h5>5 stars</h5></div>
              <div class="star-prog" style="background: linear-gradient(to right, #0047b3 64%, #cadcff 36%);"></div>
              <div class="star-head"><h5>64%</h5></div>
            </div>
            <div class="star-container">
              <div class="star-head"><h5>4 stars</h5></div>
              <div class="star-prog" style="background: linear-gradient(to right, #005ce6 21%, #cadcff 21%);"></div>
              <div class="star-head"><h5>21%</h5></div>
            </div>
            <div class="star-container">
              <div class="star-head"><h5>3 stars</h5></div>
              <div class="star-prog" style="background: linear-gradient(to right, #1a75ff 4%, #cadcff 4%);"></div>
              <div class="star-head"><h5>4%</h5></div>
            </div>
            <div class="star-container">
              <div class="star-head"><h5>2 stars</h5></div>
              <div class="star-prog" style="background: linear-gradient(to right, #4d94ff 3%, #cadcff 3%);"></div>
              <div class="star-head"><h5>3%</h5></div>
            </div>
            <div class="star-container">
              <div class="star-head"><h5>1 star</h5></div>
              <div class="star-prog" style="background: linear-gradient(to right, #80b3ff 8%, #cadcff 8%);"></div>
              <div class="star-head"><h5>8%</h5></div>
            </div>
          </div>
        </div>
        <div class="review">
          <h4>Recent Reviews</h4>
          <div class="reviews">
            <h5>Anjali</h5>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <h5>"Wrong product send"</h5>
            <h6>15 months ago</h6>
          </div>
          <div class="reviews">
            <h5>MedWay User</h5>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <h5>"Nice Product"</h5>
            <h6>20 months ago</h6>
          </div>
          <div class="reviews">
            <h5>Gaurav Khattar</h5>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <h5>"During covid time, can u ensure packaging is coronavirus free by sanitizing the package."</h5>
            <h6>21 months ago</h6>
          </div>
          <div class="reviews" style="color: #3CC3E3; border: none;">
            <h5>See other reviews <i class="fas fa-angle-right"></i></h5>
          </div>
        </div>
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
            <h2>Secure Payment</h2>
            <p>100% secure and trusted payment protection</p>
          </centre>
        </div>
      </div>
      <div class="col" style="margin-left: 2%; background-color: white;">
        <div style="padding: 3%;">
          <centre><i class="fas fa-undo fa-2x"></i>
            <h2>Easy Return</h2>
            <p>We have a new and dynamic return window policy for medicines and healthcare items. Refer FAQs section for more details.</p>
          </centre>
        </div>
      </div>
    </div>
    <div style="padding: 3%;">
      <div style=" padding: 2%; border-top: 1px solid rgba(172, 168, 168, 0.719);">
        <h6 style="color:rgba(172, 168, 168, 0.719);">Copyright 2021.Nisha . All rights reserved.</h6>
      </div>
    </div>
    </div>
  </div>
  <script src="device_1.js"></script>
</body>
</html>