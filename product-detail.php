<?php  session_start();  ?>
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

<!-- ============================ COMPONENT 1 ================================= -->
<?php 
$price = 0;
	if (isset($_GET['id'])) {
	 	$id = $_GET['id'];
	 	$sql = "SELECT * FROM books WHERE id = $id ";
	 	$result = $conn->query($sql);	 
	}
?>

<?php 	

	if ($result->num_rows > 0) {
  	// output data of each row
  		while($row = $result->fetch_assoc()) {
  		$image = "uploads/".$row["image"];  		
  		
		echo '<div class="card">';
        echo '<div class="row no-gutters">';
		echo '<aside class="col-md-6">';
		echo '<article class="gallery-wrap">'; 
	    echo '<div class="img-big-wrap">';  
	   	echo '<a href="#">'.'<img src="'.$image.'">'; echo '</a>';
	   echo '</div>';
	
      echo "</article>";
		echo "</aside>";
		echo '<main class="col-md-6 border-left">';
	echo '<article class="content-body">';
?>
<?php 	


    	echo '<h2 class="title">' .$row["book_name"] . '</h2>' . "<br>";
    	echo '<h6 >'."Author : " .$row["author"] . '</h6>' . "| Qty - ". $row["quantity"]. "<br>";
    	echo '<div class="mb-3">' .  
			'<var class="price h4">'."Price  : " . $row["price"]. '</var>'. 
			'</div>';

		echo '<p>'.$row["discription"].'<p/>'; ?>
		<a href="./addCart.php?id=<?php echo $row['id']; ?>" class="btn  btn-primary" onclick="myFunction()"><span class="text">Add to cart</span><i class="fas fa-shopping-cart"></i></a>
  <?php }
} else {
  echo "0 results";
}
?>

	<hr>

	
	</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->
<!-- ============================ COMPONENT 1 END .// ================================= -->

<br>



</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<script>
function myFunction() {
  alert("added to cart!");
}
</script>
</body>
</html>