<?php  require 'connection.php' ?>
<?php

if (isset($_GET['id'])) {
	 	$id = $_GET['id'];
	 	echo "cart : ".$id;
	 	$sql = "DELETE FROM cart WHERE books_id=$id";

		if ($conn->query($sql) === TRUE) {
  		echo "Record deleted successfully";
  		header("Location: cartDetails.php");

		} else {
  		echo "Error deleting record: " . $conn->error;
		}

	 }
else{
	echo "Nothing";
}
// sql to delete a record

$conn->close();
?>