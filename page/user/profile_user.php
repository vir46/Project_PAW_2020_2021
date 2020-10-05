<?php 

include 'db.php';
 $id = $_POST['id'];
 $username = $_POST['username'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 

mysql_query("UPDATE users SET nama='$nama', firstname='$firstname', lastname='$lastname', password='password' WHERE id='$id'");

header("location:index.php?pesan=update");

?>