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

<img id="logo_menor" class="unselectable" src="/img/logo_menor.png" style="height: 20vh; margin-top: 5vh; margin-left: 5vw; position: absolute; opacity: 1"/>

<p class="carrinho" id="welcome" style="color:#ffffff; position:absolute; margin-left: 20vw; margin-top: 10vh; font-size: xx-large; font-family: KozukaGothicPro-ExtraLight">Bem-vindo, <span style="font-family: KozukaGothicPro-Bold" id="username"><?php echo $nome; ?>.</span></p>
<a class="carrinho" href="editarperfil.php"><img id="logout_botao" style="height:15vh; position: absolute; margin-left: 85vw; margin-top:10vh" src="/img/logout_icon.png" /></a>
<a class="carrinho" href="pedidos.php"><img id="profile_botao" style="height:15vh; position: absolute; margin-left: 55vw; margin-top:10vh" src="/img/profile_icon.png" /></a>
<a class="carrinho" href="logout.php"><img id="pedidos_botao" style="height:15vh; position: absolute; margin-left: 68vw; margin-top:10vh" src="/img/pedidos_icon.png" /></a>
<img class="carrinho" id="adicionar_item_botao" style="width:30vw; position: absolute; margin-left: 35vw; margin-top:30vh" src="/img/botao_adicionar_item.png" onclick="fade_para_catalogo()"/>
<img class="carrinho" id="carrinho" style="width:40vw; position: absolute; margin-left: 18vw; margin-top:40vh" src="/img/carrinho.png" />



<div class="catalogo" id="fundo_lista" style="position: absolute; margin-top: 10vh; margin-left: 20vw; width: 75vw; height: 15vh; background-color: rgba(255,255,255,0.5); border-radius: 2vh; text-align: center">
	<div class="catalogo botao" id="categoria1" style="float:left; margin-top: 5vh; margin-left: 2vw; width: 10vw; height: 5vh; background-color: #106492; border-radius: 1vh; border-color: #ffffff; border-style: solid; border-width: 2px; text-align: center">
		<span class="catalogo nome" id="nome1" style="font-family: KozukaGothicPro-Medium; color:#ffffff; font-size:1.3vw;">Cesta Básica</span>
	</div>
	<div class="catalogo botao" id="categoria2" style="float:left; margin-top: 5vh; margin-left: 2vw; width: 10vw; height: 5vh; background-color: #106492; border-radius: 1vh; border-color: #ffffff; border-style: solid; border-width: 2px; text-align: center">
		<span class="catalogo nome" id="nome2" style="font-family: KozukaGothicPro-Medium; color:#ffffff; font-size:1.3vw;">Açougue</span>
	</div>
	<div class="catalogo botao" id="categoria3" style="float:left; margin-top: 5vh; margin-left: 2vw; width: 10vw; height: 5vh; background-color: #106492; border-radius: 1vh; border-color: #ffffff; border-style: solid; border-width: 2px; text-align: center">
		<span class="catalogo nome" id="nome3" style="font-family: KozukaGothicPro-Medium; color:#ffffff; font-size:1.3vw;">Bebidas</span>
	</div>
	<div class="catalogo botao" id="categoria4" style="float:left; margin-top: 5vh; margin-left: 2vw; width: 10vw; height: 5vh; background-color: #106492; border-radius: 1vh; border-color: #ffffff; border-style: solid; border-width: 2px; text-align: center">
		<span class="catalogo nome" id="nome4" style="font-family: KozukaGothicPro-Medium; color:#ffffff; font-size:1.3vw;">Congelados</span>
	</div>
	<div class="catalogo botao" id="categoria5" style="float:left; margin-top: 5vh; margin-left: 2vw; width: 10vw; height: 5vh; background-color: #106492; border-radius: 1vh; border-color: #ffffff; border-style: solid; border-width: 2px; text-align: center">
		<span class="catalogo nome" id="nome5" style="font-family: KozukaGothicPro-Medium; color:#ffffff; font-size:1.3vw;">Grãos</span>
	</div>
	<div class="catalogo botao" id="categoria6" style="float:left; margin-top: 5vh; margin-left: 2vw; width: 10vw; height: 5vh; background-color: #106492; border-radius: 1vh; border-color: #ffffff; border-style: solid; border-width: 2px; text-align: center">
		<span class="catalogo nome" id="nome6" style="font-family: KozukaGothicPro-Medium; color:#ffffff; font-size:1.3vw;">Guloseimas</span>
	</div>
</div>

<div class="catalogo" id="produtos" style="position: absolute; margin-top: 30vh; margin-left:15vw; width: 75vw; height: 15vh; text-align: center; display: none;">
	<form class="catalogo" id="produto1" style="float:left; margin-top: 0vh; margin-left: 2vw; width: 20vw; height: 45vh; background-color: rgba(255,255,255,0.7);">
		<img class="catalogo" id="imagem_produto1" style="float:left; margin-left: 1vw; margin-top: 1vh;" src="/img/acucar.png" />
		<p class="catalogo" id="descricao_produto1" style="float: left; margin-left: 2vw; margin-top: 1vh; color:#000000; font-family:KozukaGothicPro-Medium; font-size: x-large">Açúcar Cristal</p>
		<p class="catalogo" id="preco_produto1" style="float: left; margin-left: 5vw; margin-top: -2vh;; color:#106492; font-family:KozukaGothicPro-Bold; font-size: large">R$ 4,99</p>
		<p class="catalogo" style="float: left; margin-top:0vh; color: #bb0000; margin-left: 3vw; font-family: KozukaGothicPro-Bold;">Quantidade:</p><select id="quantidade_produto1" size=1 style="margin-top: 0vh; color:#106492; float: left; margin-left: 2vw; font-family: KozukaGothicPro-Bold;"><OPTION>1<OPTION>2<OPTION>3<OPTION>4<OPTION>5</select>
		<p class="catalogo" style="float: left; margin-top:5vh; color: #bb0000; margin-left: -9.5vw; font-family: KozukaGothicPro-Bold;">Peso:</p><select id="peso_produto1" size=1 style="margin-top: -1vh; color:#106492; float: left; margin-left: 8.5vw; font-family: KozukaGothicPro-Bold;"><OPTION>2 KG</select>
		<button id="adicionar_produto1" type="submit" style="border-style: none; background-color: transparent; float: left; width: 10vw; margin-left: 5vw; margin-top: 5vh;"><img class="catalogo" style="float: left; width: 10vw;" src="/img/adicionar_ao_carrinho.png" /></button>
	</form>
	<form class="catalogo" id="produto2" style="float:left; margin-top: 0vh; margin-left: 2vw; width: 20vw; height: 45vh; background-color: rgba(255,255,255,0.7);">
		<img class="catalogo" id="imagem_produto2" style="float:left; margin-left: 1vw; margin-top: 1vh;" src="/img/arroz.png" />
		<p class="catalogo" id="descricao_produto2" style="float: left; margin-left: 2vw; margin-top: 1vh; color:#000000; font-family:KozukaGothicPro-Medium; font-size: x-large">Arroz Cristal</p>
		<p class="catalogo" id="preco_produto2" style="float: left; margin-left: 5vw; margin-top: -2vh;; color:#106492; font-family:KozukaGothicPro-Bold; font-size: large">R$ 10,99</p>
		<p class="catalogo" style="float: left; margin-top:0vh; color: #bb0000; margin-left: 3vw; font-family: KozukaGothicPro-Bold;">Quantidade:</p><select id="quantidade_produto2" size=1 style="margin-top: 0vh; color:#106492; float: left; margin-left: 2vw; font-family: KozukaGothicPro-Bold;"><OPTION>1<OPTION>2<OPTION>3<OPTION>4<OPTION>5</select>
		<p class="catalogo" style="float: left; margin-top:5vh; color: #bb0000; margin-left: -9.5vw; font-family: KozukaGothicPro-Bold;">Peso:</p><select id="peso_produto2" size=1 style="margin-top: -1vh; color:#106492; float: left; margin-left: 8.5vw; font-family: KozukaGothicPro-Bold;"><OPTION>5 KG</select>
		<button id="adicionar_produto=2" type="submit" style="border-style: none; background-color: transparent; float: left; width: 10vw; margin-left: 5vw; margin-top: 5vh;"><img class="catalogo" style="float: left; width: 10vw;" src="/img/adicionar_ao_carrinho.png" /></button>
	</form>
	<form class="catalogo" id="produto3" style="float:left; margin-top: 0vh; margin-left: 2vw; width: 20vw; height: 45vh; background-color: rgba(255,255,255,0.7);">
		<img class="catalogo" id="imagem_produto3" style="float:left; margin-left: 1vw; margin-top: 1vh;" src="/img/coxa.png" />
		<p class="catalogo" id="descricao_produto3" style="float: left; margin-left: 2vw; margin-top: 1vh; width: 10vw; color:#000000; font-family:KozukaGothicPro-Medium; font-size: small">Coxa/Sobrecoxa Frango Superfrango</p>
		<p class="catalogo" id="preco_produto3" style="float: left; margin-left: 5vw; margin-top: -2vh;; color:#106492; font-family:KozukaGothicPro-Bold; font-size: large">R$ 8,99</p>
		<p class="catalogo" style="float: left; margin-top:0vh; color: #bb0000; margin-left: 3vw; font-family: KozukaGothicPro-Bold;">Quantidade:</p><select id="quantidade_produto3" size=1 style="margin-top: 0vh; color:#106492; float: left; margin-left: 2vw; font-family: KozukaGothicPro-Bold;"><OPTION>1<OPTION>2<OPTION>3<OPTION>4<OPTION>5</select>
		<p class="catalogo" style="float: left; margin-top:5vh; color: #bb0000; margin-left: -9.5vw; font-family: KozukaGothicPro-Bold;">Peso:</p><select id="peso_produto3" size=1 style="margin-top: -1vh; color:#106492; float: left; margin-left: 8.5vw; font-family: KozukaGothicPro-Bold;"><OPTION>1 KG</select>
		<button id="adicionar_produto3" type="submit" style="border-style: none; background-color: transparent; float: left; width: 10vw; margin-left: 5vw; margin-top: 5vh;"><img class="catalogo" style="float: left; width: 10vw;" src="/img/adicionar_ao_carrinho.png" /></button>
	</form>
</div>
		
		
		<img class="catalogo" id="retornar_botao" style="position: absolute; float: left; width: 30vw; margin-left: 35vw; margin-top: 80vh;" src="/img/botao_retornar.png" />
		<img class="carrinho" id="finalizar_botao" style="position: absolute; float: left; width: 15vw; margin-left: 80vw; margin-top: 75vh;" src="/img/finalizar_pedido.png" />
		<img class="carrinho" id="esvaziar_carrinho" style="position: absolute; float: left; width: 20vw; margin-left: 75vw; margin-top: 30vh;" src="/img/esvaziar_carrinho.png" />
		<img class="carrinho" id="atualizar_carrinho" style="position: absolute; float: left; width: 20vw; margin-left: 75vw; margin-top: 65vh;" src="/img/atualizar_carrinho.png" onclick="document.location.reload(false);" />

		<p class="catalogo" id="valor_compra" style="position: absolute; float: left; margin-left: 57vw; margin-top:81vh; color:#ffffff; font-family:KozukaGothicPro-Bold;">R$ <?php echo $valor; ?></p>
		<p class="carrinho" id="valor_compra_carrinho" style="position: absolute; float: left; margin-left: 20vw; margin-top:30vh; color:#ffffff; font-family:KozukaGothicPro-Bold; font-size:x-large;">R$ <?php echo $valor; ?></p>
		
		<div style="position: absolute; margin-top:45vh; width:40vw; margin-left:32vw; text-align: center">
			<p class="carrinho" id="carrinhoitem1" style=" float: left; color:#ffffff; font-family:KozukaGothicPro-Bold;"><?php if ($quantidade1 > 0) echo "Açúcar Cristal 2KG:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   $quantidade1  unidade(s)   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  R$ $valor1"; else echo "" ?></p>
			<p class="carrinho" id="carrinhoitem2" style=" float: left; color:#ffffff; font-family:KozukaGothicPro-Bold;"><?php if ($quantidade2 > 0) echo "Arroz Cristal 5KG:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   $quantidade2 unidade(s)   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   R$ $valor2"; else echo "" ?></p>
			<p class="carrinho" id="carrinhoitem3" style=" float: left; color:#ffffff; font-family:KozukaGothicPro-Bold;"><?php if ($quantidade3 > 0) echo "Coxa/Sobrecoxa Frango Superfrango 1KG:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   $quantidade3 unidade(s)   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   R$ $valor3"; else echo"" ?></p>
		</div>

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

	<script src="/scripts/carrinhoscript.js"></script>