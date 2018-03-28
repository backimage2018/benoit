//module ajax pour site Eshop @Benoît//
//ajax pour envoie newsletter

$("#newsletterEnvoi").click(function(event){

	event.preventDefault();
$.ajax({
 url : '/newsletter',
 type : 'POST',
 data: {email:$('#newsletter_input').val()},

 }).done(function(result){

 	$('#newsletterEnvoi').html('merci')})
		
     
    
 
});

//Redirection newsletter
$('#redirection').click(function(event) {
	   event.preventDefault();
  $('html,body').animate({scrollTop: $("#newsletter_input").offset().top}, '600');
  $("#newsletter_input").focus();
});  

