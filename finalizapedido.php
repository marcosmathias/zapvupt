<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>

	
	<title>Zap Vupt - O seu supermercado móvel</title>
	<link rel="stylesheet" type="text/css" href="styles/estilo.css">
</head>

<body>
	
	
		<img id="fundo4" class="unselectable" src="/img/fundo4.jpg" style="width:100vw; position:absolute; margin: 0; overflow: hidden"/>
		<p class="unselectable" id="descricao_login" style="width: 30vw; font-family: KozukaGothicPro-ExtraLight; position: absolute; margin-left: 35vw; margin-top: 23vh; text-align: center; line-height: 5vh; font-size: x-large">Para finalizar o seu pedido, <span style="font-family: KozukaGothicPro-Bold">complete o seu endereço.</span></p>
		
		<img id="logo_completa" class="unselectable" src="/img/logo_completa.png" style="width:30vw; position:absolute; margin-left: 35vw; margin-top: 3vh; overflow: hidden"/>
		
		<div id="box_cadastro" style="overflow: hidden;">
		<form id="formulario_cadastro" style="overflow: hidden; width: 50vw; font-family: KozukaGothicPro-ExtraLight; position: absolute; margin-left: 25vw; margin-top: 35vh; line-height: 2vh; font-size: large; text-align:center;">
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 20vw; display: table-cell;">CEP</label>
				<input id="CEP" name="CEP" placeholder="Digite aqui seu CEP" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 20vw; display: table-cell;">Rua</label>
				<input id="rua" name="rua" placeholder="Digite aqui sua rua" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
				</p>
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 20vw; display: table-cell;">Nº</label>
				<input id="numero" name="numero" placeholder="Digite aqui o nº do local para entrega" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 20vw; display: table-cell;">Quadra/lote</label>
				<input id="quadralote" name="quadralote" placeholder="Digite aqui a quadra/lote do local para entrega" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>
			<p style="display: table-row; line-height: 8vh; margin-left: 1vw">
				<label class="unselectable" style="width: 20vw; display: table-cell;">E-mail para contato</label>
				<input id="complemento" name="complemento" placeholder="Digite aqui o complemento (apartamento, prédio, etc)" type="text" style="border-radius: 5px; color: #000000; width: 20vw; height:5vh; display: table-cell;">
			</p>			
	
	
			<img id="finalizapedido" src="/img/finalizar_pedido.png" style="width: 15vw; margin-top: 3vh;" onclick="redirectpedido()" />
			
			<div id="errocadastro" style="margin-top: 3vh; text-align: center; font-size: small; line-height:2vh;">
			</div>
		</form>
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
	<script src="/scripts/unselect.js"></script>
	
</body>
