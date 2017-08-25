$(document).ready(function() {
			$('#formulario_login').submit(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
		    var dataString = 'username='+username+'&password='+password;
		    if($.trim(username).length>0 && $.trim(password).length>0)
			{
			$.ajax({
            type: "POST",
            url: "login.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#loader").css('display','inline');},
            success: function(result){
			$("#loader").css('display','none');
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
						
			else
			{
				$("#loader").css('display','none');
				$("#error").html("<span style='color:#cc0000; font-family: KozukaGothicPro-Bold'>Erro:</span> Você deve informar um login e senha para continuar. ");
				$("#error").shake();
			}
			return false;
			});
			
				
			});