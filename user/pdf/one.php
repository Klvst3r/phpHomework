<?php
//PDF USING MULTIPLE PAGES
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require_once("../../assets/fpdf/fpdf.php");

//Connect to your database
/*include("connect.php");
Connect::connection();*/


//Parametros de conexion
	$userDB = "dev";
	$passDB = "desarrollo";
	$hostDB = "localhost";
	$nameDB = "phpHomework";

	$link = mysqli_connect($hostDB, $userDB, $passDB, $nameDB);
	if (mysqli_connect_error()) {
		echo "Error: ".mysqli_connect_errno().", no se pudo establecer conexion a la BD -  Error: (".mysqli_connect_error().").";
	exit();
	}




///Select the Products you want to show in your PDF file
$query = "SELECT A.id_task as ID, B.desc_area as Area, C.name as Usuario, A.desc_task as Tarea, A.date_task as Fecha FROM tasks A, areas B, users C WHERE A.id_area = B.id_area AND A.id_user = C.id_user and A.status = '0' ORDER BY id_task";
$result=mysqli_query($link,$query);
$number_of_users = mysqli_num_rows($result);

//Initialize the 3 columns and the total
$column_id_user = "";
$column_name = "";
$column_email = "";


//For each row, add the field to the corresponding column
while($row = mysqli_fetch_array($result))
{
    $id_user = $row["ID"];
    $user_name = $row["Usuario"];
    $user_email = $row["Tarea"];


    $column_id_user = $column_id_user.$id_user."\n";
    $column_name = $column_name.$user_name."\n";
    $column_email = $column_email.$user_email."\n";

    //Sum all the Prices (TOTAL)
    //$total = $total+$user_email;
}
mysqli_close($link);

//Convert the Total Price to a number with (.) for thousands, and (,) for decimals.
//$total = "0";







//Create a new PDF file
$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Header();


	// Logo
	$pdf->Image('../../assets/img/logo/hw.jpg',8,3,25);

	 $pdf->SetFont('Arial','B',15);
	 $pdf->setX(20);

	 $pdf->Line(20, 34, 195, 34); // 20mm from each edge
	 $pdf->Line(20, 280, 200, 280); // 20mm from each edge

	  $pdf->SetFont('Arial','B',24);
      $pdf->SetX(55);
      $pdf->Cell(200,10,utf8_decode("Sistema de Información"));
      $pdf->Ln();
      $pdf->SetX(75);
      $pdf->Cell(200,10,"phpHomework");
      $pdf->SetFont('Arial','B',12);
      $pdf->Ln(15);
      $pdf->SetX(75);
      $pdf->Cell(0,10,"Tareas faltantes de realizar");


//Fields Name position
$Y_Fields_Name_position = 45;
//Table position, under Fields Name
$Y_Table_Position = 51;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(35);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->SetX(55);
$pdf->Cell(50,6,'Usuario',1,0,'L',1);
$pdf->SetX(105);
$pdf->Cell(70,6,'Email',1,0,'C',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(35);
$pdf->MultiCell(20,6,$column_id_user,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(55);
$pdf->MultiCell(50,6,$column_name,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(105);
$pdf->MultiCell(70,6,$column_email,1);


//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_users)
{
    $pdf->SetX(35);
    $pdf->MultiCell(140,6,'',1);
    $i = $i +1;
}

 // Posición: a 1,5 cm del final
    $pdf->SetY(266);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Número de página
    $pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');


$pdf->Output();
?>