// $( document ).ready(function() {
    

// 	function eliminar(id) {
// 		// body...
// 		//alert("elimnar "+id);
// 		var confirmar=confirm("Deseas eliminar el Usuario con el identificador "+id);
// 		var url = "http://localhost/htdocs/proyectoweb/index.php/maincontroller/eliminar/"+id;

// 		if (confirmar){
// 			//alert('Seleccionaste aceptar');
// 			$.ajax({
// 			    url: url,
// 			    type: 'post',
// 			    success: function(data) {
// 			        // Do something with the result
// 			        //alert('estubo bien '+data.code);
// 			        location.reload();
// 			    }
// 			});
// 		}
// 		else{
// 			alert('Seleccionaste cancelar');
// 		}
		
// 	}
// });

function eliminar(id) {
		// body...
		//alert("elimnar "+id);
		var confirmar=confirm("Deseas eliminar el Usuario con el identificador "+id);
		var url = "http://localhost/htdocs/proyectoweb/index.php/maincontroller/eliminar/"+id;

		if (confirmar){
			//alert('Seleccionaste aceptar');
			$.ajax({
			    url: url,
			    type: 'post',
			    success: function(data) {
			        // Do something with the result
			        //alert('estubo bien '+data.code);
			        location.reload();
			    }
			});
		}
		else{
			alert('Seleccionaste cancelar');
		}
		
	}