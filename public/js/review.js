
//ajax pour envoie review
$("#reviewsend").click(function(event){

	event.preventDefault();
	 var data_form = $('#formulaire').serialize();
	 
	
$.ajax({
 url : '/review',
 type : 'POST',
 data: data_form,
 }).done(function(result){
 
	 location.reload();})

 	

});