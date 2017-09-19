<!DOCTYPE html>
<html lang="en">
<head>

    <?php 
    include'inc/adminHead.php'; 
    include 'sql/Privilege.php';
    ?>

</head>
<body>
<div id="wrapper">

	<!-- Navigation -->

<?php
$query = " SELECT id_priv as ID, desc_priv as Privilegio FROM privileges";
Privilege::regPrivilege($query);

?>

</div>
<!-- /#wrapper -->

<?php  include 'inc/adminFooter.php'; ?>

</body>

</html>    