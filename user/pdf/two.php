<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table{
	function Header()
	{
		$this->Image('../../assets/img/logo/hw.jpg',8,3,25);

	        
		//Title
		$this->SetFont('Arial','',18);
		$this->setX(20);
		$this->Cell(0,6,'Tareas pendientes de ejecutar',0,1,'C');
		$this->Line(20, 28, 195, 28); // 20mm from each edge
		$this->Ln(20);
		//Ensure table header is output
		parent::Header();
	}//function Header

	function Footer()
	{
		$this->Line(20, 285, 200, 285); // 20mm from each edge
	    // Posición: a 1,5 cm del final
	    $this->SetY(-12);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}//function footer
}

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


$pdf=new PDF();
$pdf->AliasNbPages();
//$pdf->AddPage();
//First table: put all columns automatically
//$query = "SELECT A.id_task as ID, B.desc_area as Area, C.name as Usuario FROM tasks A, areas B, users C WHERE A.id_area = B.id_area AND A.id_user = C.id_user and A.status = '0' ORDER BY id_task";
//$pdf->Table($link, $query);
$pdf->AddPage();
//Table: specify 3 columns
$title = array(
	'ID' => 'ID',
	'Area' => utf8_decode('Área'),
	'Usuario' => 'Usuario',
	'Tarea' => 'Tarea'
	);


$pdf->AddCol('ID',15,$title["ID"],'C');
$pdf->AddCol('Area',45,$title["Area"],'L');
$pdf->AddCol('Usuario',40,$title["Usuario"],'C');
$pdf->AddCol('Tarea',80,$title["Tarea"],'L');
$prop=array('HeaderColor'=>array(230,230,230),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);

$query = "SELECT A.id_task as ID, B.desc_area as Area, C.name as Usuario, A.desc_task as Tarea FROM tasks A, areas B, users C WHERE A.id_area = B.id_area AND A.id_user = C.id_user and A.status = '0' ORDER BY id_task";

$pdf->Table($link, $query, $prop);
$pdf->Output();
?>
