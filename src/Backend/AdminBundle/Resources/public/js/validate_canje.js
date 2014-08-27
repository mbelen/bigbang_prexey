$(document).ready(function() {
		var validator = $("#tab").validate({
		
			rules: {                 
				"backend_adminbundle_canje[imeiLegacy]": {
					required:true,
					minlength:15,
					maxlength:15,
				},
				"backend_adminbundle_canje[modeloLegacy]": {
					required:true,
									
				},
				"backend_adminbundle_canje[imeiNuevo]": {
					required:true,
					minlength:15,
					maxlength:15,					
				}
        
			},
			
			messages: {
				"backend_adminbundle_canje[imeiNuevo]": {
				minlength: jQuery.format("Mínimo {0} carácteres!")
            },
				"backend_adminbundle_canje[ImeiNuevo]": {
				minlength: jQuery.format("Mínimo {0} carácteres!")
            },
      },
      
      errorPlacement: function(error, element) {
             
            	error.appendTo( element.next() );
        }
			
		});
		
	});
