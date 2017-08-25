<?php
  $mysqli = new mysqli("localhost", "root", "", "zapvupt");
  
  $login=$_POST['login'];	//Pegando dados passados por AJAX
  $senha=$_POST['senha'];
  
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
  
  //Consulta no banco de dados
  $sql="select * from usuarios where username='".$login."' and password='".$senha."'"; 
  $resultados = $mysqli->query($sql)or die ($mysqli->error);
  $res=mysql_fetch_array($resultados); //
	if (@mysql_num_rows($resultados) == 0){
		echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
	}
	
	else{
		echo 1;	//Responde sucesso
		if(!isset($_SESSION)) 	//verifica se há sessão aberta
		session_start();		//Inicia seção
		//Abrindo seções
		$_SESSION['usuarioID']=$res['id']; 		
		$_SESSION['nomeUsuario']=$res['username'];
		$_SESSION['email']=$res['email'];	
		exit;	
	}
?>