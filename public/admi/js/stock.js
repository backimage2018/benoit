//module ajax pour site Eshop @Benoît//
//ajax pour mise a jour stock magasin 

$(".stockm").blur(function(){

	// declaration des variables (rajout de $ devant chaque variable )
	let $id_product = $(this).attr('data');
	let $stock = $(this).val();
	let $labelentrepot = $(".labelentrepot"+$id_product).text();
	
//	var id_stocke = $(".stockentrepot").val();




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
	let $id_product = $(this).attr('data');
	let $stock = $(this).val();

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

// ajax pour la vignette
$(".radio").click(function(){
	let $id_product = $(this).attr('value');
	let html ="";
	$.ajax({
		 url : '/vignette',
		 type : 'POST',
		 data: {id_product:$id_product},
	 }).done(function(result){
		 
		 html = "<div class='col-md-3 col-sm-6 col-xs-6'><div class='product product-single'>" ;
		html = html + "<a href='/product-page/"+ result.id +" ' class='main-btn quick-view' ><i class='fa fa-search-plus'></i> Quick view</a>";
		 html = html+ "<img class='img-thumbnail' src='../uploads/image/"+ result.image +"')  alt=''></div>"
		 html =  html+ "<div class='product-body'><h3 class='product-price'>"+result.prix+" €</h3></div>"
		 html =  html+"<h2 class='product-name'><a href='/product-page/"+result.id+"'>"+result.nom+"</a></h2>"
		 html= html+"<div class='product-btns'><a href='../admin/edit/"+result.id+"'class='primary-btn fa-trash-alt'> Modifier</a></div>"
		 $('#vignette').html(html);
		 
	 }
	 
		)
});




