<?php


$con = mysqli_connect("localhost","root");
if ($con){
	echo "succesful";
}else{
	echo "no connection";
}
mysqli_select_db($con,'defenceguidedata');
$name = $_POST['fname'];
$email = $_POST['eml'];
$state = $_POST['state'];
$feed = $_POST['subject'];
$query = "INSERT INTO `feedbacks`(`name`, `email`, `state`, `feedback`) VALUES ('$name','$email','$state','$feed')";
mysqli_query($con,$query);
header('location:index.php')
?>