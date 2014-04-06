<?include "block/function.php";?>
<?get("header");?>

<div class="center other loginDiv">
<h1>Login or Create an Account</h1>
<div class="col-2-4">
	<h2>New Customers</h2>
	<p>By creating an account with our store, you will 
	be able to move through the checkout process faster, 
	store multiple shipping addresses, view and track your 
	orders in your account and more.</p>
	<a href="#" class="button">Create An Account</a>
</div>

<div class="col-2-4 last">
	<h2>Registed Customers</h2>
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

<?get("footer");?>