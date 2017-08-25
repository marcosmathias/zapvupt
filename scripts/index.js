function redirectcadastro(){location.href='paginacadastro.php'};
function redirectpedido(){location.href='previapedido.php'};

function moverCarrinho(){
	var w = window.innerWidth;
	var h = window.innerHeight;
	
	//movimento do carrinho e do arroba
	var pos = -15;
	var id = setInterval(frame, 10);
	function frame() {
    if (pos == 30.0) {
      clearInterval(id);
    } else {
      pos = (pos + 0.5); 
      document.getElementById("z_carrinho").style.marginLeft = pos + 'vw';
	  if (pos > 20)
	  {
		  document.getElementById("arroba_carrinho").style.marginLeft = (43-(pos/3)) + 'vw';
		  document.getElementById("arroba_carrinho").style.opacity = ((pos-20)/10);
	  }
	}
	}
	
	//posicionamento white ball logo
	var carrinho = document.getElementById("z_carrinho").offsetWidth;
	var largura = document.getElementById("white_ball").offsetWidth;
	var margem = document.getElementById("white_ball").offsetLeft;
	document.getElementById("white_ball").style.marginLeft = (((carrinho-largura)/2)+margem) + 'px';
	var carrinho = document.getElementById("arroba_carrinho").offsetHeight;
	var altura = document.getElementById("white_ball").offsetHeight;
	var margem = document.getElementById("white_ball").offsetTop;
	document.getElementById("white_ball").style.marginTop = (((carrinho-altura)/2)+margem) + 'px';
	
	//posicionamento gray ball logo
	var carrinho = document.getElementById("z_carrinho").offsetWidth;
	var largura = document.getElementById("gray_ball").offsetWidth;
	var margem = document.getElementById("gray_ball").offsetLeft;
	document.getElementById("gray_ball").style.marginLeft = (((carrinho-largura)/2)+margem) + 'px';
	var carrinho = document.getElementById("arroba_carrinho").offsetHeight;
	var altura = document.getElementById("gray_ball").offsetHeight;
	var margem = document.getElementById("gray_ball").offsetTop;
	document.getElementById("gray_ball").style.marginTop = (((carrinho-altura)/2)+margem) + 'px';
	
	document.getElementById("logo_menor").style.marginTop = document.getElementById("white_ball").offsetTop;
	document.getElementById("logo_menor").style.marginLeft = document.getElementById("white_ball").offsetLeft;
	document.getElementById("logo_menor").style.width = (document.getElementById("gray_ball").offsetLeft)-(document.getElementById("white_ball").offsetLeft)+(document.getElementById("white_ball").offsetWidth);
	document.getElementById("logo_menor").style.height = (document.getElementById("gray_ball").offsetTop)-(document.getElementById("white_ball").offsetTop)+(document.getElementById("white_ball").offsetHeight);
	
	document.getElementById("texto_logo").style.height = (document.getElementById("logo_menor").offsetHeight)/2;
	document.getElementById("texto_logo").style.marginTop = (document.getElementById("white_ball").offsetTop)+((document.getElementById("logo_menor").offsetHeight)/4);
	
	var altura_textologo = document.getElementById("texto_logo").offsetHeight;
	var margemtopo_textologo = document.getElementById("texto_logo").offsetTop;
	var altura_logo = document.getElementById("logo_menor").offsetHeight;
	var margemtopo_logo = document.getElementById("logo_menor").offsetTop;
	
	setTimeout(apagar,2500);
		
	function apagar(){
		document.getElementById("gray_ball").remove();
		document.getElementById("white_ball").remove();
		document.getElementById("z_carrinho").remove();
		document.getElementById("arroba_carrinho").remove();
		document.getElementById("logo_menor").style.opacity = '1';
		document.getElementById("texto_logo").style.opacity = '1';		
	}
	
	var altura_textologo = (((document.getElementById("texto_logo").offsetHeight)/(h))*100);
	var largura_textologo = (((document.getElementById("texto_logo").offsetWidth)/(w))*100);
	var margemtopo_textologo = (((document.getElementById("texto_logo").offsetTop)/(h))*100);
	var altura_logo = (((document.getElementById("logo_menor").offsetHeight)/(h))*100);
	var largura_logo = (((document.getElementById("logo_menor").offsetWidth)/(w))*100);
	var margemtopo_logo = (((document.getElementById("logo_menor").offsetTop)/(h))*100);
	
	setTimeout(mover_cima,3500);
	setTimeout(fade_barrainferior,3500);
	
	var ratio = (document.getElementById("texto_logo").offsetHeight)/(document.getElementById("texto_logo").offsetWidth);
	var ratio2 = (document.getElementById("texto_logo").offsetWidth)/(document.getElementById("logo_menor").offsetWidth);
	
	function mover_cima(){
		document.getElementById("logo_menor").style.width = ((document.getElementById("logo_menor").offsetWidth)-1) + 'px';
		document.getElementById("texto_logo").style.width = ((document.getElementById("texto_logo").offsetWidth)-2) + 'px';
		document.getElementById("logo_menor").style.marginTop = ((document.getElementById("logo_menor").offsetTop)-5) + 'px';
		document.getElementById("texto_logo").style.marginTop = ((document.getElementById("texto_logo").offsetTop)-5) + 'px';
		document.getElementById("logo_menor").style.height = ((document.getElementById("logo_menor").offsetHeight)-1) + 'px';
		document.getElementById("texto_logo").style.height = (((document.getElementById("texto_logo").offsetWidth)*(ratio))) + 'px';
		document.getElementById("logo_menor").style.marginLeft = ((document.getElementById("logo_menor").offsetLeft)+0.5) + 'px';
		document.getElementById("texto_logo").style.marginLeft = ((document.getElementById("texto_logo").offsetLeft)-0.5) + 'px';

		if((((document.getElementById("logo_menor").offsetTop)/(h))*100) > ('3')){
			setTimeout(mover_cima,10);
		}	
		else{
			setTimeout(fade_botao,600);
		}
	}
	
	var inicio = 0;
	
	function fade_barrainferior(){
		if (inicio < '1'){
			document.getElementById("barra_inferior").style.opacity = inicio;
			inicio = (inicio + 0.04);
			setTimeout(fade_barrainferior,20);
		}
		else{
			inicio = 0;
		}
	}
	
	var vamos = document.getElementById("botao_vamos");
		
	function fade_botao(){
		if (inicio < '1'){
			document.getElementById("botao_vamos").style.opacity = inicio;
			document.getElementById("descricao_botao_vamos").style.opacity = inicio;
			inicio = (inicio + 0.04);
			setTimeout(fade_botao,20);
		}
	}
	
	document.getElementById("botao_vamos").onclick = carrosel_login;
	
	var inicio2 = 0;
	
	function carrosel_login(){
		if ((((document.getElementById("descricao_login").offsetLeft)/w)*100) > 34){
			inicio2 = inicio2 + 0.02;
			document.getElementById("botao_vamos").style.marginLeft = document.getElementById("botao_vamos").offsetLeft - 30;
			document.getElementById("descricao_botao_vamos").style.marginLeft = document.getElementById("botao_vamos").offsetLeft - 30;
			document.getElementById("descricao_login").style.marginLeft = ((((document.getElementById("descricao_login").offsetLeft)/w)*100) - 1) + 'vw';
			document.getElementById("descricao_login").style.marginLeft = ((((document.getElementById("descricao_login").offsetLeft)/w)*100) - 1) + 'vw';
			document.getElementById("formulario_login").style.marginLeft = ((((document.getElementById("formulario_login").offsetLeft)/w)*100) - 1.7) + 'vw';
			document.getElementById("cadastros").style.marginLeft = ((((document.getElementById("cadastros").offsetLeft)/w)*100) - 1.7) + 'vw';
			document.getElementById("app_store").style.marginLeft = ((((document.getElementById("app_store").offsetLeft)/w)*100) - 1.7) + 'vw';
			document.getElementById("google_play").style.marginLeft = ((((document.getElementById("google_play").offsetLeft)/w)*100) - 1.7) + 'vw';
			document.getElementById("baixe_aplicativo").style.marginLeft = ((((document.getElementById("baixe_aplicativo").offsetLeft)/w)*100) - 1.7) + 'vw';
			document.getElementById("fundo2").style.opacity = inicio;
			setTimeout(carrosel_login,20);
		}
		else
		{
			document.getElementById("botao_vamos").remove();
			document.getElementById("descricao_botao_vamos").remove();
		}
	}
}

