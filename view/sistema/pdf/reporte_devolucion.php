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
    $this->SetFont('Arial','B',7);
    // Movernos a la derecha
    $this->Cell(70);
	$this->Ln(10);
    // Título
    $this->Cell(200,10,'Reporte de devoluciones',0,0,'C');
    // Salto de línea
  
    $this->Ln(15);
    $this->cell(20, 5, 'Cota', 1, 0, 'C',0);
    $this->cell(25, 5, 'Fecha entrega', 1, 0, 'C',0);
    $this->cell(20, 5, 'Hora_entrega', 1, 0, 'C',0);
    $this->cell(30, 5, utf8_decode('Id estudiante'), 1, 0, 'C',0);
    $this->cell(20, 5, utf8_decode('Nombre'), 1, 0, 'C',0);
    $this->cell(20, 5, 'Cedula', 1, 0, 'C',0);
    $this->cell(20, 5, 'Registrado por', 1, 0, 'C',0);
    $this->cell(20, 5, 'Eliminado por', 1, 1, 'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',7);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'conexion.php';
$consulta = "SELECT * FROM entrega_libro";
$resultado = mysqli_query($conection, $consulta);
 
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',7);
$pdf->SetMargins(10,40,10);

while($row = $resultado->fetch_assoc()){

 $pdf->cell(20, 5, $row['cota'], 1, 0, 'C',0);
 $pdf->cell(25, 5, $row['fecha_entrega'], 1, 0, 'C',0);
 $pdf->cell(20, 5, $row['hora_entrega'], 1, 0, 'C',0);
 $pdf->cell(30, 5, $row['id_estudiante_el'], 1, 0, 'C',0);
 $pdf->cell(20, 5, $row['nombre'], 1, 0, 'C',0);
 $pdf->cell(20, 5, $row['cedula'], 1, 0, 'C',0);
 $pdf->cell(20, 5, $row['id_userCreador'], 1, 0, 'C',0);
 $pdf->cell(20, 5, $row['id_userDeleted'], 1, 1, 'C',0);

$pdf->SetFillColor(55, 127, 80);
$pdf->SetDrawColor(61, 30, 50);
}
$pdf->Output();
?>