<?php
require 'db_conn.php';
  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  
  $sql = "SELECT * FROM `imagess` WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  header("Content-Type: image/png");
header("Content-Length: " . mysqli_num_rows($result));

//Output the image data
echo mysqli_fetch_assoc($result)['image'];
?>