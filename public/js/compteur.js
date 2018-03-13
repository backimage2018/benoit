// enregistrement de la date de fin dans une variable 
var date_fin_promo = $('product-countdown').data('datefinpromo');

// mise a jour du compteur en enlevant 1 sec chaque interval
var x = setInterval(function() {

  // variable avec la date et lheure du jour 
  var now = new Date().getTime();

  // variable intervale des deux date 
  var intervaldate = date_fin_promo - now;

  // calcul des jours /heures / minutes restantes 
  var days = Math.floor(intervaldate / (1000 * 60 * 60 * 24));
  var hours = Math.floor((intervaldate % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((intervaldate % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((intervaldate % (1000 * 60)) / 1000);
  var milliseconds = Math.floor(intervaldate % (seconds *1000));

  //affichage dans le DOM
  document.getElementById("countd").innerHTML = days + "d";
  document.getElementById("counth").innerHTML = hours + "h";
  document.getElementById("countm").innerHTML = minutes + "m";
  document.getElementById("counts").innerHTML = seconds + "s";

  // arret du compteur et affichage du l'expiration 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Promo Expirée";
  }
}, 10);






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

