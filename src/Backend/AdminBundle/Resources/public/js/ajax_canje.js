$("#validar").click(function() {

 var path=$("#validar").data("url");
 
          var dataString = "imeiNuevo="+$("#backend_adminbundle_modelo_imeiNuevo").val();
                   
          $.ajax({
              type: "GET",
              url: path,
              dataType: 'json',
              data: dataString,
            })
            .done(function(data){
                if(!data.modelo){
					$('#backend_adminbundle_imeiNuevo_errorloc').html("El imei no corresponde a un equipo cargado");					
                }
                else{
					console.log(data.id);
					console.log(data.modelo);	
					$('#backend_adminbundle_modeloNuevo').html("hola");
					$('#backend_adminbundle_modelo_idNuevo').val(data.id);
				}       
                 
            })
            .always(function(){
                $("#validar").removeAttr('disabled');
            });
                        
});
