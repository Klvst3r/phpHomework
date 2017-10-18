  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.1.2
    </div>
    <strong>Copyright © <?php echo date("Y"); ?> <b class="text-blue">Klvst3r St.</b></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<link rel="stylesheet" href="dist/css/reset.css">


<!-- jQuery 3 -->
<script src="dist/js_admin/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="dist/js_admin/bootstrap.js"></script>
<!-- SlimScroll -->
<script src="dist/js_admin/jquery_002.js"></script>
<!-- FastClick -->
<script src="dist/js_admin/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js_admin/admin.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js_admin/demo.js"></script>
<!-- Plugin jQuery Confirm -->
<script src="dist/js/jquery-confirm.min.js"></script>
<!-- <script type="text/javascript" src="dist/alertify/lib/alertify.js"></script> -->


<script>
/*function confirmar(){
        //un confirm
        alertify.confirm("<p>Aquí confirmamos algo.<br><br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>", function (e) {
          if (e) {
            alertify.success("Has pulsado '" + alertify.labels.ok + "'");
          } else { alertify.error("Has pulsado '" + alertify.labels.cancel + "'");
          }
        }); 
        return false
      }*/
function confirmar(url){
  $.confirm({
    title: '¿Deseas eliminar este registro?',
    content: 'Se eliminará completamente del sistema. \n Si elimino por error, esta acción se cancelara en 5 segundos.', 
    icon: 'fa fa-question',
    theme: 'supervan', //modern, material, bootstrap, supervan
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
  //alert("Prepare to Delete Record");
  alert("URL: " + url);
}*/
 </script>
