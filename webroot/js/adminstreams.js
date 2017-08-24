 $(document).ready(function() { 
	  
	  $(".toggleInputName").on('click', function() { 
		 
		 $(".inputNameWrap").toggleClass('hide');
	 })
	 
	 
	 $(".toupdate").on('blur', function() { 
		 wartosc=$(this).val();
		 id=$(this).attr('data-id');
		 co=$(this).attr('data-name');
		 funkcja='update'; 
		 zrobStream(id, wartosc, co, funkcja);
		 
	 })
	 $(".kategoria").on('blur', function() { 
		  wartosc=$(this).val();
		 id=$(this).attr('data-id');
		 co=$(this).attr('data-name');
 funkcja='kategoria'; 
		 zrobStream(id, wartosc, co, funkcja);
		 
	 })
	 
	 	 $(".removestream").on('click', function() { 
		 	 var r = confirm("Usunąć stream?");
if (r == true) {
 	


         wartosc=1;
		 id=$(this).attr('data-id');
		 co=1;
		 funkcja='usun'; 
		 zrobStream(id, wartosc, co, funkcja);
		 $(this).parents('.streamrow').remove();
		 
		 }
	 })
	 
	 
	 
	 
	 $("#dodajkolejne").on('click', function() { 
		 co=$("#dododania").html();
		 $("#streamsform").append(co);
		 $("#zapiszdodane").removeClass('hide');		 
		 
	 })
	 $("#streamsform").on('click', '.removerow', function() { 
		 $(this).parents('.addstreamrow').remove();
		 if ($("#streamsform .addstreamrow").length==0) { 
			 $("#zapiszdodane").addClass('hide');
		 }
	 })
 })



function activateSlide(id) {
 	if ($("#activateSlideBtn"+id).hasClass('active')) { 
		$("#activateSlideBtn"+id).removeClass('active btn-success').addClass('btn-default');
		co=0;
	} else { 
		co=1;
		$("#activateSlideBtn"+id).removeClass('btn-default').addClass('btn-success active');

	}
	$.ajax({
 				type: "post",
 				url: "/users/streamupdate", 
				data: {id:id, co:co, funkcja:'active'},
				dataType: 'json',
				beforeSend: function() { 
 				},
				success: function(dane1){ 
					 }} );
					 
}


 




function zmienNazwe(id) { 
 	wartosc=$("#menu_category_name").val();
 	files=[];
	$(".files td p.name").each(function() {
plik={};
          plik['name'] = $(this).attr('name');
          files.push(plik);
    });
 
 pliki=JSON.stringify(files);
 
 
 
 $.ajax({
 				type: "post",
 				url: "/scripts/php/changeMenuCats.php", 
				data: {id:id, wartosc:wartosc, co:'change_category_name', pliki:pliki}, 
				dataType: 'json',
				beforeSend: function() {
									  	$("#zmiennazwebutton").button('loading').addClass('btn-primary');

 				},
				success: function(dane1){
					 					$("#zmiennazwebutton").button('complete');
   				 }} );   
    
    
}



function zrobStream(id, wartosc, co, funkcja) { 
 	
 $.ajax({
 				type: "post",
 				url: "/users/streamupdate", 
				data: {id:id, wartosc:wartosc, co:co, funkcja:funkcja,sid:sid, xdbf:xdbf}, 
				dataType: 'json',
				beforeSend: function() {
 				},
				success: function(dane1){ 
  				 }} );   
    
    
}

 
function zapiszStreamy() { 
	dane=$("#streamsform").serialize()+'&funkcja=add';
	
 $.ajax({
 				type: "post",
 				url: "/users/streamupdate", 
				data: dane, 
				dataType: 'json',
				beforeSend: function() {
				  	$("#zapiszdodane").button('loading').addClass('btn-primary');
				},
				success: function(dane1){ 
					$("#zapiszdodane").button('complete').attr('onclick', 'javascript:window.location.reload()');
 				 }} );   
    
    
}
