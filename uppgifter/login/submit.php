<?php

$username = $_POST['username'];
$password = $_POST['password'];

$dbc = mysqli_connect("localhost","root","","register");

$query = "SELECT * FROM form WHERE username='$username' AND pasword='$password';";

$result = mysqli_query($dbc, $query);

  if(mysqli_fetch_array($result)){
    echo "Successfully logged in!";
 } 
  else{
    echo "failed try again!";
    echo "<br>".$query;
  }
?>
