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
    $this->Cell(200,10,'Reporte de respaldo de los libros',0,0,'C');
    // Salto de línea
  
    $this->Ln(15);
    $this->cell(22, 5, 'Cota', 1, 0, 'C',0);
    $this->cell(29, 5, 'Nombre', 1, 0, 'C',0);
    $this->cell(21, 5, 'Autor', 1, 0, 'C',0);
    $this->cell(30, 5, utf8_decode('Año del libro'), 1, 0, 'C',0);
    $this->cell(21, 5, utf8_decode('Nª ejemplar'), 1, 0, 'C',0);
    $this->cell(21, 5, 'Carrera', 1, 0, 'C',0);
    $this->cell(21, 5, 'Fecha respaldo', 1, 0, 'C',0);
    $this->cell(21, 5, 'Creado por', 1, 1, 'C',0);
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
$consulta = "SELECT * FROM respaldo_libros";
$resultado = mysqli_query($conection, $consulta);
 
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',7);
$pdf->SetMargins(10,40,10);

while($row = $resultado->fetch_assoc()){

 $pdf->cell(22, 5, $row['cota'], 1, 0, 'C',0);
 $pdf->cell(29, 5, $row['nombre_libro'], 1, 0, 'C',0);
 $pdf->cell(21, 5, $row['autor'], 1, 0, 'C',0);
 $pdf->cell(30, 5, $row['año_libro'], 1, 0, 'C',0);
 $pdf->cell(21, 5, $row['n_ejemplar'], 1, 0, 'C',0);
 $pdf->cell(21, 5, $row['carrera'], 1, 0, 'C',0);
 $pdf->cell(21, 5, $row['fecha_respaldo'], 1, 0, 'C',0);
 $pdf->cell(21, 5, $row['id_usercreador'], 1, 1, 'C',0);


$pdf->SetFillColor(55, 127, 80);
$pdf->SetDrawColor(61, 30, 50);
}
$pdf->Output();
?>