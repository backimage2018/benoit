//module ajax pour site Eshop @Benoît//
//ajax pour mise a jour stock magasin 

$(".stockm").blur(function(){

	// declaration des variables (rajout de $ devant chaque variable )
	var $id_product = $(this).attr('data');
	var $stock = $(this).val();
	var $labelentrepot = $(".labelentrepot"+$id_product).text();
	
//	var id_stocke = $(".stockentrepot").val();
console.log($id_product);
console.log($stock);
console.log($labelentrepot);



	if ($stock > parseInt($labelentrepot)){
		$(".erreurstockmag").html("Pas assez de stock entrepot")
			
	}else if ($stock == ""){
			
	}
	
	else{
		$(".erreurstockmag").html("");
		$.ajax({
			 url : '/stockm',
			 type : 'POST',
			 data: {id_product:$id_product,stock: $stock},

			 }).done(function(result){
				 location.reload();
//				 $(".labelentrepot"+$id_product).html(result.entrepot);
//				 $(".labelmagasin"+$id_product).html(result.magasin);
			
//				 $(".stockmagasin"+$id_product).val("");
		
				 
//				 $(".alertemagasin").append( result.alert.messagemag+"<br>");
//				 $(".alerteentrepot").append( result.alert.messageent+"<br>");
				 })
				//$.alert("Alert Message", "Alert Title")
				
	}
});
//ajax pour mise a jour stock magasin

$(".stocke").blur(function(){
	
	// declaration des variables (rajout de $ devant chaque variable )
	var $id_product = $(this).attr('data');
	var $stock = $(this).val();

		$.ajax({
			 url : '/stocke',
			 type : 'POST',
			 data: {id_product:$id_product,stock:$stock},

			 }).done(function(result){
				 location.reload();
//				 $(".labelentrepot"+$id_product).html(result.entrepot);
				
				 $(".succes").html("Mise a jour effectuée");
//				 $(".stockentrepot"+$id_product).val("");
//				 $(".alerteentrepot").append( result.alert.messageent+"<br>");
				
				 })
				 $(".succes").html("Mise a jour effectuée");
	
});
