<?php
require('../fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //membreteuptai
    $this->Image('../img/upt.jpg',0,4,-74);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(70);
	$this->Ln(10);
    // Título
    $this->Cell(200,15,'Reporte de logout',0,0,'C');
    // Salto de línea
  
    $this->Ln(15);
    $this->cell(35, 5, 'ID_logout', 1, 0, 'C',0);
    $this->cell(35, 5, 'ID_usuario', 1, 0, 'C',0);
    $this->cell(60, 5, utf8_decode('hora'), 1, 0, 'C',0);
    $this->cell(35, 5, utf8_decode('fecha'), 1, 1, 'C',0);
   
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'conexion.php';
$consulta = "SELECT * FROM sesion_logout";
$resultado = mysqli_query($conection, $consulta);
 
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->SetMargins(10,60,10);

while($row = $resultado->fetch_assoc()){

 $pdf->cell(35, 5, $row['id_sesion_logout'], 1, 0, 'C',0);
 $pdf->cell(35, 5, $row['id_user_logout'], 1, 0, 'C',0);
 $pdf->cell(60, 5, $row['hora_logout'], 1, 0, 'C',0);
 $pdf->cell(35, 5, $row['fecha_logout'], 1, 1, 'C',0);

$pdf->SetFillColor(55, 127, 80);
$pdf->SetDrawColor(61, 30, 50);
}
$pdf->Output();
?>