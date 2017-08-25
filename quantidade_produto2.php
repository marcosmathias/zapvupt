<?php
include('session.php');

$mysqli = new mysqli("localhost", "root", "", "zapvupt");

$error=''; // Variable To Store Error Message

// Define $username and $password
$username=$login_session;
$quantidade_produto2=$_POST['quantidade_produto2'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter

$quant1 = $mysqli->query("select quantidadeproduto2 from carrinho where username='$username'");

$rowcount=mysqli_num_rows($quant1);

if($rowcount==1){
	
if ($stmt = mysqli_prepare($mysqli, $query = "UPDATE carrinho SET quantidadeproduto2 = quantidadeproduto2 + ?, valor = ROUND(valor + (? * 10.99),2) WHERE username = ?")) {

    mysqli_stmt_bind_param($stmt, 'sss', $quantidade_produto2,$quantidade_produto2,$username);

    mysqli_stmt_execute($stmt) or die('Error when inserting:'.mysqli_error($mysqli));
	
	echo 'true';
 }else{
die('Error when preparing '.mysqli_error($mysqli));

}
}

else{
	if ($stmt = mysqli_prepare($mysqli, $query = "INSERT INTO carrinho (username, quantidadeproduto2, valor) VALUES (?,?,?*10.99)")) {

    mysqli_stmt_bind_param($stmt, 'sss', $username,$quantidade_produto2,$quantidade_produto2);

    mysqli_stmt_execute($stmt) or die('Error when inserting:'.mysqli_error($mysqli));
	
	echo 'true';
 }else{
die('Error when preparing '.mysqli_error($mysqli));

echo 'false';
}
}
?>