
<?php 
$sn=$_GET['sn'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
	user  name: <input type="text" name="username"><br>
	pass  word: <input type="password" name="password"><br>
	<input type="submit" value="submit">
</form>
<?php 
if($_POST)
{

$usernames=$_POST['username'];
$passwords=$_POST['password'];
include('connect.php');
$sql="UPDATE userinfo SET username='$usernames',password='$passwords' WHERE id=$sn ";
$res=mysqli_query($conn,$sql);
if($res)
{
	header('Location:index.php');
}
else{
	echo "error";
}

}


 ?>

</body>
</html>