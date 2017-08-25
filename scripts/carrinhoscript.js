var w = window.innerWidth;
var h = window.innerHeight;

$(document).ready(function() {
	
			document.getElementById("adicionar_item_botao").onclick = function(){
				fade_para_catalogo();
			}

			document.getElementById("retornar_botao").onclick = function(){
				fade_para_carrinho();
			}
			
			document.getElementById("esvaziar_carrinho").onclick = function(){
				$.ajax({
				type: "POST",
				url: "esvaziacarrinho.php",
				cache: false,
				success: function(result){
					alert('Carrinho esvaziado com sucesso!');
					$.ajax({
					type: "POST",
					url: "redo_valor.php",
					cache: false,
					success: function(result){
					$("#valor_compra").html("R$ " + result);
					$("#valor_compra_carrinho").html("R$ " + result);
					}
					})
				}
            });
			}
			
			$('#produto1').submit(function()
			{
			var quantidade_produto1=$("#quantidade_produto1").val();
		    var dataString = 'quantidade_produto1='+quantidade_produto1;
			$.ajax({
            type: "POST",
            url: "quantidade_produto1.php",
            data: dataString,
            cache: false,
            success: function(result){
			console.log(result)
            if(result == "true")
            {
             alert('Item adicionado com sucesso!');
			 $.ajax({
            type: "POST",
            url: "redo_valor.php",
            data: dataString,
            cache: false,
			success: function(result){
				$("#valor_compra").html("R$ " + result);
				$("#valor_compra_carrinho").html("R$ " + result);
			}
            });
            }
			else
            {
			alert(result);
            }
            },			
			error: function(xhr, status, error) {
			  var err = eval("(" + xhr.responseText + ")");
			  alert(err.Message);
			}
            });
			
			return false;
			});
			
			$('#produto2').submit(function()
			{
			var quantidade_produto2=$("#quantidade_produto2").val();
		    var dataString = 'quantidade_produto2='+quantidade_produto2;
			$.ajax({
            type: "POST",
            url: "quantidade_produto2.php",
            data: dataString,
            cache: false,
            success: function(result){
			console.log(result)
            if(result == "true")
            {
			alert('Item adicionado com sucesso!');
			 $.ajax({
            type: "POST",
            url: "redo_valor.php",
            data: dataString,
            cache: false,
			success: function(result){
				$("#valor_compra").html("R$ " + result);
				$("#valor_compra_carrinho").html("R$ " + result);
            }
			});
			}
			else
            {
			alert(result);
            }
            },			
			error: function(xhr, status, error) {
			  var err = eval("(" + xhr.responseText + ")");
			  alert(err.Message);
			}
            });
			return false;
			});
			
			$('#produto3').submit(function()
			{
			var quantidade_produto1=$("#quantidade_produto3").val();
		    var dataString = 'quantidade_produto3='+quantidade_produto1;
			$.ajax({
            type: "POST",
            url: "quantidade_produto3.php",
            data: dataString,
            cache: false,
            success: function(result){
			console.log(result)
            if(result == "true")
            {
             alert('Item adicionado com sucesso!');
			 $.ajax({
			type: "POST",
            url: "redo_valor.php",
            data: dataString,
            cache: false,
			success: function(result){
				$("#valor_compra").html("R$ " + result);
				$("#valor_compra_carrinho").html("R$ " + result);
            }
			});
			}
			else
            {
			alert(result);
            }
            },			
			error: function(xhr, status, error) {
			  var err = eval("(" + xhr.responseText + ")");
			  alert(err.Message);
			}
            });
			return false;
			});
			
			});


var elementoscarrinho = document.getElementsByClassName("carrinho");
var elementoscatalogo = document.getElementsByClassName("catalogo");
var botoes = document.getElementsByClassName("botao");
var nomes = document.getElementsByClassName("nome");

var i = 0;
var inicio = 1;


	
function fade_para_catalogo(){
	console.log('ok');
	if (inicio > '-0.04'){
			for (i = 0; i < elementoscarrinho.length; i++) {
				elementoscarrinho[i].style.opacity = inicio;
			}
			inicio = (inicio - 0.04);
			setTimeout(fade_para_catalogo,20);
	}
	else{
		for (i = 0; i < elementoscarrinho.length; i++) {
			elementoscarrinho[i].style.display = 'none';
			setTimeout(ir_para_catalogo,1000);
			}
			inicio=0;
	}
}

function ir_para_catalogo(){
	if (inicio < '1'){
	for (i = 0; i < elementoscatalogo.length; i++) {
			elementoscatalogo[i].style.display = 'inline';
			elementoscatalogo[i].style.opacity = inicio;
			}
			inicio = (inicio + 0.01);
			setTimeout(ir_para_catalogo,20);
	}
	else{
			inicio=1;
	}
	}
	
	function fade_para_carrinho(){
	if (inicio > '-0.04'){
			for (i = 0; i < elementoscatalogo.length; i++) {
				elementoscatalogo[i].style.opacity = inicio;
			}
			inicio = (inicio - 0.04);
			setTimeout(fade_para_carrinho,20);
	}
	else{
		for (i = 0; i < elementoscatalogo.length; i++) {
			elementoscatalogo[i].style.display = 'none';
			setTimeout(ir_para_carrinho,1000);
			}
			inicio=0;
	}
}

function ir_para_carrinho(){
	if (inicio < '1'){
	for (i = 0; i < elementoscarrinho.length; i++) {
			elementoscarrinho[i].style.display = 'inline';
			elementoscarrinho[i].style.opacity = inicio;
			}
			inicio = (inicio + 0.01);
			setTimeout(ir_para_carrinho,20);
	}
	else{
			inicio=1;
	}
	}

document.getElementById("finalizar_botao").onclick = function(){
	location.href='finalizapedido.php'
}

function resetcorbotao(){
	for (i = 0; i < botoes.length; i++) {
				botoes[i].style.backgroundColor = '#106492';
			}
}

function resetcornome(){
	for (i = 0; i < nomes.length; i++) {
				nomes[i].style.color = '#ffffff';
			}
}

document.getElementById("categoria1").onclick = function(){
	resetcorbotao();
	resetcornome();
	document.getElementById("categoria1").style.backgroundColor = '#ffffff'; 
	document.getElementById("nome1").style.color = '#106492'; 
}

document.getElementById("categoria2").onclick = function(){
	resetcorbotao();
	resetcornome();
	document.getElementById("categoria2").style.backgroundColor = '#ffffff'; 
	document.getElementById("nome2").style.color = '#106492'; 
}

document.getElementById("categoria3").onclick = function(){
	resetcorbotao();
	resetcornome();
	document.getElementById("categoria3").style.backgroundColor = '#ffffff'; 
	document.getElementById("nome3").style.color = '#106492'; 
}

document.getElementById("categoria4").onclick = function(){
	resetcorbotao();
	resetcornome();
	document.getElementById("categoria4").style.backgroundColor = '#ffffff'; 
	document.getElementById("nome4").style.color = '#106492'; 
}

document.getElementById("categoria5").onclick = function(){
	resetcorbotao();
	resetcornome();
	document.getElementById("categoria5").style.backgroundColor = '#ffffff'; 
	document.getElementById("nome5").style.color = '#106492'; 
}

document.getElementById("categoria6").onclick = function(){
	resetcorbotao();
	resetcornome();
	document.getElementById("categoria6").style.backgroundColor = '#ffffff'; 
	document.getElementById("nome6").style.color = '#106492'; 
}