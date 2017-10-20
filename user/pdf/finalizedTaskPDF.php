<?php

require_once("../../assets/fpdf/fpdf.php");
//require('fpdf.php');

header("Content-Type: text/html; charset=iso-8859-1 ");

class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
}

function Header(){

// Logo
$this->Image('../assets/img/logo/hw.jpg',8,3,25);

        $this->SetFont('Arial','B',15);
        $this->setX(20);

 $this->Line(20, 34, 195, 34); // 20mm from each edge
 $this->Line(20, 280, 200, 280); // 20mm from each edge

        $this->SetFont('Arial','B',24);
        $this->SetX(55);
        $this->Cell(200,10,utf8_decode("Sistema de Información"));
        $this->Ln();
        $this->SetX(75);
        $this->Cell(200,10,"phpHomework");
        $this->setY(7);
        $this->SetFont('Arial','B',10);
        $this->setX(165-5);
        $this->Cell(39,6,"ORDEN DE SERVICIO",1);
        $this->setY(13);
        $this->setX(165-5);
        $this->Cell(39,6,"",1);
        $this->setY(19);
        $this->setX(160);
        $this->Cell(13,6,utf8_decode("Día"),1);
        $this->setX(160+13);
        $this->Cell(13,6,"Mes",1);
        $this->setX(160+26);
        $this->Cell(13,6,utf8_decode("Año"),1);
        $this->setY(25);
        $this->setX(160);
        $this->Cell(13,6,"",1);
        $this->setX(160+13);
        $this->Cell(13,6,"",1);
        $this->setX(160+26);
        $this->Cell(13,6,"",1);

}
// Tabla simple
function ImprovedTable($data)
{
        $this->setY(31);
        $this->setX(20);
        $this->SetFont('Arial','B',8);
        $this->setY(33);
        $this->setX(20);
        
        //Salto de línea
        $this->Ln(0);

        $this->Cell(0,10,"AV. CESAR SANDINO NO. 313 (FRENTE AL SEGURO SOCIAL) COL. 1RO. DE MAYO VILLAHERMOSA, TABASCO. TEL: 352 29 10");
        $this->setY(40);
        $this->setX(20);
        $this->SetFont('Arial','B',8);
         $this->Cell(0,35,"",1);
        $this->setY(38);
        $this->setX(20);
        $this->Cell(0,10," NOMBRE ________________________________________________________________________________________________________");
        $this->setY(43);
        $this->setX(20);
        $this->Cell(0,10," DIRECCION ______________________________________________________________________________________________________");
        $this->setY(48);
        $this->setX(20);
        $this->Cell(0,10," CP _____________________________ TEL _______________________________________ RFC ________________________________");
        $this->setY(53);
        $this->setX(20);
        $this->Cell(0,10," MODELO _______________ TIPO ______________ MARCA _________________ COLOR _____________ PLACA _________________");
        $this->setY(58);
        $this->setX(20);
        $this->Cell(0,10," FECHA DE INGRESO _______________ HORA ______________ FECHA DE ENTREGA ___________________ HORA _____________ ");
        $this->setY(63);
        $this->setX(20);
        $this->Cell(0,10," SERIE _____________________________________________________ KM. RECORRIDOS ____________________________________ ");

        $this->setY(80);
        $this->setX(20);
        $this->Cell(0,10," INVENTARIO DEL VEHICULO ");
        $this->setY(85);
        $this->setX(20);
        $this->Cell(0,10," *** EXTERIORES *** ");

        $this->setY(90);
        $this->setX(20);
        $this->Cell(0,10," DATO                 SI / NO ");
        $starty=0;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," UNIDAD DE LUCES");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," 1/4 DE LUCES");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," ANTENA");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," ESPEJO LATERAL");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," CRISTALES");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," BLEMA");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," LLANTAS(4)");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," TAPON DE RUEDAS(4)");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," MULDURAS COMPLETAS");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," TAPON DE GASOLINA");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," CARROCERIA SIN GOLPES");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(20);
        $this->Cell(0,10," BOCINAS DE CLAXON");
        $this->setY(95+$starty);
        $this->setX(60);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
///////////////////////////////////////////////////////////////
        $this->setY(85);
        $this->setX(150);
        $this->Cell(0,10," *** INTERIORES *** ");
        $this->setY(90);
        $this->setX(150);
        $this->Cell(0,10," DATO                 SI / NO ");
        $starty=0;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," INSTR. DE TABLERO");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," CALEFACCION");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," LIMPIADORES (PLUMAS)");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," RADIO/TIPO ___________");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," BOCINAS ___________");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," ENCENDEDOR");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," ESPEJO RETROVISOR");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," CENICEROS");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," CINTURONES");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," BOTONES DE INTERIORES");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," MANIJA DE INTERIORES");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," TAPETES");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(95+$starty);
        $this->setX(150);
        $this->Cell(0,10," VESTIDURAS");
        $this->setY(95+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        ///////////////////////////////////
        $this->setY(165);
        $this->setX(20);
        $this->Cell(0,10," OBSERVACIONES ________________________________________________________________________________________________ ");
        ///////////////////////////
        $this->setY(180);
        $this->setX(90);
        $this->Cell(0,10," *** ACCESORIOS *** ");
        $this->setY(90);
        $this->setX(90);
        $this->Cell(0,10," DATO                 SI / NO ");
        $starty=0;
        $this->setY(190+$starty);
        $this->setX(90);
        $this->Cell(0,10," GATO");
        $this->setY(190+$starty);
        $this->setX(130);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(190+$starty);
        $this->setX(90);
        $this->Cell(0,10," MANERAL DE GATO");
        $this->setY(190+$starty);
        $this->setX(130);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;        
        $this->setY(190+$starty);
        $this->setX(90);
        $this->Cell(0,10," LLAVE DE RUEDAS");
        $this->setY(190+$starty);
        $this->setX(130);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;        
        $this->setY(190+$starty);
        $this->setX(90);
        $this->Cell(0,10," ESTUCHE DE HTAS.");
        $this->setY(190+$starty);
        $this->setX(130);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;        $this->setY(190+$starty);
        $this->setX(90);
        $this->Cell(0,10," TRGLO. DE SEGURIDAD");
        $this->setY(190+$starty);
        $this->setX(130);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(190+$starty);
        $this->setX(90);
        $this->Cell(0,10," LLANTA DE REFACCION");
        $this->setY(190+$starty);
        $this->setX(130);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(190+$starty);
        $this->setX(90);
        $this->Cell(0,10," EXTINGUIDOR");
        $this->setY(190+$starty);
        $this->setX(130);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        ////////////////////////////////////////////////////
        $this->setY(180);
        $this->setX(145);
        $this->Cell(0,10," *** COMPONENTES MECANICOS *** ");
        $this->setY(140);
        $this->setX(150);
        $starty=0;
        $this->setY(190+$starty);
        $this->setX(150);
        $this->Cell(0,10," GATO");
        $this->setY(190+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(190+$starty);
        $this->setX(150);
        $this->Cell(0,10," MANERAL DE GATO");
        $this->setY(190+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;        
        $this->setY(190+$starty);
        $this->setX(150);
        $this->Cell(0,10," LLAVE DE RUEDAS");
        $this->setY(190+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;        
        $this->setY(190+$starty);
        $this->setX(150);
        $this->Cell(0,10," ESTUCHE DE HTAS.");
        $this->setY(190+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;        $this->setY(190+$starty);
        $this->setX(150);
        $this->Cell(0,10," TRGLO. DE SEGURIDAD");
        $this->setY(190+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(190+$starty);
        $this->setX(150);
        $this->Cell(0,10," LLANTA DE REFACCION");
        $this->setY(190+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        $this->setY(190+$starty);
        $this->setX(150);
        $this->Cell(0,10," EXTINGUIDOR");
        $this->setY(190+$starty);
        $this->setX(190);
        $this->Cell(0,10,"|__|__| ");
        $starty+=5;
        ////////////////////////////////////////////////////
}

// Tabla coloreada

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}


// Tabla coloreada
function FancyTable($header, $data)
{

      $this->setY(31);
      $this->setX(20);
      $this->SetFont('Arial','B',8);
      $this->setY(43);
      $this->setX(30);
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(128,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Cabecera
    $w = array(40, 35, 45, 40);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;

    if(is_array($data)){

    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
   }

    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}//Fancy Table


function TituloArchivo($num,$label)
{
   $this->SetY(40);
//Arial 12
$this->SetFont('Arial','',12);
//Color de fondo
$this->SetFillColor(230,230,230); //fondo gris
//Título
$this->Cell(0,6,"Archivo $num : $label",0,1,'L',true);
//Salto de línea
$this->Ln(4);
}

function CuerpoArchivo($file)
{
//Leemos el fichero
$f=fopen($file,'r');
$txt=fread($f,filesize($file));
fclose($f);
//Times 12
$this->SetFont('Times','',12);
//Imprimimos el texto justificado
$this->MultiCell(0,5,$txt);
//Salto de línea
$this->Ln();

}


function ImprimirArchivo($num,$title,$file)
{
$this->AddPage();
$this->TituloArchivo($num,$title);
//$this->CuerpoArchivo("cuerpo del archivo");
//$this->CuerpoArchivo($file);
}

//Tabla Basica
function TablaBasica($header)
   {
    $this->setX(20);
    //Cabecera
    foreach($header as $col)
    $this->Cell(40,7,$col,1);

    $this->Ln();
    $this->setX(20);
   
      $this->Cell(40,5,"hola",1);
      $this->Cell(40,5,"hola2",1);
      $this->Cell(40,5,"hola3",1);
      $this->Cell(40,5,"hola4",1);
      $this->Ln();
      $this->setX(20);
      $this->Cell(40,5,"linea ",1);
      $this->Cell(40,5,"linea 2",1);
      $this->Cell(40,5,"linea 3",1);
      $this->Cell(40,5,"linea 4",1);
   }



   function TablaColores($header)
{
   $this->SetX(30);
   $this->SetY(90);
//Colores, ancho de línea y fuente en negrita
$this->SetFillColor(230,230,230);
$this->SetTextColor(2);
$this->SetDrawColor(128,0,0);
$this->SetLineWidth(.3);
$this->SetFont('','B');
//Cabecera

for($i=0;$i<count($header);$i++)
$this->Cell(40,7,$header[$i],1,0,'C',1);
$this->Ln();
//Restauración de colores y fuentes
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('');
//Datos
$fill=false;

$this->Cell(40,6,"hola",'LR',0,'L',$fill);
$this->Cell(40,6,"hola2",'LR',0,'L',$fill);
$this->Cell(40,6,"hola3",'LR',0,'R',$fill);
$this->Cell(40,6,"hola4",'LR',0,'R',$fill);
$this->Ln();
$fill=true;
$this->Cell(40,6,"col",'LR',0,'L',$fill);
$this->Cell(40,6,"col2",'LR',0,'L',$fill);
$this->Cell(40,6,"col3",'LR',0,'R',$fill);
$this->Cell(40,6,"col4",'LR',0,'R',$fill);
$fill=!$fill;
$this->Ln();
$this->Cell(160,0,'','T');
}  





} //Class

//$pdf = new PDF();
//$pdf->AddPage();
//$pdf->Header();


// Creación del objeto de la clase heredada
$pdf = new FPDF();
$pdf->AliasNbPages();

$header = array(utf8_decode('País'), 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
// Carga de datos
$data = $pdf->LoadData('pdf/paises.txt');




$pdf->SetFont('Times','',12);

$pdf->AddPage();
$pdf->ImprovedTable("hola");
$pdf->AddPage();
$pdf->FancyTable($header, $data);

//$pdf->ImprimirArchivo(1,'Archivo de prueba ','prueba1.txt');
$pdf->ImprimirArchivo(1,'Titulo de prueba ','texto');

//Tabla Basica
//Títulos de las columnas
$header=array('Columna 1','Columna 2','Columna 3','Columna 4');
$pdf->SetY(65);

$pdf->TablaBasica($header); 


$pdf->SetY(65);

$pdf->TablaColores($header);



//echo $name;
$pdf->Output();
//print "<script>window.location=\"".$name."\";</script>";
?>