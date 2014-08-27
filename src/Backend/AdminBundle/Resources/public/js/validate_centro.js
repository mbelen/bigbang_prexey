$(document).ready(function() {
		var validator = $("#tab").validate({
		
			rules: {
				"backend_adminbundle_centro[nombre]": {
					required:true,
					minlength:2,
					maxlength:100,
				},
				"backend_adminbundle_centro[responsable]": {
					required:false,
					minlength:2,
					maxlength:100,          
				},
        		"backend_adminbundle_centro[calle]": {
					required:false,
					minlength:2,
					maxlength:100,          
				},
				"backend_adminbundle_centro[numero]": {
					required:false,
          			minlength:2,
					maxlength:8,
					number: true,
				},
				"backend_adminbundle_centro[piso]": {
					required:false,
          			minlength:1,
					maxlength:3,					
				},
				"backend_adminbundle_centro[cp]": {
					required:false,
          			minlength:4,
					maxlength:10,					
				},
				"backend_adminbundle_centro[telefono]": {
					required:false,
					minlength:8,
					maxlength:15,
				},
				"backend_adminbundle_centro[fax]": {
					required:false,
					minlength:8,
					maxlength:15,
				},
				"backend_adminbundle_centro[email]": {
					required:false,
					email: true,
					maxlength:100,
				}
				
			},
			
			 messages: {
            "backend_adminbundle_centro[nombre]": {
            required: "Ingrese el nombre de la centro",
            maxlength: jQuery.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_centro[responsable]": {
            required: "Ingrese el nombre del responsable de la centro",
            maxlength: jQuery.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")            
            },
            "backend_adminbundle_centro[calle]": {
            required: "Ingrese la calle",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_centro[numero]": {
            required: "Ingrese el número",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!"),
            number: "Ingrese solo números"
            },
            "backend_adminbundle_centro[piso]": {
            required: "Ingrese el piso",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!"),
            number: "Ingrese solo números"
            },
            "backend_adminbundle_centro[cp]": {
            required: "Ingrese el Código Postal",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!"),
            },
            "backend_adminbundle_centro[telefono]": {
            required: "Ingrese el número de teléfono",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_centro[fax]": {
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_centro[email]": {
            email: "No es un formato de email válido",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            }            
      },
      
      errorPlacement: function(error, element) {
             
            	error.appendTo( element.next() );
        }
			
		});
		
	});
