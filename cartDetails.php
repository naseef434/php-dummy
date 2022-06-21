<?php session_start(); ?>
<?php  require 'connection.php' ?>
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
						<small class="title text-muted">Welcome guest!</small>
						<div> 
							<a href="./signin.php">Sign in</a> <span class="dark-transp"> | </span>
							<a href="./register.php"> Register</a>
						</div>
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

<!-- ============================ COMPONENT 1 ================================= -->

<div class="row">
	<aside class="col-lg-9">
<div class="card">
<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<?php 
	
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM books WHERE id IN (SELECT books_id From cart)";
    $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
     	while($row = mysqli_fetch_assoc($result)) { 
     	$image = "uploads/".$row["image"];
     	
     	?>

     	<tr>
	<td>
		<figure class="itemside align-items-center">
						<?php echo '<div class="aside">'.'<img src="'.$image.'" class="img-sm" >'; ?> </div>
			<figcaption class="info">
			 
				<a href="./product-detail.php?id=<?php echo $row['id']; ?>" class="title text-dark"><b><?php echo $row['book_name'] ?></b></a>
				<p class="text-muted small"><?php echo "Author : " .$row['author'] ?> </p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<!-- col.// -->
					<div class="col"> 
						<div class="input-group input-spinner">
							
							<input type="text" class="form-control"  value="1">
							
							</div>
						</div> <!-- input-group.// -->
					</div> <!-- col.// -->
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price"><?php echo $row['price'] . " -  EUR"?></var> 
			
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a href="deleteCart.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Remove</a>
	</td>
</tr>
     	<?php
     	 $_SESSION["books_id"] = $row['id'];
     	 $_SESSION["quantity"] = $row['quantity'];
     	}
     }
 ?>


</tbody>
</table>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<aside class="col-lg-3">

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
			<a href="./place-order.php" class="btn btn-primary btn-block"> Checkout </a>
			<a href="./index.php" class="btn btn-light btn-block">Continue Shopping</a>
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->

</aside> <!-- col.// -->


</div> <!-- row.// -->
<!-- ============================ COMPONENT 1 END .// ================================= -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
</body>
</html>