
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
 dataType: 'json',
 }).done(function(result){
	
	 $html='';
		 $html=$html+"<span class=qty>"+result.length+"</span></div><strong class='text-uppercase'>My Cart:</strong><br><span>35.20$</span></a><div class='custom-menu'><div id='shopping-cart'><div class='shopping-cart-list'>"
		 		
	 for (var i=0; i<result.length; i++) {
		
		 		$html=$html+"<div class='product product-widget'><div class='product-thumb'><img src= /uploads/image/" + result[i].Product.image.lien +"></div><div class='product-body'><h3  class='product-price'>"+result[i].Product.prix +"  € <span class='qty'>x"+result[i].Quantite+"</span></h3><h2  class='product-name'>"+result[i].Product.nom+"<a href='#'></a></h2></div><button class='cancel-btn'><i class='fa fa-trash'></i></button></div>";
			
			
		}
		 $('.header-btns-icon').replaceWith($html);
		 console.log($html);
 })
 
  });



