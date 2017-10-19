<?php

require_once("../assets/fpdf/fpdf.php");
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
        $this->SetFont('Arial','B',15);
        $this->setX(20);

// $this->Line(20, 6, 195, 6); // 20mm from each edge

//$this->Line(20, 260.5, 200, 260.5); // 20mm from each edge
//$this->Line(20, 261.5, 200, 261.5); // 20mm from each edge
// $this->Line(20, 262.5, 200, 262.5); // 20mm from each edge
        $this->SetFont('Arial','B',24);
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
        $this->Cell(13,6,"Día",1);
        $this->setX(160+13);
        $this->Cell(13,6,"MES",1);
        $this->setX(160+26);
        $this->Cell(13,6,"A".utf8_decode("Ñ")."O",1);
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
}

$pdf = new PDF();
$pdf->AddPage();
// $pdf->Header();
$pdf->ImprovedTable("hola");

//echo $name;
$pdf->Output();
//print "<script>window.location=\"".$name."\";</script>";
?>