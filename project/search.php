<html><head>
<title>results</title>
<link rel="stylesheet" href="style.css" type="text/css"></head>
<body style="background-color:grey;font-family:candara;background-image:url(https://images.pexels.com/photos/1242348/pexels-photo-1242348.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
<?php
echo "SEARCH RESULTS";
include('db.php');
if(isset($_POST['submit'])){
	$str=mysqli_real_escape_string($con,$_POST['query']);
	$sql="select * from search where title like'%$str%' or text like '%$str%'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			echo "<ul><li><a class='h' href='".$row['link']."'?id=".$row['id']."'>".$row['title']."</a></li></ul>";
			echo "</br>";
		}
	}else{
		echo "No data found";
	}
}
?>
<?php include 'footer.php' ?></body>
</html>