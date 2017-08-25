<?php
include('session.php');
?>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>
<title>Zap Vupt - O seu supermercado móvel</title>
<link href="styles/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
<img id="fundo" class="unselectable" src="/img/fundo3.png" style="width:100vw; position:absolute; margin: 0; overflow: hidden"/>

<img id="logo_menor" class="unselectable" src="/img/logo_menor.png" style="height: 20vh; margin-top: 5vh; margin-left: 25vw; position: absolute; opacity: 1"/>


<div style="position: absolute; margin-top: 30vh; margin-left: 10vw; width: 35vw; height: 50vh; background-color: rgba(255,255,255,0.5); border-radius: 1vh; text-align: center">
	<p style="float:left; width:35vw; text-align: center; color:#106492; font-size: 7vw; font-family: KozukaGothicPro-Bold; margin: 0">R$ 24,97</p>
	<p style="float:left; width:35vw; text-align: center; color:#000000; font-size: 2vw; font-family: KozukaGothicPro-Bold; margin-top: -5vh">R$ 24,97 + R$ 0,00 (frete)</p>
	<img src="/img/trocar_valor.png" style="float:left; width:15vw; margin-left: 10vw; margin-top: 2vh" />
</div>

<img id="barra_valor" class="unselectable" src="/img/barra_valor.png" style="width:40vw; margin-top: 75vh; margin-left: 7.5vw; position: absolute; opacity: 1"/>

<img id="direita_pedido" class="unselectable" src="/img/direita_final.png" style="width:35vw; margin-top: 5vh; margin-left: 55vw; position: absolute; opacity: 1"/>



<div id="barra_inferior" style="margin-top: 90vh; position: absolute; width: 100vw; height: 2vh;">
		<img id="linha_inferior" class="unselectable"  src="/img/linha_inferior.png" style="height: 1vh; width: 100vw;"/>
		<p class="unselectable" style="margin-left: 2vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Copyright © 2017 - <span style="font-family: KozukaGothicPro-Bold">Gold Mídia Digital.</span> Todos os direitos reservados.</a></p>
		<p style="margin-left: 15vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>O que é o Zap Vupt?</a></p>
		<p style="margin-left: 10vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Perguntas Frequentes</a></p>
		<p style="margin-left: 10vw; margin-top: 2vh; float: left"><a href='http://goldmidia.com/'>Contato</a></p>
</div>
</body>
</html>

	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="http://demos.9lessons.info/ajaxLoginServer/js/jquery.ui.shake.js"></script>