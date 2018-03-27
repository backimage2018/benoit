
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


	
$.ajax({
 url : '/panier',
 type: 'POST',
 data: {id:$(this).attr('id'),qty:$('.qty1').val()},

 }).done(function(result){
	
	
	$result=JSON.parse(result);


	 $nombre=(Object.keys($result).length)-1;
	

	 $html='';
	
		 $html=$html+"<li id ='cart' class='header-cart dropdown default-dropdown'><a class='dropdown-toggle' data-toggle='dropdown' aria-expanded='true'><div class='header-btns-icon'><i class='fa fa-shopping-cart'></i><span class=qty>"+$nombre+"</span></div><strong class='text-uppercase'>My Cart:</strong><br><span id='totalpanier'>35.20$</span></a><div class='custom-menu'><div id='shopping-cart'><div class='shopping-cart-list'>"
			$html2='';	
	
	 for (var i=0; i<$nombre; i++) {
		 		
		 		$html2=$html2+"<div class='product product-widget'><div class='product-thumb'><img src= /uploads/image/" + $result[i].Product.image.lien +"></div><div class='product-body'><h3  class='product-price'>"+$result[i].Product.prix +"  € <span class='qty'>x"+$result[i].Quantite+"</span></h3><h2  class='product-name'>"+$result[i].Product.nom+"<a href='#'></a></h2></div><button id='" + $result[i].id +"' class='cancel-btn'><i class='fa fa-trash'></i></button></div>";
		 		
		 	
		}
		 
	 $html2=$html2+"</div><div class='shopping-cart-btns'><button class='main-btn'><a href='/viewcard'>viewcart </a></button><button class='primary-btn'><a href='/checkout'>Checkout </a><i class='fa fa-arrow-circle-right'></i></button></div></div></li>";
									
		 $html=$html+$html2;
		 $('#cart').html($html);
		 $('#totalpanier').html($result.total +" €");
		
 })
 
  });

//ajax pour supression panier 
$(document).ready(function(){
$(".cancel-btn").click(function(){
	var data_form =$(this).attr('id');
	
$.ajax({
	 url : '/panier/delete',
	 type: 'POST',
	 data: {id:$(this).attr('id')},
	
}).done(function(result){
	location.reload();
 })
});

$(".inputqty").blur(function(){
	$id=$(this).attr('id');
	
$.ajax({
	 url : '/panier',
	 type: 'POST',
	 data: {id:$(this).attr('id'),quantite:$(this).val()},
	
}).done(function(result){
	
	$result=JSON.parse(result);
	console.log($result);
	console.log($result[0].Prixligne);
	console.log($result.total);
	
		 $('.'+$id+'').html("<td class='total text-center tl'><strong class='primary-color'>"+$result[0].Prixligne +" €</strong></td>");
	 	$('.totalall').html("<th colspan='2' class='total'>" + ($result.total)+" €</th>")
 })
});
})
