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
							<a href="./signin.html">Sign in</a> <span class="dark-transp"> | </span>
							<a href="./register.html"> Register</a>
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



<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Our Store</h2>
	
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		


	</aside> <!-- col.// -->
	<main class="col-md-9">

<header class="border-bottom mb-4 pb-3">
		<div class="form-inline">
			<span class="mr-md-auto">32 Items found </span>
			
		</div>
</header><!-- sect-heading -->

<div class="row">
<?php 
	
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($result)) {?>
     
       <div class="col-md-3">
        <div class="card card-product-grid">
           <a href="./product-detail.php?id=<?php echo $row['id']; ?>"class="img-wrap"> <img src="uploads/<?php echo $row["image"] ?>"></a>
            <figcaption class="info-wrap">
                <a href="./product-detail.php?id=<?php echo $row['id']; ?>" class="title"><?php echo $row["book_name"] ?></a>
                <div class="price mt-1">Price  - <?php echo $row["price"] ?></div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> 
    <?php 
      }
    } else {
      echo "0 results";
    }

    mysqli_close($conn);

?>	
	
</div> <!-- row.// -->


<nav class="mt-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top padding-y">
	<div class="container">
		<p class="float-md-right"> 
			&copy Copyright 2019 All rights reserved
		</p>
		<p>
			<a href="#">Terms and conditions</a>
		</p>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->



</body>
</html>