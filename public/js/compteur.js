var datefin =document.getElementById("countdown").tagname.value;
// mise a jour du compteur en enlevant 1 sec chaque interval

var x = setInterval(function() {

  // variable avec la date et lheure du jour 
  var now = new Date().getTime();

  // variable intervale des deux date 
  var intervaldate = datefin - now;

  // calcul des jours /heures / minutes restantes 
  var days = Math.floor(intervaldate / (1000 * 60 * 60 * 24));
  var hours = Math.floor((intervaldate % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((intervaldate % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((intervaldate % (1000 * 60)) / 1000);
  var milliseconds = Math.floor(intervaldate % (seconds *1000));

  //affichage dans le DOM
  
  document.getElementById("counth").innerHTML = hours + "h";
  document.getElementById("countm").innerHTML = minutes + "m";
  document.getElementById("counts").innerHTML = seconds + "s";

  // arret du compteur et affichage du l'expiration 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Promo Expirée";
  }
}, 10);


