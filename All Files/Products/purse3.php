<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Men Brown Genuine Leather Wallet</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../CSS/Style.css">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header class="header">
		<a href="../Home.php" class="logo"><img src="../images/black-logo.png" alt="Company LOGO" ></a>
		<input type="checkbox" name="" id="">
		<div class="navbar-menu">
		    <a href="../Home.php">HOME</a>
            <div class="dropdownproduct">
                <a class="dropdownproductbutton">PRODUCT</a>
                <div class="dropdown-productcontent">
                  	<a href="../luggage.php">LUGGAGE</a>
                  	<a href="../bag.php">SCHOOL BAG</a>
                  	<a href="../belt.php">BELT</a>
                  	<a href="../purse.php">PURSE</a>
                </div>
            </div>
            <a href="../about.php">ABOUTUS</a>
			<a href="../warranty.php">WARRANTY</a>
		  	<a href="../contact.php">CONTACTUS</a>
		  	<a href="../Products/Addtocartandbuy.php" id="for-right-side"><i class="fa fa-shopping-cart" title="Cart"></i></a>
			<a href="../logout.php" style='padding:0; background:transparent;' id="logout">
				<div class="hlogout"><i class="fa fa-sign-out" title="Log out"></i></div>
				<div class="ulogout">Log out</div> 
			</a>
			<div class="navbar-icon">
				<div class="icon-of-navbar">
					<i class="fa fa-bars"></i>
				</div>
			</div>
		</div> 
		<span class="for-right-side">
			<a href="../Products/Addtocartandbuy.php" class="for-right-side"><i class="fa fa-shopping-cart" ></i></a>
		</span> 
		<span class="menu-icon">&#9776;</span>
        <span class="close-icon">&#x2716;</span>
	</header>

    <!-- Purse 3 -->
    <form  action="cart_manage.php" method="POST" class="product-detail">
        <div class="row1">
            <div class="col1">
                <img src="../images/purse1.jpeg"  id="product-img" alt="Product image">
                <div class="small-product-img">
                    <div class="small-col-img">
                        <img src="../images/purse1.jpeg" alt="product-img" class="small-col">
                    </div>
                    <div class="small-col-img">
                        <img src="../images/purse1(b).jpeg" alt="product-img" class="small-col">
                    </div>
                    <div class="small-col-img">
                        <img src="../images/purse1(c).jpeg" alt="Product image" class="small-col">
                    </div>
                </div>
                <div  class="cart-1">
                    <button  name="cart"  >Add to cart</button>
                    <input type="hidden" name="item_name" value="Men Brown Genuine Leather Wallet">
                    <input type="hidden" name="price" value="1166">
                    <a href="../payment.php">Buy now</a>
                </div>
            </div>
            <div class="col1" id="col1">
                <h1>Men Brown Genuine Leather Wallet  (10 Card Slots)</h1>
                <div class="product-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <p>0 ratings</p>
                </div>
                <hr>
                <h3>M.R.P.:&nbsp; <del> &#8377;1,295</del></h3>
                <h2>Deal Price:	&#8377;1,166 <div class="rate"><del>&#8377;1,295</del>&nbsp;9% &nbsp;off</div></h2>
                <h2>Deal Price:	&#8377;1,166</h2>
                <h3>You Save:	&#8377;129 (9%)</h3>
                <p>1 Year Warranty for Luggages <a href="../warranty.php" class="know-more">Know More</a></p>
                <h4>In  Stock.</h4>
                <p>Buy two 2 and get Free Shipping</p>
                <h3 class="heading-detail">Product Detail :-</h3>
                <ul>
                    <li>Size in no. - 4.5inch</li>
                    <li>High quality genuine leather wallet. Made of Top grain Luxury leather that will stand out from all other wallets 
                        on the market. âInside currency compartment is also selected High-quality cowhide leather. If inside part is 
                        made of nylon or synthetic leather, it will ruin your dignity when you open this wallet. We used selected high 
                        quality cowhide leather for inside part. âFeel safe from RFID thieves all the time anywhere in the world and 
                        stop stress about electronic pick pocketing. âSleek standard size that will fit any jeans & suits pocket. 
                        a Good space for your cards, money, bills, driver license, photos and much more.
                    </li>
                    <li>Number of card slot - 4</li>
                </ul>
            </div>
        </div>
    </form>

    <!-- javascript -->
    <script>
        var fullImage = document.getElementById('product-img');
        var smallImage = document.getElementsByClassName('small-col');

        smallImage[0].onclick = function (){
            fullImage.src = smallImage[0].src;
        }
        smallImage[1].onclick = function (){
            fullImage.src = smallImage[1].src;
        }
        smallImage[2].onclick = function (){
            fullImage.src = smallImage[2].src;
        }
    </script>

    <!-- Related Product -->
    <div class="product-detail">
        <div class="row1 row-2">
            <h2>Related Products</h2>
            <a href="../purse.php">view More</p></a> 
        </div>
    </div>
    <div class="product-detail">
        <div class="row1 row-1">
            <div class="col-4">
                <img src="../images/purse1.jpeg" width="150px" alt="trolley">
                <h4>Leather Purse</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;1,166</p>
            </div>
            <div class="col-4">
                <img src="../images/purse2.jpeg" width="150px" alt="sneakers">
                <h4>Blue Clutch</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;389</p>
            </div>
            <div class="col-4">
                <img src="../images/purse3.jpeg" alt="laptop">
                <h4>Casual black Clutch</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;224</p>
            </div>
            <div class="col-4">
                <img src="../images/purse5.jpeg" width="150px" alt="">
                <h4>Men Green Messenger Bag</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>&#8377;2,531</p>
            </div>
        </div>  
    </div>

    <!-- Offer's and latest -->
	<div class="emailbox">
		<h2>Sign up for Email and get access to exclusive offers & the latest updates!</h2>
		<form action="../email.php" method="POST">
			<input type="email" name="email1" placeholder="&#9993 Email" required>
			<button type="submit" ><span id="for-hiding">Submit</span><span class="right-arrow"><i class="arrow right"></i></span> </button>
		</form>
	</div>

	<!-- Footer -->
	<footer class="footer">
  	    <div class="container">
  	 		<div class="footer-col">
  	 			<h4 class="increase-width">Quick Link</h4>
  	 			<ul>
  	 				<li><a href="../Home.php">Home</a></li>
  	 				<li><a href="../about.php">About Us</a></li>
					<li><a href="../contact.php">Contact Us</a></li>
					<li><a href="../socialcompliance.php">Social Compliance</a></li>
					<li><a href="../warranty.php">Warranty</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" id="footer-col">
  	 			<h4>Product</h4>
  	 			<ul>
  	 				<li><a href="../luggage.php">Luggage</a></li>
  	 				<li><a href="../bag.php">School Bag</a></li>
  	 				<li><a href="../belt.php">Belt</a></li>
  	 				<li><a href="../purse.php">Purse</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" >
  	 			<h4>Get Help</h4>
  	 			<ul>	
  	 				<li><a href="../trackyourorder.php">Track your order</a></li>
					<li><a href="../care.php">Product Care & Cleaning</a></li>
					<li><a href="../complaint.php">Compliance Information</a></li>
					<li><a href="../service.php">Service & Repair</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Policies</h4>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="../returnpolicy.php">Return policy</a></li>
					<li><a href="../accessibility.php">Accessibility Statement</a></li>
				</ul>
  	 		</div>
  	 	</div>
  	</footer>
  	<div class="fbinsta">
		<div class="coprght">
			<ul>
				<li>&#169;2020-2021. All rights reserved.</li>
				<li><strong>Design by</strong> <i>Saurabh Kumar</i></li>
			</ul>
			<div class="returntohome">
				<a href="#">&#8593;</a> 
			</div>	
		</div>
	    <div class="sfbinsta">
	        <a href="https://m.facebook.com/login.php" class="fa fa-facebook"></a>
	        <a href="https://mobile.twitter.com/login" class="fa fa-twitter"></a>
	        <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
	        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
	        <a href="https://in.linkedin.com/" class="fa fa-linkedin"></a>
	    </div>
 	</div>
</body>
</html>