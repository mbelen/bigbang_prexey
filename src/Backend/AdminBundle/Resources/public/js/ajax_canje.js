$("#validar").click(function() {

 var path=$("#validar").data("url");
 
          var dataString = "imeiNuevo="+$("#backend_adminbundle_canje_imeiNuevo").val();
                   
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
					$('#crear').removeAttr("disabled");	
					$('#backend_adminbundle_canje_modeloNuevo').html(data.modelo);
					$('#backend_adminbundle_canje_productoNuevo').val(data.id);
				}       
                 
            })
            .always(function(){
                $("#validar").removeAttr('disabled');
            });
                        
});
