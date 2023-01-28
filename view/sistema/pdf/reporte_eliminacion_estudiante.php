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
    $this->SetFont('Arial','B',8);
    // Movernos a la derecha
    $this->Cell(70);
	$this->Ln(10);
    // Título
    $this->Cell(200,10,'Reporte de estudiantes eliminados',0,0,'C');
    // Salto de línea
  
    $this->Ln(15);
    $this->cell(20, 5, 'Cedula', 1, 0, 'C',0);
    $this->cell(25, 5, 'Nombre', 1, 0, 'C',0);
    $this->cell(22, 5, 'Apellido', 1, 0, 'C',0);
    $this->cell(30, 5, utf8_decode('Numero de tlf'), 1, 0, 'C',0);
    $this->cell(20, 5, utf8_decode('Carrera'), 1, 0, 'C',0);
    $this->cell(23, 5, 'Eliminado por', 1, 0, 'C',0);
    $this->cell(25, 5, 'Fecha eliminacion', 1, 0, 'C',0);
    $this->cell(24, 5, 'Hora eliminacion', 1, 1, 'C',0);
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
$consulta = "SELECT * FROM eliminar_inf_estudiante";
$resultado = mysqli_query($conection, $consulta);
 
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',7);
$pdf->SetMargins(10,40,10);

while($row = $resultado->fetch_assoc()){

 $pdf->cell(20, 5, $row['cedula'], 1, 0, 'C',0);
 $pdf->cell(25, 5, $row['nombre'], 1, 0, 'C',0);
 $pdf->cell(22, 5, $row['apellido'], 1, 0, 'C',0);
 $pdf->cell(30, 5, $row['numero'], 1, 0, 'C',0);
 $pdf->cell(20, 5, $row['carrera'], 1, 0, 'C',0);
 $pdf->cell(23, 5, $row['id_userdeleted'], 1, 0, 'C',0);
 $pdf->cell(25, 5, $row['fecha_eliminar'], 1, 0, 'C',0);
 $pdf->cell(24, 5, $row['hora_eliminar'], 1, 1, 'C',0);
$pdf->SetFillColor(55, 127, 80);
$pdf->SetDrawColor(61, 30, 50);
}
$pdf->Output();
?>