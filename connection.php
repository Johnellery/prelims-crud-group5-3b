<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'sia1';

# Connection
$group5 = mysqli_connect($servername, $username, $password, $dbname);

# Check connection
if (!$group5) {
  die("Connection failed: " . mysqli_connect_error());
}
?>