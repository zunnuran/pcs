<?php
//database connection

$hostname = "localhost";
$username = "root";
$password = "";
$database = "pcs_database";

$conn = mysqli_connect("$hostname", "$username", "$password", "$database");

if(!$conn){
echo "DataBase Error";
}
?>