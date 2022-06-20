<?php  require 'connection.php' ?>


<?php

  $name  =  $_POST["book_name"];
  $author  = $_POST["author"];
  $discription  = $_POST["discription"];
  $price  = $_POST["price"]; 
  $qty = $_POST["qty"];
  // $file = $_POST["fileToUpload"];
  

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "name :".  $target_file;
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $file =  htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    $sql = "INSERT INTO books (book_name, author, discription,price,quantity,image)
    VALUES ('$name', '$author', '$discription', '$price', '$qty','$file')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("Location: index.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



?>
















