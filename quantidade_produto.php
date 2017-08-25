<?php
include('session.php');

$mysqli = new mysqli("localhost", "root", "", "zapvupt");

$error=''; // Variable To Store Error Message

// Define $username and $password
$username=$login_session;
$quantidade_produto1=$_POST['quantidade_produto1'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter

$quant1 = $mysqli->query("select quantidadeproduto1 from carrinho where username='$username'");

if($quant1){
	
if ($stmt = mysqli_prepare($mysqli, $query = "UPDATE carrinho SET quantidadeproduto1 = quantidadeproduto1 + ?, valor = valor + (? * 4.99) WHERE username = ?")) {

    mysqli_stmt_bind_param($stmt, 'sss', $quantidade_produto1,$quantidade_produto1,$username);

    mysqli_stmt_execute($stmt) or die('Error when inserting:'.mysqli_error($mysqli));
	
	echo 'true';
 }else{
die('Error when preparing '.mysqli_error($mysqli));

}
}

else{
	if ($stmt = mysqli_prepare($mysqli, $query = "INSERT INTO carrinho (username, quantidadeproduto1) VALUES (?,?)")) {

    mysqli_stmt_bind_param($stmt, 'ss', $username,$qp1);

    mysqli_stmt_execute($stmt) or die('Error when inserting:'.mysqli_error($mysqli));
	
	echo 'true';
 }else{
die('Error when preparing '.mysqli_error($mysqli));

echo 'false';
}
}
?>