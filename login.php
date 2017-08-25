<?php
$mysqli = new mysqli("localhost", "root", "", "zapvupt");

sleep(2);

$error=''; // Variable To Store Error Message

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($mysqli, "select * from login where password='$password' AND username='$username'");
$res = $query->fetch_array(MYSQLI_BOTH);
$row = $query->num_rows;
if ($row == 1) {
echo 'true';
if(!isset($_SESSION))
	session_start();
	$_SESSION['login_user']=$res['username'];
	$_SESSION['nome']=$res['pnome'];
	exit;
} else {
echo 'false';
}
?>