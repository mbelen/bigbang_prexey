$(document).ready(function() {
		var validator = $("#tab").validate({
		
			rules: {                 
				"backend_adminbundle_pais[name]": {
					required:true,
					minlength:2,
					maxlength:100,
				}
			},
			
			 messages: {
            "backend_adminbundle_pais[name]": {
            required: "Ingrese el nombre del país",
            maxlength: jQuery.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
      },
      
      errorPlacement: function(error, element) {
             
            	error.appendTo( element.next() );
        }
			
		});
		
	});





