<?php
/*if(isset($_SESSION["usuario"])){
    //echo $_SESSION["usuario"];
}else{
    echo "No existen variables de sesión";
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include'inc/adminHead.php'; ?>
</head>
<body>
    <div id="wrapper">
        <?php  include'inc/adminMenu.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Perfil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- INICIO CONTENIDO -->
            
            <div class="col-sm-6 col-sm-offset-3">
            

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Mi Perfil</h3>
                </div>
                
                <div class="panel-body ">
                    <!-- Información Pefil -->
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">

                                <div class="card hovercard">
                                    <div class="cardheader">

                                    </div>
                                    <div class="avatar">
                                        <img alt="" src="../assets/img/klvst3r.png">
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <a target="_blank" href="http://scripteden.com/">Alias: Klvst3r</a>
                                        </div>
                                        <div class="desc">Profession: Passional Dev + Designer + UI + UX</div>
                                        <div class="desc">Activities:Curious developer</div>
                                        <div class="desc">Habilities:Tech geek & Programmer</div>
                                    </div>
                                    <div class="bottom">
                                        <a class="btn-social btn-primary btn-twitter btn-sm" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="btn-social btn-danger btn-sm" rel="publisher"
                                        href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a class="btn-social btn-primary btn-sm" rel="publisher"
                                    href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            </div>
            <!-- End Información Pefil -->
        </div>
            
    </div>          

    <!--TERMINO CONTENIDO -->


</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php  include 'inc/adminFooter.php'; ?>
</body>

</html>
