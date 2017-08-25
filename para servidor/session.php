<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$mysqli = new mysqli("66.7.217.68", "goldmidia_zapvupt", "zapvuptgold123", "goldmidia_zapvupt");
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=$mysqli->query("select username from login where username='$user_check'");
$pnome_sql=$mysqli->query("select pnome from login where username='$user_check'");
$row = $ses_sql->fetch_assoc();
$row2 = $pnome_sql->fetch_assoc();
$login_session=$row['username'];
$nome=$row2['pnome'];
?>