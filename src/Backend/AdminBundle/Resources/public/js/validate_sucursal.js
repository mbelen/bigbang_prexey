function limpiarSelect(idselect) {
    $('#' + idselect + ' option').each(function(index, option) {
        if (index !== '' && index !== 0) {
            $(option).remove();
        }
    });
}

$(document).ready(function() {

$("#backend_adminbundle_sucursal_pais").change(function() {
    var option = $("#backend_adminbundle_sucursal_pais option:selected").val();
    //eliminar todas las opciones de la zona
    limpiarSelect("backend_adminbundle_sucursal_provincia");
  
    if (option !== '')
    {
        var dataString = 'pais=' + option;
        var path = $(this).data('url');
        $.ajax({
            type: "POST",
            url: path,
            dataType: 'json',
            data: dataString,
            success: function(data) {
                $.each(data, function(i) {
                    $('#backend_adminbundle_sucursal_provincia')
                            .append($('<option>', {value: data[i].id})
                            .text(data[i].name));
                });
            }
        });
    }
});


		var validator = $("#tab").validate({
		
			rules: {
				"backend_adminbundle_sucursal[nombre]": {
					required:true,
					minlength:2,
					maxlength:100,
				},
				"backend_adminbundle_sucursal[responsable]": {
					required:false,
					minlength:2,
					maxlength:100,          
				},
        		"backend_adminbundle_sucursal[calle]": {
					required:false,
					minlength:2,
					maxlength:100,          
				},
				"backend_adminbundle_sucursal[numero]": {
					required:false,
          			minlength:2,
					maxlength:8,
					number: true,
				},
				"backend_adminbundle_sucursal[piso]": {
					required:false,
					minlength:1,
					maxlength:3,					
				},
				"backend_adminbundle_sucursal[cp]": {
					required:false,
          			minlength:4,
					maxlength:10,					
				},
				"backend_adminbundle_sucursal[telefono]": {
					required:false,
					minlength:8,
					maxlength:15,
				},
				"backend_adminbundle_sucursal[fax]": {
					required:false,
					minlength:8,
					maxlength:15,
				},
				"backend_adminbundle_sucursal[email]": {
					required:false,
					email: true,
					maxlength:100,
				}
				
			},
			
			 messages: {
            "backend_adminbundle_sucursal[nombre]": {
            required: "Ingrese el nombre de la sucursal",
            maxlength: jQuery.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_sucursal[responsable]": {
            required: "Ingrese el nombre del responsable de la sucursal",
            maxlength: jQuery.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")            
            },
            "backend_adminbundle_sucursal[calle]": {
            required: "Ingrese la calle",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_sucursal[numero]": {
            required: "Ingrese el número",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!"),
            number: "Ingrese solo números"
            },
            "backend_adminbundle_sucursal[piso]": {
            required: "Ingrese el piso",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!"),
            number: "Ingrese solo números"
            },
            "backend_adminbundle_sucursal[cp]": {
            required: "Ingrese el Código Postal",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!"),
            },
            "backend_adminbundle_sucursal[telefono]": {
            required: "Ingrese el número de teléfono",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_sucursal[fax]": {
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            minlength: jQuery.format("Mínimo {0} carácteres!")
            },
            "backend_adminbundle_sucursal[email]": {
            email: "No es un formato de email válido",
            maxlength:  jQuery.validator.format("Máximo {0} carácteres!"),
            }            
      },
      
      errorPlacement: function(error, element) {
             
            	error.appendTo( element.next() );
        }
			
		});
		
	});
