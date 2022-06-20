<?php  require 'connection.php' ?>
<?php 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];


$sql = "INSERT INTO customer (first_name, last_name, email,password,gender)
VALUES ('$first_name', '$last_name', '$email',$password,'$gender')";
if (mysqli_query($conn, $sql)) {
   header("Location: signin.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 ?>