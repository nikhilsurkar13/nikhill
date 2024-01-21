<?php 
$server = "localhost";
$username = "rooy";
$password = "";
$database = "u333038411_bhartimeditech";

$conn = mysqli_connect($server,$username,$password,$database);

if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
?>


