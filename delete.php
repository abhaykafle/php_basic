<?php 

$sn=$_GET['sn'];
include('connect.php');
$sql="DELETE FROM userinfo WHERE id=$sn";
$res=mysqli_query($conn,$sql);
if($res)
{
	header('Location:index.php');
}
else{
	echo "error";
}




 ?>