$(document).ready(function(){
$("#submit").click(function(){
var username = $("#username").val();
var password = $("#password").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'username='+ username + '&password='+ password;
if(username==''||password=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "login.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});