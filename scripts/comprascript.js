$(document).ready(function() {
			$('#produto1').submit(function()
			{
			alert('ok');
			var quantidade_produto1=$("#quantidade_produto1").val();
			var username=$login_session;
		    var dataString = 'username='+username+'&quantidade_produto1='+quantidade_produto1;
			alert(dataString);
			$.ajax({
            type: "POST",
            url: "quantidadeproduto.php",
            data: dataString,
            cache: false,
            success: function(result){
			alert(result)
            if(result == "true")
            {
             
            }
			else if(result == "false")
            {
             $("#error").html("<span style='color:#cc0000; font-family: KozukaGothicPro-Bold'>Erro:</span> Login ou senha incorretos. ");
             $("#error").shake();
			}
			else if(result == 3)
			{
             $("#error").html("<span style='color:#cc0000'>Error:</span> Falha de DB 2. ");
            }
			else
            {
             $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
			});
			
			$('#produto2').submit(function()
			{
			var quantidade_produto2=$("#quantidade_produto2").val();
			var username=$login_sessio;
		    var dataString = 'username='+username+'&quantidade_produto2='+quantidade_produto1;
			$.ajax({
            type: "POST",
            url: "quantidadeproduto.php",
            data: dataString,
            cache: false,
            success: function(result){
            if(result == "true")
            {
             location.href='profile.php';
            }
			else if(result == "false")
            {
             $("#error").html("<span style='color:#cc0000; font-family: KozukaGothicPro-Bold'>Erro:</span> Login ou senha incorretos. ");
             $("#error").shake();
			}
			else if(result == 3)
			{
             $("#error").html("<span style='color:#cc0000'>Error:</span> Falha de DB 2. ");
            }
			else
            {
             $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
			});
			
			$('#produto3').submit(function()
			{
			var quantidade_produto1=$("#quantidade_produto3").val();
			var username=$login_sessio;
		    var dataString = 'username='+username+'&quantidade_produto3='+quantidade_produto1;
			$.ajax({
            type: "POST",
            url: "quantidadeproduto.php",
            data: dataString,
            cache: false,
            success: function(result){
			alert(result);
            if(result == "true")
            {
             location.href='profile.php';
            }
			else if(result == "false")
            {
             $("#error").html("<span style='color:#cc0000; font-family: KozukaGothicPro-Bold'>Erro:</span> Login ou senha incorretos. ");
             $("#error").shake();
			}
			else if(result == 3)
			{
             $("#error").html("<span style='color:#cc0000'>Error:</span> Falha de DB 2. ");
            }
			else
            {
             $("#login").val('Login')
			 $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
            }
            }
            });
			
			}
			return false;
			});
			
				
			});