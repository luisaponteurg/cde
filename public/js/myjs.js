// AJAX

$("table tbody tr td a:first-child").click(function()
{
	let total = $(this).parents('tr body > div.uk-offcanvas-content > div.uk-flex.uk-flex-center.uk-flex-middle.uk-height-viewport.uk-position-z-index.uk-position-relative > div.uk-width-1-2\40 s.uk-padding-small.uk-background-secondary.uk-width-medium.uk-overflow-auto > table > tbody > tr > td:nth-child(2)');
	console.log(total[0]);
})

$(document).ready(function(){
	$("#ci_import").keyup(function(){
		var parametros=$(this).val();
		console.log(parametros);
		$.ajax({
	      url: 'http://localhost:8000/design/'+parametros,
	      type: 'GET',
	      dataType: 'json',
	      // data: parametros
	  	}).done(function(respuesta){
		    console.log(respuesta[0]);
		    $('#first_name').val(respuesta[0].fic_pnombre);
		    $('#last_name').val(respuesta[0].fic_snombre);
		    $('#phone1').val(respuesta[0].fic_cel);
		    $('#phone2').val(respuesta[0].fic_tel);
		    $('#birthdate').val(respuesta[0].fic_fnac);
		    $('#address').val(respuesta[0].fic_dir);
		    $('#email1').val(respuesta[0].fic_email);
	    });
	    if ($('#ci_import').val() == '') {
	        $('#first_name').val("");
		    $('#last_name').val("");
		    $('#phone1').val("");
		    $('#phone2').val("");
		    $('#birthdate').val("");
		    $('#address').val("");
		    $('#email1').val("");
    	}
	})

	 	
})



// $(document).ready(function() {

//   $.ajax({
// 	      url: 'http://localhost:8000/design/15082269',
// 	      type: 'GET',
// 	      dataType: 'json',
// 	      data:{id:$('#cambiar').val()}
//   	}).done(function(respuesta){
// 	    console.log(respuesta[0]);
// 	    $('#first_name').val(respuesta[0].fic_pnombre);
// 	    $('#last_name').val(respuesta[0].fic_snombre);
// 	    $('#phone1').val(respuesta[0].fic_cel);
// 	    $('#birthdate').val(respuesta[0].fic_fnac);
// 	    $('#address').val(respuesta[0].fic_dir);
// 	    $('#email1').val(respuesta[0].fic_email);
//     });
// });