<?php
  require_once "connection.php";

  if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM `user` WHERE id = '$id'";  
    $run = mysqli_query($group5, $query);  
    if ($run) {  
         header('location:info.php');  
    }else{  
         echo "Error: ".mysqli_error($group5);  
    }  
}  
?>