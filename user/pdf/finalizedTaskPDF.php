<?php
require_once("../assets/class_pdf/class.ezpdf.php");
//// tamaño letra del texto

$opciones_tabla['fontSize']=6;
$opciones_tabla['rowGap']=7;
$opciones_tabla['colGap']=3;


   $userDB = "dev";
   $passDB = "desarrollo";
   $hostDB = "localhost";
   $nameDB = "phpHomework";

   $link = mysqli_connect($hostDB, $userDB, $passDB, $nameDB);
   if (mysqli_connect_error()) {
      echo "Error: ".mysqli_connect_errno().", no se pudo establecer conexion a la BD -  Error: (".mysqli_connect_error().").";
   exit();
   }

   
/*
$conexion=mysql_connect("localhost","jefe","jaque") or die(mysql_error());
mysql_select_db("notas",$conexion) or die(mysql_error());   
*/




$pdf = new Cezpdf();
$pdf->selectFont('class_pdf/fonts/Helvetica.afm');

//$pdf ->ezText("Reporte de Tareas - SECODUVI.");
$texto = "Reporte de Tareas - SECODUVI";
$pdf->ezText($texto,14,array('justification'=>'center'));

$pdf->line(100,750,500,750);


//$pdf->addJpegFromFile("img/x.jpg",30,770,150,45);
//$pdf->addPngFromFile("secoduvi.png",30,770,150,45);
//$pdf->addImage('img/pant_logeo_bullet.jpg',30,770,150,45,80);

$pdf->ezSetDy(-70);

//$dia=date("j");

$today = date("Y-m-j");

function the_date ($cadena)
         {
         //list( $anho, $mes, $dia ) = split( '[/.-]', $cadena );
         //list( $anho, $mes, $dia ) = explode( '[/.-]', $cadena );
         $date = explode('-', $cadena);
         $anho = $date[0];
         $mes = $date[1];
         $dia = $date[2];

         switch ($mes) {
         	case 1:
         		$mes ="Enero";
         		break;
         case 2:
         		$mes ="Febrero";
         		break;
         case 3:
         		$mes ="Marzo";
         		break;
         case 4:
         		$mes ="Abril";
         		break;
         case 5:
         		$mes ="Mayo";
         		break;
         case 6:
         		$mes ="Junio";
         		break;
         case 7:
         		$mes ="Julio";
         		break;
         case 8:
         		$mes ="Agosto";
         		break;
         case 9:
         		$mes ="Septiembre";
         		break;
         case 10:
         		$mes ="Octubre";
         		break;	
         case 11:
         		$mes ="Noviembre";
         		break;
         case 12:
         		$mes ="Diciembre";
         		break;
        	
         	default:
         		
         		break;
         }


         $tam2=strlen($dia);
         if($tam2==1){
         $dia="0".$dia;
         }
         //$date = $anho."-".$mes."-".$dia;
         $date = $dia . " de ". $mes . " de " . $anho;
         return $date;
         }

         //$eventdate = la_fecha ("$eventdate");
$today = the_date($today);

$pdf->ezText($today,10,array('justification'=>'right'));







$query = "select A.id_tarea, B.desc_area, C.user_name, A.desc_tarea, A.date_tarea
                   FROM tareas A, area B, users C 
                   WHERE A.id_area = B.id_area and A.id_user = C.user_id order by A.id_tarea";
     
//$resEmp = mysql_query($query) or die(mysql_error());

//$pdf->ezText($query,10,array('justification'=>'center'));
$resEmp = mysqli_query($link, $query);                   

$txttit = "Informe de todas las tareas\n";
$titles = array(                        
               'id_tarea'=>'<b>No</b>',
               'desc_area'=>'<b>Area</b>',
               'user_name'=>'<b>Usuario</b>',
               'desc_tarea'=>'<b>Tarea</b>',               
               'date_tarea'=>'<b>Fecha</b>'
               );


//$totEmp = mysql_num_rows($resEmp);
$totEmp = mysqli_num_rows($resEmp);

$ixx = 0;

//while($datatmp = mysql_fetch_assoc($resEmp)) {
while($datatmp = mysqli_fetch_assoc($resEmp)) {
   $ixx = $ixx+1;
   $data[] = array_merge($datatmp, array('num'=>$ixx));
}
 
$options = array(
               'shadeCol'=>array(0.9,0.9,0.9),
               'xOrientation'=>'center',
               'fontSize' => 8,
               'width'=>450
               ); 


$pdf->ezSetDy(-20);
$pdf->ezText($txttit, 9, array('justification'=>'center'));

$pdf->ezTable($data, $titles, '', $options);




$pdf->setStrokeColor(0,0,0,1);
$pdf->line($pdf->ez['leftMargin'], $pdf->ez['bottomMargin']+10, $pdf->ez['pageWidth']-$pdf->ez['rightMargin'], $pdf->ez['bottomMargin']+10);//the bottom line

$fecha = "<b>Fecha: </b>".date("d/m/Y");
$hora = "<b>Hora: </b>".date("H:i:s");
$pdf->addText(30,24,7,"$fecha\n");
$pdf->addText(30,14,7,"$hora \n");


$pdf->ezStartPageNumbers($pdf->ez['pageWidth']-($pdf->ez['rightMargin']-10), $pdf->ez['bottomMargin']-10,8, 'PAGINA', '{PAGENUM} de {TOTALPAGENUM}',1);








$pdf->ezStream();


?>