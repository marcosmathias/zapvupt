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

<body onload="moverCarrinho()">
	
	<script src="/scripts/facebook_login.js"></script>
	
		<img id="fundo" class="unselectable" src="/img/fundo1.png" style="width:100vw; position:absolute; margin: 0; overflow: hidden"/>
		<img id="fundo2" src="/img/fundo2.png" class="unselectable" style="width:100vw; position:absolute; margin: 0; overflow: hidden; opacity: 0"/>
		<img id="gray_ball" src="/img/gray_ball.png" style="height: 25vh; margin-top: 42vh; margin-left: 30.5vw; position: absolute"/>
		<img id="white_ball" src="/img/white_ball.png" style="height: 25vh; margin-top: 41.6vh; margin-left: 30vw; position: absolute"/>
		<img id="z_carrinho" class="unselectable" src="/img/Z_Carrinho_Reto_Linhas.png" style="height: 10vh; width: 10vw; margin-top: 45vh; margin-left: -15vw; position: absolute"/>
		<img id="arroba_carrinho" class="unselectable" src="/img/arroba_Carrinho.png" style="height: 12.5vh; width: 6.75vw; margin-top: 41.6vh; margin-left: 45vw; position: absolute; opacity: 0"/>
		<img id="logo_menor" class="unselectable" src="/img/logo_menor.png" style="height: 12.5vh; width: 6.75vw; margin-top: 41.6vh; margin-left: 45vw; position: absolute; opacity: 0"/>
		<img id="texto_logo" class="unselectable" src="/img/texto_logo.png" style="height: 12.5vh; margin-top: 41.6vh; margin-left: 45vw; position: absolute; opacity: 0"/>
		
		<img id="botao_vamos" src="/img/botao_vamos.png" style="width: 25vw; margin-top: 40vh; margin-left: 37.5vw; position: absolute; opacity: 0"/>
		<p class="unselectable" id="descricao_botao_vamos" style="color: #aaaaaa; font-family: KozukaGothicPro-Light; width: 25vw; text-align: center; position: absolute; margin-top: 50vh; margin-left: 37.5vw; font-size: x-small; line-height: 1.5; opacity: 0;">Ao clicar no botão acima, você concorda com os nossos <span style="font-family: KozukaGothicPro-Bold">Termos</span>, e a nossa <span style="font-family: KozukaGothicPro-Bold">Política de Privacidade e uso de cookies.</span></p>
		
		<p class="unselectable" id="descricao_login" style="width: 30vw; font-family: KozukaGothicPro-ExtraLight; position: absolute; margin-left: 130vw; margin-top: 23vh; text-align: center; line-height: 5vh; font-size: x-large">Para pegar um carrinho, entre com seu <span style="font-family: KozukaGothicPro-Bold">login</span> e <span style="font-family: KozukaGothicPro-Bold">senha</span>.</p>
		
		<div id="box" style="overflow: hidden;">
		<form id="formulario_login" style="overflow: hidden; width: 25vw; font-family: KozukaGothicPro-ExtraLight; position: absolute; margin-left: 100vw; margin-top: 38vh; line-height: 2vh; font-size: large;">
			<p style="display: table-row; line-height: 8vh; margin-left: 5vw">
				<label class="unselectable" style="width: 5vw; display: table-cell; margin-left: 5vw">Login</label>
				<input id="username" name="username" placeholder="Digite aqui seu login" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 5vw; display: table-cell;">Senha</label>
				<input id="password" name="password" placeholder="**********" type="password" style="border-radius: 5px; color: #000000; width: 20vw;height:5vh; display: table-cell;">
			</p>
			
	
			<button id="login" type="submit" style="border-style: none; background-color: transparent; margin-top: 2vh;"><img style="width: 22vw; margin-left: 1vw" src="/img/botao_login.png" /></button>

			<div id="loader" style="text-align: center; display: none">
				<img src="/img/loader.gif" style="margin-top: 3vh; text-align: center; height: 4vh;margin-left: 6vw;"/>
				<p class="unselectable" style="font-family: KozukaGothicPro-Bold; margin-top: -3vh;">Carregando...</p>
			</div>
			
			<div id="error" style="margin-top: 3vh; text-align: center; font-size: small; line-height:2vh;">
			</div>
		</form>
		</div>
		
		<div id="cadastros" style="overflow: hidden; width: 40vw; font-family: KozukaGothicPro-ExtraLight; position: absolute; margin-left: 130vw; margin-top: 30vh; line-height: 2vh; font-size: large; text-align: center;">
			<p class="unselectable" style="font-family: KozukaGothicPro-Bold; font-size: large">Ainda não possui uma conta?</p>
			<img src="/img/facebook-login.png" style="width:30vw; margin-top:1vh;" onclick="FB.login()" />
			<p class="unselectable" style="font-family: KozukaGothicPro-Bold; font-size: large; text-align: center;">ou</p>
			<img src="/img/botao_cadastrar.png" style="width:18vw" onclick="redirectcadastro()"/>
		</div>
		
		<p class="unselectable" id="baixe_aplicativo" style="font-family: KozukaGothicPro-Bold; font-size: large; width:30vw; margin-left:117vw; position: absolute; margin-top: 68vh; text-align: center">Baixe nosso aplicativo<span style="font-family: KozukaGothicPro-Light;"> e tenha acesso a promoções e ofertas exclusivas.</span></p>

		<img id="google_play" src="/img/google_play.png" style="width:15vw; position: absolute; margin-top: 80vh; margin-left: 115vw;" onclick="redirectsemconta()"/>
		<img id="app_store" src="/img/app_store.png" style="width:15vw; position: absolute; margin-top: 79.5vh; margin-left: 135vw; line-height:1.5vh" onclick="redirectsemconta()"/>
		
		

		<div id="status">
		</div>

		

		</div>		
		
		<div id="barra_inferior" style="margin-top: 90vh; position: absolute; width: 100vw; height: 2vh; opacity:0">
		<img id="linha_inferior" class="unselectable"  src="/img/linha_inferior.png" style="height: 1vh; width: 100vw;"/>
		<p class="unselectable" style="margin-left: 2vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Copyright © 2017 - <span style="font-family: KozukaGothicPro-Bold">Gold Mídia Digital.</span> Todos os direitos reservados.</a></p>
		<p style="margin-left: 15vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>O que é o Zap Vupt?</a></p>
		<p style="margin-left: 10vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Perguntas Frequentes</a></p>
		<p style="margin-left: 10vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Contato</a></p>
		</div>
		
		
		
	
	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="http://demos.9lessons.info/ajaxLoginServer/js/jquery.ui.shake.js"></script>

	<script src="/scripts/index.js"></script>
	<script src="/scripts/loginscript.js"></script>
	<script src="/scripts/unselect.js"></script>
	
</body>

