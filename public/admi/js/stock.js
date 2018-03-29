//module ajax pour site Eshop @Benoît//
//ajax pour mise a jour stock

$(".stock").blur(function(){

	var id_stock = $(".stockmagasin" ).attr('data');
	var id_stock = $(".stockmagasin").val();
	var labelentrepot = $(".labelentrepot").attr('data');
//	var id_stocke = $(".stockentrepot").val();

	if (id_stock > labelentrepot){
		$(".erreurstockmag").html("Pas assez de stock entrepot")
			
	}else{
		$(".erreurstockmag").html("");
		$.ajax({
			 url : '/stock',
			 type : 'POST',
			 data: {id:$(".stockmagasin" ).attr('data'),stock: $(".stockmagasin").val()},

			 }).done(function(result){
				 
				 $(".labelentrepot").html(result.Entrepot);

				 
			 	})
				
	}
});


