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
    $this->Cell(200,15,'Reporte de user',0,0,'C');
    // Salto de línea
  
    $this->Ln(15);
    $this->cell(35, 6, 'Id_auditoria', 1, 0, 'C',0);
    $this->cell(35, 6, 'usuario', 1, 0, 'C',0);
    $this->cell(35, 6, utf8_decode('creacion de registro'), 1, 0, 'C',0);
    $this->cell(25, 6, utf8_decode('lista'), 1, 0, 'C',0);
    $this->cell(25, 6, 'edicion', 1, 0, 'C',0);
    $this->cell(25, 6, 'eliminacion', 1, 0, 'C',0);
    $this->cell(25, 6, 'hora', 1, 0, 'C',0);
    $this->cell(25, 6, 'fecha', 1, 1, 'C',0);
   
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
$consulta = "SELECT a.id_audi_user, a.agg_user_audi,a.lista_user_audi,a.edit_user_audi,a.delet_user_audi, a.hora_user_audi, a.fecha_user_audi, u.usuario FROM auditoria_user a INNER JOIN usuarios u ON a.agg_user_audi = u.idusuario OR a.lista_user_audi = u.idusuario OR a.edit_user_audi = u.idusuario OR a.delet_user_audi = u.idusuario ORDER BY a.id_audi_user ASC";
$resultado = mysqli_query($conection, $consulta);
 
$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
$pdf->SetMargins(10,60,10);

while($row = $resultado->fetch_assoc()){

 $pdf->cell(35, 6, $row['id_audi_user'], 1, 0, 'C',0);
 $pdf->cell(35, 6, $row['usuario'], 1, 0, 'C',0);
 $pdf->cell(35, 6, $row['agg_user_audi'], 1, 0, 'C',0);
 $pdf->cell(25, 6, $row['lista_user_audi'], 1, 0, 'C',0);
 $pdf->cell(25, 6, $row['edit_user_audi'], 1, 0, 'C',0);
 $pdf->cell(25, 6, $row['delet_user_audi'], 1, 0, 'C',0);
 $pdf->cell(25, 6, $row['hora_user_audi'], 1, 0, 'C',0);
 $pdf->cell(25, 6, $row['fecha_user_audi'], 1, 1, 'C',0);

$pdf->SetFillColor(55, 127, 80);
$pdf->SetDrawColor(61, 30, 50);
}
$pdf->Output();
?>