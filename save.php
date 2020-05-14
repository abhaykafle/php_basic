<?php 

include ('connect.php');
$name=$_POST['username'];
$password=$_POST['password'];
$sql="INSERT INTO userinfo(username,password) VALUES('$name','$password')";
$res=mysqli_query($conn,$sql);
if($res)
{
	header('Location:index.php');
}
else{
	echo "error";
}

 ?>