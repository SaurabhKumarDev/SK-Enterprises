<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Payment</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="CSS/Style.css">
  	<script type="text/javascript" src="js/javascript.js"></script>  
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header class="header">
	<a href="Home.php" class="logo"><img src="images/black-logo.png" alt="Company LOGO" ></a>
		<input type="checkbox" name="" id="">
		<div class="navbar-menu">
		    <a href="Home.php">HOME</a>
            <div class="dropdownproduct">
                <a class="dropdownproductbutton">PRODUCT</a>
                <div class="dropdown-productcontent">
                  	<a href="luggage.php">LUGGAGE</a>
                  	<a href="bag.php">SCHOOL BAG</a>
                  	<a href="belt.php">BELT</a>
                  	<a href="purse.php">PURSE</a>
                </div>
            </div>
            <a href="about.php">ABOUTUS</a>
			<a href="warranty.php">WARRANTY</a>
		  	<a href="contact.php">CONTACTUS</a>
		  	<a href="Products/Addtocartandbuy.php" id="for-right-side"><i class="fa fa-shopping-cart" title="Cart"></i></a>
			<a href="logout.php" style='padding:0; background:transparent;' id="logout">
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
			<a href="Products/Addtocartandbuy.php" class="for-right-side"><i class="fa fa-shopping-cart" ></i></a>
		</span> 
		<span class="menu-icon">&#9776;</span>
        <span class="close-icon">&#x2716;</span>
	</header>

    <!-- Payment option -->
    <section id="order-form" class="bg-light">
        <div class="prow">        
            <h3 class="text-center">Fill your Details</h3>
            <div class="card">
                <div class="card-header">                            
                    <h4>Fill all Information <sup> *</sup></h4>
                </div>
                <div class="card-form">
                <form id="order-form" action="PaymentPHP.php" method="POST">
                    <div class="form-group">
                        <label for="full-name"><p>Full Name</p></label>
                        <input id="full-name" name="Full-name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><p>Email</p></label>
                        <input id="email" name="email" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="tel"><p>Phone no.</p></label>
                        <input id="tel" name="phone" type="number" required>
                    </div>
                    <div class="form-group">
                        <label for="address"><p>Adress</p> </label>
                        <input id="address" name="address" type="text" required>
                    </div>
                    <button class="btn2">Pay now</button>
                </form>
            </div>
            </div>      
        </div>
    </section>

    <!-- Offer's and latest update -->
	<div class="emailbox">
		<h2>Sign up for Email and get access to exclusive offers & the latest updates!</h2>
		<form action="email.php" method="POST">
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
  	 				<li><a href="Home.php">Home</a></li>
  	 				<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="socialcompliance.php">Social Compliance</a></li>
					<li><a href="warranty.php">Warranty</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" id="footer-col">
  	 			<h4>Product</h4>
  	 			<ul>
  	 				<li><a href="luggage.php">Luggage</a></li>
  	 				<li><a href="bag.php">School Bag</a></li>
  	 				<li><a href="belt.php">Belt</a></li>
  	 				<li><a href="purse.php">Purse</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col" >
  	 			<h4>Get Help</h4>
  	 			<ul>	
  	 				<li><a href="trackyourorder.php">Track your order</a></li>
					<li><a href="care.php">Product Care & Cleaning</a></li>
					<li><a href="complaint.php">Compliance Information</a></li>
					<li><a href="service.php">Service & Repair</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Policies</h4>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="returnpolicy.php">Return policy</a></li>
					<li><a href="accessibility.php">Accessibility Statement</a></li>
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