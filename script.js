$(document).ready(function(){
$("#submit").click(function(){
var email = $("#email").val();
var msg = $("#msg").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&email1='+ email + '&msg1='+ msg;
if(email==''||msg=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "submit.php",
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
