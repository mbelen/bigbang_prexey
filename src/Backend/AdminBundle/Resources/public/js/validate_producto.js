$(document).ready(function() {
		var validator = $("#tab").validate({
		
			rules: {                 
				"backend_adminbundle_producto[isDisponible]": {
					required:false,
				},
				"backend_adminbundle_producto[imei]": {
					required:false,
					minlength:15,
					maxlength:15,
					
				},
				"backend_adminbundle_producto[msn]": {
					required:false,
					minlength:2,
					
				}
        
			},
			
			 messages: {
				"backend_adminbundle_producto[imei]": {
				minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_producto[msn]": {
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
      },
      
      errorPlacement: function(error, element) {
             
            	error.appendTo( element.next() );
        }
			
		});
		
	});
