<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Breeze - Online Store Theme</title>
  <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
	<script src="<?=Yii::app()->theme->baseUrl;?>/js/jquery.min.js"></script>
	<script src="<?=Yii::app()->theme->baseUrl;?>/js/jflow.plus.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?=Yii::app()->theme->baseUrl;?>/css/main.css" type="text/css" media="screen, projection" />
	<script src="<?=Yii::app()->theme->baseUrl;?>/js/cssrefresh.js"></script>
</head>
<body>

<header>
	<div class="center">
		<p class="phone_i infoSmall">Call Us +777 (100) 1234</p>
		
		<p class="topper">

		Welcome visitor you can 
		<a href="#">login</a> or <a href="#">create an account.</a>
		</p>
		<div class="variant">
			<ul>          
				<li class="active"><a href="#1">EN</a></li>
				<li><a href="#2">FR</a></li>
				<li><a href="#3">GM</a></li>
			</ul>
			<ul class="big">
				<li class="active"><a href="#1"></a></li>
				<li><a href="#1"></a></li>
				<li><a href="#1"></a></li>
			</ul>
		</div>

<a href="/" id="logo">Online Store Theme</a>
			<form>
				<input type="text" placeholder="Search entire store here...">
				<input type="submit">
			</form>

			<ul class="userPanel">
				<li><a href="#">My Account</a></li>
				<li><a href="#">My Wishlist</a></li>
				<li><a href="#">Log In</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Cart $10000.00</a>
					<div>
						<h2>Recently added item(s)</h2>
						<article>
							<img src="<?=Yii::app()->theme->baseUrl;?>/files/w.jpg">
							<a href="#">Faddywax Fragrance Diffuser Set Gardenia</a>
							<p><b>1</b> x <b>$399.00</b></p>
							<span></span>
						</article>

						<article>
							<img src="<?=Yii::app()->theme->baseUrl;?>/files/1.jpg">
							<a href="#">Faddywax Fragrance </a>
							<p><b>1</b> x <b>$399.00</b></p>
							<span></span>
						</article>
						<a href="#">View shopping cart</a>
						<a href="#">Proceed to Checkout</a>

					</div>
				</li>
			</ul>
		</div>


	<nav>
		<div class="center">
			<ul id="main_menu">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/blog/">Blog</a></li>
				<li><a href="/blog/10">Blog View</a></li>
				<li><a href="/object/">Production</a>
					<ul>
						<li><a href="/object/10">View</a></li>
					</ul>
				</li>

				<li><a href="/cart.php">Cart</a></li>
				<li><a href="/contact.php">Contact</a></li>

				<li><a href="/compare.php">Compare</a></li>
				<li><a href="/login.php">Login</a></li>
				<li><a href="/check.php">Checkout</a></li>
				
			</ul>
		</div>
	</nav>
</header>







<?=$content;?>







<footer>
	<div class="center">
		<div class="col-1-4">
			<h1>Contact Us</h1>
			<nav class="icon">
				<a href="#" class="pin_i">49 Archdale, 2B Charleston</a>
				<a href="#" class="phone_i">+777 (100) 1234</a>
				<a href="#" class="mail_i">mail@example.com</a>
			</nav>
		</div>

		<div class="col-1-4">
			<h1>Information</h1>
			<nav>
				<a href="#">About Us</a>
				<a href="#">Privacy Policy</a>
				<a href="#">Terms & Conditions</a>
				<a href="#">Secure payment</a>
			</nav>
		</div>

		<div class="col-1-4">
			<h1>Costumer Service</h1>
			<nav>
				<a href="#">Contact Us</a>
				<a href="#">Return</a>
				<a href="#">FAQ</a>
				<a href="#">Site Map</a>
			</nav>
		</div>

		<div class="col-1-4 last">
			<h1>My Account</h1>
			<nav>
				<a href="#">My Account</a>
				<a href="#">Order History</a>
				<a href="#">Wish List</a>
				<a href="#">Newsletter</a>
			</nav>
		</div>

	</div>


	<div class="copy">
		<div class="center">
			<span>© Breeze Store Theme, 2012</span>

			<a href="#" class="gl_i"></a>
			<a href="#" class="tw_i"></a>
			<a href="#" class="fb_i"></a>

		</div>
	</div>
</footer>
</body>
</html>