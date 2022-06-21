<?php session_start(); ?> 
<?php  require 'connection.php' ?>
<?php 
	echo "book id  is " . $_SESSION["books_id"] . ".<br>";
	echo "quantity is " . $_SESSION["quantity"] . ".<br>";

	$qty = $_SESSION["quantity"] - 1; 
	$id = $_SESSION["books_id"];

	$sql = "UPDATE books SET quantity=$qty WHERE id= $id";
	if ($conn->query($sql) === TRUE) {
	  echo "Record updated successfully";
	  // header("Location: store.php");
	} else {
  		echo "Error updating record: " . $conn->error;
	}
	$sql = "DELETE FROM cart WHERE books_id=$id";

		if ($conn->query($sql) === TRUE) {
  		echo "Record deleted successfully";
  		header("Location: store.php");

		} else {
  		echo "Error deleting record: " . $conn->error;
		}

 ?>