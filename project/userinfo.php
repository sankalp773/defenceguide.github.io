<?php


$con = mysqli_connect("localhost","root");
if ($con){
	echo "succesful";
}else{
	echo "no connection";
}
mysqli_select_db($con,'defenceguidedata');
$email = $_POST['email'];
$pass = $_POST['psw'];

$query = "insert into userinfodata(email, password) values('$email','$pass')";
mysqli_query($con,$query);
header('location:index.php')
?>