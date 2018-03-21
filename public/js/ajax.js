
//Redirection newsletter
$('#redirection').click(function(event) {
	   event.preventDefault();
  $('html,body').animate({scrollTop: $("#newsletter_input").offset().top}, '600');
  $("#newsletter_input").focus();
});  

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


//ajax pour envoie review
$("#reviewsend").click(function(event){

	event.preventDefault();
	 var data_form = $('#formulaire').serialize();
	
$.ajax({
 url : '/review',
 type : 'POST',
 data: data_form,
 }).done(function(result){
 
 	$('#reviewsend').html('merci')})

 	

});

//ajax pour envoie panier
$(".add-to-cart").click(function(){

	
	var data_form =$(this).attr('id');
	
$.ajax({
 url : '/panier',
 type: 'POST',
 data: {id:$(this).attr('id')},
 }).done(function(result){
 
 	$('.add-to-cart').html('merci')})
 
  });



