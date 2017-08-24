
$(document).ready(function()  {     
 
 $('.kolejnosc').on('blur', function() { 
	 id=$(this).attr('name');
	wartosc=$(this).val();
		$.ajax({
 				type: "post",
 				url: "/scripts/php/slides/slides.php", 
				data: {id:id,  funkcja:'kolejnosc', wartosc:wartosc},
				dataType: 'json',
				beforeSend: function() { 
 				},
				success: function(dane1){ 
					 }} );
					 
 })
 
});

function removeSlide(id) { 
	var r = confirm("Usunąć slide?");
if (r == true) {
 	
	
		$.ajax({
 				type: "post",
 				url: "/scripts/php/slides/slides.php", 
				data: {id:id,  funkcja:'remove'},
				dataType: 'json',
				beforeSend: function() { 
					$("#slideRow"+id).fadeOut();
					
 				},
				success: function(dane1){ 
					 }} );
					 } else {
}


					 
}


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
 				url: "/scripts/php/slides/slides.php", 
				data: {id:id, co:co, funkcja:'activate'},
				dataType: 'json',
				beforeSend: function() { 
 				},
				success: function(dane1){ 
					 }} );
					 
}


 


