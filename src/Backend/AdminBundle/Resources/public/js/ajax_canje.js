$(document).ready(function() {

 var path=$("#validar").data("url");
 
          var dataString = "12345678910123";
         
          $.ajax({
              type: "GET",
              url: path,
              dataType: 'json',
              data: dataString,
            })
            .done(function(data){
                alert(data.message);
                location.reload(); 
            })
            .always(function(){
                $("#validar").removeAttr('disabled');
            });
            
});
