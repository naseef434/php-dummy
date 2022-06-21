<?php  session_start();  ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>GreatKart | One of the Biggest Online Shopping Platform</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>


<header class="section-header">


<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-md-3 col-6">
		<a href="./" class="brand-wrap">
			<img class="logo" src="./images/logo.png">
		</a> <!-- brand-wrap.// -->
	</div>

	<a href="./store.html" class="btn btn-outline-primary">Store</a>
	<div class="col-lg  col-md-6 col-sm-12 col">
		<form action="#" class="search">
			<div class="input-group w-100">
			    <input type="text" class="form-control" style="width:60%;" placeholder="Search">
			    
			    <div class="input-group-append">
			      <button class="btn btn-primary" type="submit">
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
		<div class="col-lg-3 col-sm-6 col-8 order-2 order-lg-3">
				<div class="d-flex justify-content-end mb-3 mb-lg-0">
					<div class="widget-header">
						<small class="title text-muted"> <?php
						if ($_SESSION["email"]) {
							echo   'Welcome!'.$_SESSION["email"].'</small>';
														echo '<div>'. 
							
							'<a href="./logout.php"> Logout</a>'.
						'</div>';

						}else{
							// echo "welcome". $_SESSION["email"] . '</small>';	
						echo '<div>'. 
							'<a href="./signin.php">Sign in</a>'. '<span class="dark-transp"> | </span>'.
							'<a href="./register.php"> Register</a>'.
						'</div>';
						} 
						 
						
							
						 ?>
						
						
					</div>
					<a href="./cartDetails.php" class="widget-header pl-3 ml-3">
						<div class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></div>
						<span class="badge badge-pill badge-danger notify">0</span>
					</a>
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->




</header> <!-- section-header.// -->
<section class="section-content padding-y bg">
<div class="container">



<!-- ============================ COMPONENT 2 ================================= -->
<div class="row">
		<main class="col-md-8">


<article class="card mb-4">
<div class="card-body">
	<h4 class="card-title mb-4">Contact info</h4>
	<form action="">
		<div class="row">
			<div class="form-group col-sm-6">
				<label>Frst name</label>
				<input type="text" placeholder="Type here" class="form-control" required>
			</div>
			<div class="form-group col-sm-6">
				<label>Last name</label>
				<input type="text" placeholder="Type here" class="form-control" required>
			</div>
			<div class="form-group col-sm-6">
				<label>Phone</label>
				<input type="text" value="+998" class="form-control" required>
			</div>
			<div class="form-group col-sm-6">
				<label>Email</label>
				<input type="email" placeholder="example@gmail.com" class="form-control" required>
			</div>
		</div> <!-- row.// -->	
	</form>
</div> <!-- card-body.// -->
</article> <!-- card.// -->


<article class="card mb-4">
<div class="card-body">
	<h4 class="card-title mb-4">Delivery info</h4>
	<form action="">
			

		<div class="row">
				<div class="form-group col-sm-6">
					<label>Country*</label>
					<select name="" class="form-control">
						<option value="">India</option>
						<option value="">United States</option>
						<option value="">France</option>
						<option value="">Italy</option>
					</select>
				</div>
				<div class="form-group col-sm-6">
					<label>State*</label>
					<input type="text" placeholder="Type here" class="form-control" required>
				</div>
				<div class="form-group col-sm-8">
					<label>Street*</label>
					<input type="text" placeholder="Type here" class="form-control" required>
				</div>
				<div class="form-group col-sm-4">
					<label>Building</label>
					<input type="text" placeholder="" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label>House</label>
					<input type="text" placeholder="Type here" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label>Postal code</label>
					<input type="text" placeholder="" class="form-control" required>
				</div>
				<div class="form-group col-sm-4">
					<label>Zip</label>
					<input type="text" placeholder="" class="form-control">
				</div>
		</div> <!-- row.// -->	
	</form>
</div> <!-- card-body.// -->
</article> <!-- card.// -->


<article class="accordion" id="accordion_pay">
	<div class="card">
		<header class="card-header">
			<img src="./images/misc/payment-paypal.png" class="float-right" height="24"> 
			<label class="form-check collapsed" data-toggle="collapse" data-target="#pay_paynet">
				<input class="form-check-input" name="payment-option" checked type="radio" value="option2">
				<h6 class="form-check-label"> 
					Paypal 
				</h6>
			</label>
		</header>
		<div id="pay_paynet" class="collapse show" data-parent="#accordion_pay">
		<div class="card-body">
			<p class="text-center text-muted">Connect your PayPal account and use it to pay your bills. You'll be redirected to PayPal to add your billing information.</p>
			<p class="text-center">
				<a href="#"><img src="./images/misc/btn-paypal.png" height="32"></a>
				<br><br>
			</p>
		</div> <!-- card body .// -->
		</div> <!-- collapse .// -->
	</div> <!-- card.// -->
	<div class="card">
	<header class="card-header">
		<img src="./images/misc/payment-card.png" class="float-right" height="24">  
		<label class="form-check" data-toggle="collapse" data-target="#pay_payme">
			<input class="form-check-input" name="payment-option" type="radio" value="option2">
			<h6 class="form-check-label"> Credit Card  </h6>
		</label>
	</header>
	<div id="pay_payme" class="collapse" data-parent="#accordion_pay">
		<div class="card-body">
			<p class="alert alert-success">Some information or instruction</p>
			<form class="form-inline">
				<input type="text" class="form-control mr-2" placeholder="xxxx-xxxx-xxxx-xxxx" name="">
				<input type="text" class="form-control mr-2" style="width: 100px"  placeholder="dd/yy" name="">
				<input type="number" maxlength="3" class="form-control mr-2"  style="width: 100px"  placeholder="cvc" name="">
				<button class="btn btn btn-success">Button</button>
			</form>
		</div> <!-- card body .// -->
	</div> <!-- collapse .// -->
	</div> <!-- card.// -->
	
</article> 
<!-- accordion end.// -->
  
		</main> <!-- col.// -->
		<aside class="col-md-4">
			<div class="card">
		<div class="card-body">
			<dl class="dlist-align">
			  <dt>Total price:</dt>
			  <dd class="text-right">$69.97</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Tax:</dt>
			  <dd class="text-right"> $10.00</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Total:</dt>
			  <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
			</dl>
			<hr>
			<p class="text-center mb-3">
				<img src="./images/misc/payments.png" height="26">
			</p>
			<a href="checkout.php" type="submit" class="btn btn-primary btn-block" onclick="myFunction()"> Place Order </a>
			
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->

<!-- ============================ COMPONENT 2 END//  ================================= -->




</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= SECTION CONTENT END// ========================= -->
<script>
function myFunction() {
  alert("order placed thank you!");
}
</script>

</body>
</html>