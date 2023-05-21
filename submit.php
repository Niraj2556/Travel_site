<?php

$db_hostname ="127.0.0.1";
$db_username ="root";
$db_password = "";
$db_name = "travel";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn){
  echo "connection failed";
  exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$sql = "INSERT INTO hello (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

$result = mysqli_query($conn, $sql);

if(!$result){
  echo "error".mysqli_error($conn);
  exit;
}



mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      margin:0%;
      padding:0%;
      box-sizing:border-box;
    }
    img{
      width:100%;
      height:100vh;
      background-attachment:fixed;
    }
  </style>
</head>
<body>
  <img src="canva.jpeg">
</body>
</html>