<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$mysqli = new mysqli("localhost", "root", "", "zapvupt");
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=$mysqli->query("select username from login where username='$user_check'");
$pnome_sql=$mysqli->query("select pnome from login where username='$user_check'");
$valor_sql=$mysqli->query("select valor from carrinho where username='$user_check'");
$p1_sql=$mysqli->query("select quantidadeproduto1 from carrinho where username='$user_check'");
$p2_sql=$mysqli->query("select quantidadeproduto2 from carrinho where username='$user_check'");
$p3_sql=$mysqli->query("select quantidadeproduto3 from carrinho where username='$user_check'");
$row = $ses_sql->fetch_assoc();
$row2 = $pnome_sql->fetch_assoc();
$row3 = $valor_sql->fetch_assoc();
$row4 = $p1_sql->fetch_assoc();
$row5 = $p2_sql->fetch_assoc();
$row6 = $p3_sql->fetch_assoc();
$login_session=$row['username'];
$nome=$row2['pnome'];
$valor=$row3['valor'];
$quantidade1=$row4['quantidadeproduto1'];
$quantidade2=$row5['quantidadeproduto2'];
$quantidade3=$row6['quantidadeproduto3'];
$valor1=$quantidade1 * 4.99;
$valor2=$quantidade2 * 10.99;
$valor3=$quantidade3 * 8.99;
if($valor > 0){
}
else
{
	$valor = '0.00';
}
if(!isset($login_session)){
$mysqli->close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>