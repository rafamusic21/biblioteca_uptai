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
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(70);
	$this->Ln(15);
    // Título
    $this->Cell(200,10,'Reporte de usuarios',0,0,'C');
    // Salto de línea
  
    $this->Ln(20);
    $this->cell(29, 10, 'Nombres', 1, 0, 'C',0);
    $this->cell(50, 10, 'Correo', 1, 0, 'C',0);
    $this->cell(45, 10, 'Usuario', 1, 0, 'C',0);
    $this->cell(29, 10, 'Rol', 1, 0, 'C',0);
    $this->cell(29, 10, 'Creador', 1, 1, 'C',0);
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
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conection, $consulta);
 
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->SetMargins(10,60,10);

while($row = $resultado->fetch_assoc()){

 $pdf->cell(29, 10, $row['nombre_u'], 1, 0, 'C',0);
 $pdf->cell(50, 10, $row['correo'], 1, 0, 'C',0);
 $pdf->cell(45, 10, $row['usuario'], 1, 0, 'C',0);
 $pdf->cell(29, 10, $row['rol'], 1, 0, 'C',0);
 $pdf->cell(29, 10, $row['id_userCreador'], 1, 1, 'C',0);

$pdf->SetFillColor(55, 127, 80);
$pdf->SetDrawColor(61, 30, 50);
}
$pdf->Output();
?>