$(document).ready(function(){
$("#ajax-contact-form").submit(function(){

var str = $(this).serialize();

   $.ajax({
   type: "POST",
   url: "http://teambuktoo.com/wp-content/themes/teambuktoo/contact_form/contact.php",
   data: str,
   success: function(msg){
    
$("#note").ajaxComplete(function(event, request, settings){

if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
{
result = '<div class="notification_ok">Thanks your message is sent with succes. I will be in touch with you as soon as possible!</div>';
$("#fields").hide();
}
else
{
result = msg;
}

$(this).hide();
$(this).html(result).slideDown("slow");

$(this).html(result);

});

}

 });

return false;

});

});
