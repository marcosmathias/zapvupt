<?php
$mysqli = new mysqli("66.7.217.68", "goldmidia_zapvupt", "zapvuptgold123", "goldmidia_zapvupt");

sleep(2);

$error=''; // Variable To Store Error Message

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$pnome=$_POST['pnome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$celular=$_POST['celular'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
$celular = filter_var($_POST['celular'], FILTER_SANITIZE_NUMBER_INT);
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$pnome = filter_var($_POST['pnome'], FILTER_SANITIZE_STRING);
$sobrenome = filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$username = stripslashes($username);
$password = stripslashes($password);
$pnome = stripslashes($pnome);
$sobrenome = stripslashes($sobrenome);
$email = stripslashes($email);
$celular = stripslashes($celular);


$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);
$pnome = $mysqli->real_escape_string($pnome);
$sobrenome = $mysqli->real_escape_string($sobrenome);
$email = $mysqli->real_escape_string($email);
$celular = $mysqli->real_escape_string($celular);
// SQL query to fetch information of registerd users and finds user match.

if ($stmt = mysqli_prepare($mysqli, $query = "INSERT INTO login (pnome, sobrenome, email, celular, username, password) VALUES (?,?,?,?,?,?)")) {

    mysqli_stmt_bind_param($stmt, 'ssssss', $pnome,$sobrenome,$email,$celular,$username,$password);

    mysqli_stmt_execute($stmt) or die('Error when inserting:'.mysqli_error($mysqli));
	
	echo 'true';
 }else{
die('Error when preparing '.mysqli_error($mysqli));

echo 'false';
}
?>