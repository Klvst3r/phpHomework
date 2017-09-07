$(document).ready(function(){
	$("#loginForm").bind("submit",function(){

		$.ajax({
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			success: function(){
				alert("Conectado");
			},
			error: function(){
				alert("Error en la conexion");
			}
		});
		return false;
	});
});