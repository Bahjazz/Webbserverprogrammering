<?php

$username = $_POST['username'];
$password = $_POST['password'];



$dbc = mysqli_connect("localhost","root","","register");

$query = "SELECT * FROM register WHERE username='$username' AND password='$password';";


?>






