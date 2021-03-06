 
 <!-- jQuery -->
 <script src="assets/jquery/jquery.min.js"></script>

 <!-- Plugin jQuery Confirm -->
<script src="assets/js/jquery-confirm.min.js"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>

 <!-- Metis Menu Plugin JavaScript -->
 <script src="assets/metisMenu/metisMenu.min.js"></script>

 <!-- Custom Theme JavaScript -->
 <script src="assets/js/sb-admin-2.js"></script>

 <!-- Angular JS -->
 <script src="assets/js/angular.min.js"></script>
 <!-- <script src="assets/js/controladores/VentaController.js"></script> -->

<script>

function confirmar(url){
	$.confirm({
		title: '¿Deseas eliminar este registro?',
		content: 'Se eliminará completamente del sistema. \n Si elimino por error, esta acción se cancelara en 5 segundos.', 
		icon: 'fa fa-question',
		theme: 'modern', //modern, material, bootstrap, supervan
		closeIcon: true,
		animation: 'scale',
		type: 'red',
		autoClose: 'cancelAction|5000',
    	escapeKey: 'cancelAction',
		buttons: {
			confirm: {
				btnClass: 'btn-red',
				text: 'Confirmar',
				action: function() {
					window.location.href=url;
				}
			},
			cancelAction: {
				btnClass: 'btn-success',
				text: 'Cancelar',
				action: function() {
					//$.alert('Cancelado!');
				}
			}
		}

	});
}

/*function confirmar(url){
	alert("Prepare to Delete Record");
}*/
 </script>