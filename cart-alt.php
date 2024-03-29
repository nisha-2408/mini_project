<?php include 'config/database.php';



$sql = 'SELECT * FROM cart';
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$prod_list = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_GET['quantity'])){
  echo 'ntng';
  echo $_GET['quantity'];
}
$sum=0;
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MedWay-Cart</title>
  <link rel="icon" type="image/x-icon" href="./images/MedWay-logos_black.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Mukta&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="cart-alt.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/4a6a8e48e5.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="home.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


  <script>
    function Delete(id){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if(this.readyState==4 &&this.status==200){
          console.log(this.responseText);
        }
      }
      xmlhttp.open("GET", "delete_cart.php?id="+id, true);
      xmlhttp.send();
      console.log("Done");
      location.reload();
      location.reload();
    }


    function total(id, event){
      var qty = event.target.value;
      console.log(qty);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if(this.readyState==4 &&this.status==200){
          console.log(this.responseText);
        }
      }
      xmlhttp.open("GET", "qty.php?id="+id+"&qty="+qty, true);
      xmlhttp.send(null);
      console.log("Done");
      location.reload();
    }

  </script>


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
              <a href="profile.html"><i class="fas fa-address-card"></i>PROFILE</a>
              <a href="login.html"><i class="fas fa-users"></i>LOGIN/SIGN UP</a>
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
    
    <div class="wrap">
    <?php if($rows==0): ?>
      <div>
        <img src="./images/empty-cart.png" style="margin-left: 25%">
      </div>
    
      <?php else: ?>

      <header class="cart-header cf">
        <strong>Items in Your Cart</strong>
        <a href="checkout.html" style="text-decoration: none;"><span class="btn1">Checkout</span></a>
      </header>
      <div class="cart-table">
        <ul>
          <?php
          foreach ($prod_list as $item) : 
          ?>
            <li class="item">
            <div class="item-main cf">
              <div class="item-block ib-info cf">
                <img class="product-img" src=<?php echo $item['imag']; ?> />
                <div class="ib-info-meta">
                  <span class="title"><?php echo $item['nam'] ?></span>
                  <span class="itemno">#3498765</span>
                </div>
              </div>
              <div class="item-block ib-qty">
              <input type="number" id="quantity" name="quantity" min="1" max="5" step="1" value = <?php echo $item['qty'] ;?> onchange="total(<?php echo $item['product_id'] ?>, event)"/>
                
                <span class="price">  ₹<?php echo $item['price'] ?></span>
              </div>
              <div class="item-block ib-total-price">
                <span class="tp-price">₹<?php echo ($item['price']* $item['qty'] ); $sum = $sum+($item['price']*$item['qty']); ?></span>
                <span class="tp-remove" onclick="Delete( <?php echo $item['product_id'] ?> )"><i class="fas fa-trash-alt"></i></span>
              </div>
            </div>
            <div class="item-foot cf">
              <div class="if-left"><span class="if-status">In Stock</span></div>
            </div>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="sub-table cf">
        <div class="summary-block">
          <ul>
            <li class="subtotal"><span class="sb-label">Subtotal</span><span class="sb-value">₹<?php echo $sum ?></span></li>
            <li class="shipping"><span class="sb-label">Shipping</span><span class="sb-value">n/a</span></li>
            <li class="tax"><span class="sb-label">Est. Tax |<i class="i-notch-down"></i></span></span><span
                class="sb-value">₹50.00</span></li>
            <li class="tax-calculate"><input type="text" value="06484" class="tax" /><span class="btn">Calculate</span>
            </li>
            <li class="grand-total"><span class="sb-label">Total</span><span class="sb-value">₹<?php echo $sum+50 ?></span></li>
          </ul>
        </div>
        <div class="copy-block">
          <p>Items will be saved in your cart for 30 days. To save items longer, add them to your <a href="#">Wish
              List</a>.</p>
          <p class="customer-care">
            Call us M-F 8:00 am to 6:00 pm IST<br />
            +91 9481405640 or <a href="#">contact us</a>. <br />
          </p>
        </div>
      </div>

      <div class="cart-footer cf">
        <a href="checkout.html" style="text-decoration: none;"><span class="btn1">Checkout</span></a>
        <span class="cont-shopping"><i class="i-angle-left"></i>Continue Shopping</span>
      </div>
      <?php endif ?>
    </div>
    
  </div>
</body>

</html>