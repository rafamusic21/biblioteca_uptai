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
    $this->Cell(200,15,'Reporte auditoria de libros',0,0,'C');
    // Salto de línea
  
    $this->Ln(15);
    $this->cell(27, 6, 'Id_auditoria', 1, 0, 'C',0);
    $this->cell(35, 6, utf8_decode('Creacion de registro'), 1, 0, 'C',0);
    $this->cell(15, 6, utf8_decode('Lista'), 1, 0, 'C',0);
    $this->cell(15, 6, 'Edicion', 1, 0, 'C',0);
    $this->cell(22, 6, 'Eliminacion', 1, 0, 'C',0);
    $this->cell(20, 6, utf8_decode('prestamo'), 1, 0, 'C',0);
    $this->cell(20, 6, 'Retorno', 1, 0, 'C',0);
    $this->cell(15, 6, 'Hora', 1, 0, 'C',0);
    $this->cell(18, 6, 'Fecha', 1, 1, 'C',0);
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
$consulta = "SELECT * FROM auditoria_libro";
$resultado = mysqli_query($conection, $consulta);
 
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->SetMargins(10,60,10);

while($row = $resultado->fetch_assoc()){

 $pdf->cell(27, 6, $row['id_audi_libro'], 1, 0, 'C',0);
 $pdf->cell(35, 6, $row['agg_libro_audi'], 1, 0, 'C',0);
 $pdf->cell(15, 6, $row['lista_libro_audi'], 1, 0, 'C',0);
 $pdf->cell(15, 6, $row['edit_libro_audi'], 1, 0, 'C',0);
 $pdf->cell(22, 6, $row['delet_libro_audi'], 1, 0, 'C',0);
 $pdf->cell(20, 6, $row['pres_libro_audi'], 1, 0, 'C',0);
 $pdf->cell(20, 6, $row['retor_libro_audi'], 1, 0, 'C',0);
 $pdf->cell(15, 6, $row['hora_audi_libro'], 1, 0, 'C',0);
 $pdf->cell(18, 6, $row['fecha_audi_libro'], 1, 1, 'C',0);

$pdf->SetFillColor(55, 127, 80);
$pdf->SetDrawColor(61, 30, 50);
}
$pdf->Output();
?>