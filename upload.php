<?php
require 'db_conn.php';

if(isset($_POST['submit'])){
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    $imgname=$_POST['imgname'];
    $file_path = "photo/".$imgname;
    $sql = "INSERT INTO imagess (image , `image_path`) VALUES ('$imgContent','$file_path')";
    
    if(mysqli_query($conn, $sql)){
        echo "Image uploaded successfully.";
       

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
