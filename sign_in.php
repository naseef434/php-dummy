<?php  require 'connection.php' ?>
<?php 
	
	session_start(); 
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sql="SELECT * from customer WHERE email='$email'AND password='$pass'";  
	$result = mysqli_query($conn, $sql);
	 if (mysqli_num_rows($result) > 0) {
	 	 $_SESSION['email']=$email;
	 	  header("Location: index.php");
	 }
	 else  
     {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
       header("Location: signin.php");
     }  
?>