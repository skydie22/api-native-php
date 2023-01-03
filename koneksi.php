<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "api_smkn10";
$con = mysqli_connect($server, $user , $password , $database);
if(mysqli_connect_errno()) {
    echo "gagal terhubug mysql :" . mysqli_connect_error();
}
?>