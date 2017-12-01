<?php
$dbc = mysqli_connect("localhost","root","","register");

$username = $_POST['username'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$date = "0000-00-00";
$password = $_POST['password'];

$query = "insert into form (username, name, mail, date, pasword) Values ('$username', '$name', '$mail', '$date', '$password')";

if(mysqli_query($dbc,$query)){
    echo "Det funkar";
} 
else{
    echo "det funkar inte";
    echo "<br>".$query;
}
?>


	
	

<?