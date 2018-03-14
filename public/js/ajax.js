
$('#redirection').click(function(event) {
	   event.preventDefault();
  $('html,body').animate({scrollTop: $("#newsletter_input").offset().top}, '600');
  $("#newsletter_input").focus();
});  

$("#newsletterEnvoi").click(function(event){

	event.preventDefault();
$.ajax({
 url : '/newsletter',
 type : 'POST',
 data: {email:$('#newsletter_input').val()},
     

 }).done(function(result){
		console.log("ok");
 	$('#newsletterEnvoi').html('merci')})
		
     
    
 
});



$("#reviewsend").click(function(event){

	event.preventDefault();
	 var data_form = $('#formulaire').serialize();
	
$.ajax({
 url : '/review',
 type : 'POST',
 data: data_form,
 
 
 

 }).done(function(result){
 	 console.log(data_form);
 	$('#reviewsend').html('merci')})

 	

});
