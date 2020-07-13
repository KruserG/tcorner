<meta charset="utf-8"/>
<?php
session_start();


// Variables for connection

$localhost = 'localhost';
$username = 'root';
$password = ''; 
$dbname = 'rpstory'; 

$connect = mysqli_connect($localhost, $username, $password,$dbname) or die ("Erreur de connexion : " . mysqli_connect_error());



 $connect->query("SET NAMES utf8");

?>





