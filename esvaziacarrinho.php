<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$mysqli = new mysqli("localhost", "root", "", "zapvupt");
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
if ($stmt = mysqli_prepare($mysqli, $query = "DELETE FROM carrinho WHERE username=?")) {

    mysqli_stmt_bind_param($stmt, 's', $user_check);

    mysqli_stmt_execute($stmt) or die('Error when deleting:'.mysqli_error($mysqli));
	
	echo 'true';
 }else{
die('Error when preparing '.mysqli_error($mysqli));

echo 'false';
}
?>