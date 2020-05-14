<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,th,tr{
			border-collapse: collapse;
			border:1px solid black;

		}
		td,th{
			width:20%;
		}
	</style>
</head>
<body>
<form action="save.php" method="post">
	user  name: <input type="text" name="username"><br>
	pass  word: <input type="password" name="password"><br>
	<input type="submit" value="submit">
</form>
<br>
<h1> information from database </h1>
<table>
	<tr>
		<th>Sn</th><th>UserName</th><th>PassWord</th>
	</tr>
	<?php 
	include('connect.php');
	$sql="SELECT * FROM userinfo";
	$res=mysqli_query($conn,$sql);
	while($ans=mysqli_fetch_assoc($res))
	{
		?>
		<tr>
			<td><?php echo $ans['id']; ?></td>
			<td><?php echo $ans['username'] ?></td>
			<td><?php echo $ans['password'] ?></td>	
		</tr>
		<?php
	}


	 ?>
	
</table>

</body>
</html>