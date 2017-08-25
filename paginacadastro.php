<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<?php
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>

<head>
	<title>Zap Vupt - O seu supermercado móvel</title>
	<link rel="stylesheet" type="text/css" href="styles/estilo.css">
</head>

<body>

		<img id="fundo4" class="unselectable" src="/img/fundo4.jpg" style="width:100vw; position:absolute; margin: 0; overflow: hidden"/>
		<p class="unselectable" id="descricao_login" style="width: 30vw; font-family: KozukaGothicPro-ExtraLight; position: absolute; margin-left: 35vw; margin-top: 23vh; text-align: center; line-height: 5vh; font-size: x-large">Para ter acesso ao supermercado, <span style="font-family: KozukaGothicPro-Bold">cadastre-se.</span></p>
		
		<img id="logo_completa" class="unselectable" src="/img/logo_completa.png" style="width:30vw; position:absolute; margin-left: 35vw; margin-top: 3vh; overflow: hidden"/>
		
		<div id="box_cadastro" style="overflow: hidden;">
		<form id="formulario_cadastro" style="overflow: hidden; width: 50vw; height: 70vh;font-family: KozukaGothicPro-ExtraLight; position: absolute; margin-left: 25vw; margin-top: 35vh; line-height: 2vh; font-size: large; text-align:center;">
			<p style="display: table-row; line-height: 8vh; margin-left: 5vw">
				<label class="unselectable" style="width: 5vw; display: table-cell; margin-left: 5vw">Nome</label>
				<input oninvalid="this.setCustomValidity('Digite seu nome.')" oninput="setCustomValidity('')" required id="pnome" name="pnome" placeholder="Digite aqui seu nome" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			
			<p style="display: table-row; line-height: 8vh; margin-left: 5vw">
				<label class="unselectable" style="width: 5vw; display: table-cell; margin-left: 5vw">Sobrenome</label>
				<input oninvalid="this.setCustomValidity('Digite seu sobrenome.')" oninput="setCustomValidity('')" required id="sobrenome" name="sobrenome" placeholder="Digite aqui seu sobrenome" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			
			<p style="display: table-row; line-height: 8vh; margin-left: 5vw">
				<label class="unselectable" style="width: 5vw; display: table-cell; margin-left: 5vw">Login</label>
				<input pattern="^[A-Za-z0-9_]{8,32}$" oninvalid="this.setCustomValidity('Digite seu login, com no mínimo 8 caracteres e no máximo 32 caracteres, sem pontos, traços ou espaços.')" oninput="setCustomValidity('')" required id="username" name="username" placeholder="Digite aqui seu login" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 5vw; display: table-cell;">Senha</label>
				<input oninvalid="this.setCustomValidity('Sua senha deve possuir pelo menos oito dígitos, uma letra e um número.')" oninput="setCustomValidity('')" required id="password" name="password" placeholder="**********" type="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" style="border-radius: 5px; color: #000000; width: 20vw;height:5vh; display: table-cell;">
			</p>
			
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 20vw; display: table-cell;">E-mail para contato</label>
				<input oninvalid="this.setCustomValidity('Digite um email válido.')" oninput="setCustomValidity('')" required id="email" name="email" placeholder="Digite aqui seu email" type="email" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 10vw; display: table-cell;">Telefone celular</label>
				<input oninvalid="this.setCustomValidity('Digite um número de celular válido, incluindo o seu código de área, sem traços e sem parênteses.')" oninput="setCustomValidity('')" required id="celular" name="celular" placeholder="62987654321" type="text" pattern="[0-9]{11}" style="border-radius: 5px; color: #000000; width: 20vw;height:5vh; display: table-cell;">
			</p>
			
	
			<button id="cadastro" type="submit" style="border-style: none; background-color: transparent; margin-top: 1vh;"><img style="width: 10vw; margin-left: 1vw" src="/img/botao_cadastrar.png" /></button>

			<div id="loadercadastro" style="text-align: center; display: none; position: absolute; ">
				<img src="/img/loader.gif" style="margin-top: 2vh; text-align: center; height: 4vh; margin-left: 0vw; position: absolute;"/>
				<p class="unselectable" style="font-family: KozukaGothicPro-Bold; margin-top: 3vh; margin-left: 3vw; position: absolute;">Carregando...</p>
			</div>
			
			<div id="errocadastro" style="position:absolute; margin-top: -5vh; margin-left:33vw; font-size: small; line-height:3vh;">
			</div>
		</form>
		</div>
		
		<div id="barra_inferior" style="margin-top: 90vh; position: absolute; width: 100vw; height: 2vh;">
		<img id="linha_inferior" class="unselectable"  src="/img/linha_inferior.png" style="height: 1vh; width: 100vw;"/>
		<p class="unselectable" style="margin-left: 2vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Copyright © 2017 - <span style="font-family: KozukaGothicPro-Bold">Gold Mídia Digital.</span> Todos os direitos reservados.</a></p>
		<p style="margin-left: 15vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>O que é o Zap Vupt?</a></p>
		<p style="margin-left: 10vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Perguntas Frequentes</a></p>
		<p style="margin-left: 10vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Contato</a></p>
		</div>
		
</body>

	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="http://demos.9lessons.info/ajaxLoginServer/js/jquery.ui.shake.js"></script>

	<script src="/scripts/index.js"></script>
	<script src="/scripts/cadastroscript.js"></script>