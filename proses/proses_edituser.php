<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
	<div class="judul">		
		<h1>---------------------------------</h1>
		<h2>Edit Profile</h2>
		<h3>---------------------------------</h3>
	</div>
	
	<br/>
 
	<br/>
	<h3>Edit Profile</h3>
 
	<?php 
	include 'db.php';
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM users WHERE id='$id'")or die(mysql_error());
	
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="proses_edituser.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="username" value="<?php echo $data['username'] ?>">
				</td>					
			</tr>
            <tr>
				<td>Firstname</td>
				<td>
					<input type="text" name="firstname" value="<?php echo $data['firstname'] ?>">
				</td>					
			</tr>	
            <tr>
				<td>Lastname</td>
				<td>
					<input type="text" name="lastname" value="<?php echo $data['lastname'] ?>">
				</td>					
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>					
			</tr>	
			<tr>
				<td>Confirmation Password</td>
				<td><input type="text" name="confirmation password" value="<?php echo $data['password'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
