<?php  require 'connection.php' ?>;
<?php
	if (isset($_GET['id'])) {
	 	$id = $_GET['id'];
	 	echo $id;
	 	}
	$sql = "INSERT INTO cart (quantity, books_id )
	VALUES (1, $id)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: index.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>