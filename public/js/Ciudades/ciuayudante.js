

$("#departamento").change(function(event){
	console.log('holas');

$.get("ciudad/"+event.target.value+"",function(response,departamento){
$("#ciudad").empty();
for(i=0; i<response.length; i++){
$("#ciudad").append("<option value='"+response[i].Id_Ciudad+"'> "+response[i].Nombre_Ciudad+"</option>");
}

});

});





