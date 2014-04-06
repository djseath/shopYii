<?include "block/function.php";?>
<?get("header");?>

<div class="center other check">
	<h1>Checkout</h1>

	<div class="col-3-4">
		<div class="openF"><h4>Checkout Method</h4><span class="index">12</span>

			<div class="half">
				<form>
				<h5>Checkout as a Guest or Register</h5>
				<p>Register with us for future convenience:</p>


<ul class="notListStyle">
	<li><label><input type="radio"><i class="icon"></i>Checkout as Guest</label></li>
	<li><label><input type="radio"><i class="icon"></i>Register</label></li>
</ul>


<p><b>Register and save time!</b><br>
Register with us for future convenience:</p>

<ul>
	<li>Fast and easy check out</li>
	<li>Easy access to your order history and status</li>
</ul>
<input type="submit" value="Continue">


				</form>
			</div>

			<div class="half last">
				
				<h5>Login</h5>
				<p>If you have an account with us, please log in.</p>
	<form>
	<label>Email Adress: <sup>*</sup>
	<input type="text"></label>

	<label>Password: <sup>*</sup>
	<input type="text"><a href="#">Forgot Your Password?</a>
	</label>

	<label class="ch">
	<input type="checkbox"><i class="icon"></i>
	Remember password</label>

	<input type="submit" value="Login">

	<p class="info"><sup>* Required Field</sup></p>
	</form>

	


			</div>
		</div>


		<div class="closeF"><h4>Billing Information</h4></div>
		<div class="closeF"></div>
		<div class="closeF"></div>
		<div class="closeF"></div>
		<div class="closeF"></div>
		<div class="closeF"></div>
	</div>


	<div class="col-1-4 last sidebar">
		<h4>Your Checkout Progress</h4>
		<a href="#">Billing Address </a><a href="#" class="edit_i">Edit</a><hr>
		<a href="#">Shipping Address</a><a href="#" class="edit_i">Edit</a><hr>
		<a href="#">Shipping Method</a><a href="#" class="edit_i">Edit</a><hr>
		<a href="#">Payment Method</a><a href="#" class="edit_i">Edit</a>
	</div>

</div>
<?get("footer");?>