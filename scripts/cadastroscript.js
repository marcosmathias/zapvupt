function redirect(){location.href='index.php'};

$(document).ready(function() {
			$('#formulario_cadastro').submit(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
			var pnome=$("#pnome").val();
			var sobrenome=$("#sobrenome").val();
			var email=$("#email").val();
			var celular=$("#celular").val();
		    var dataString = 'username='+username+'&password='+password+'&pnome='+pnome+'&sobrenome='+sobrenome+'&email='+email+'&celular='+celular;
			
			$.ajax({
            type: "POST",
            url: "cadastro.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#loadercadastro").css('display','inline');},
			success: function(result){
			$("#loadercadastro").css('display','none');
            if(result == "true")
			{
			 $("#errocadastro").html("<span style='color:#00cc00; font-family: KozukaGothicPro-Bold'>Cadastro realizado com sucesso! Redirecionando para a página inicial.</span>");
			 setTimeout(redirect,5000);			 
            }
			else if(result == "false")
            {
             $("#errocadastro").html("<span style='color:#cc0000; font-family: KozukaGothicPro-Bold'>Erro:</span> Login ou senha incorretos. ");
             $("#errocadastro").shake();
			}
			else if(result == 3)
			{
             $("#errocadastro").html("<span style='color:#cc0000'>Error:</span> Falha de DB 2. ");
            }
			else
            {
             $("#errocadastro").val('Login')
			 $("#errocadastro").html("<span style='color:#cc0000'>Erro:</span> O login, email ou celular desejados já estão registrados. Por favor, utilize outro login, email ou celular.");
            }
            }
            });

			return false;
			});
			
				
			});