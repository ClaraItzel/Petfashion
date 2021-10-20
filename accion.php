<?php
$valor = $_POST["ticket"];
//$rfc = $_POST["rfcEmi"];
//$empresa = $_POST["empresa"];
$rfcCliente = $_POST["rfcCli"];
$correo = $_POST["correo"];
//$Nombre = $_POST["Nombre"];
//$fecha = $_POST["fecha"];
//$comprobante = $_POST["comprobante"];
//$regimen = $_POST["regimen"];
$pago = $_POST["pago"];
//$c_producto = $_POST["c_producto"];
//$cantidad = $_POST["cantidad"];
//$descripcion = $_POST["descripcion"];
////$v_unitario = $_POST["v_unitario"];
//$sello = $_POST["sello"];
//$importe= $v_unitario*$cantidad;
//$iva= $importe*0.16;
//$total= $importe+$iva;
// el valor

require('FPDF/fpdf.php');

class PDF extends FPDF
{
// Cabecera de paginas
function Header()
{
    //Salto de linea
    $this->Ln(7);
    // Logo
    $this->Image('logo.jpg',165,30,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(100,10,utf8_decode('Factura electrónica (CFDI)'),1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}
//conexion
require 'conexion/conexion.php';
//consulta a la tabla factura


$consulta="select * from factura where numfactura = '$valor' ";
$resultado= $mysqli->query($consulta);
/* $sql= "INSERT INTO factura(numfactura,rfcemisor,nombreemisor,rfcreceptor,nombrereceptor,fechaemision,tipodecomprobante,regimenfiscal,claveproducto,cantidad,descripcion,valorunitario,importe,iva,total,metododepago,formadepago,tipodepago,sellodigital)
values($valor,$rfc,$empresa,$rfcCliente,$Nombre,$fecha,$comprobante,$regimen,$c_producto,$cantidad,$descripcion,$v_unitario,$importe,$iva,$total,$pago,$pago,$pago,$sello);"
 */
if ($resultado===false) {
    trigger_error('Error, favor de avisar al administrador SQL:'.$sql.'Error:'.$conexion->error, E_USER_ERROR);
  }else{
  $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
while($row=$resultado->fetch_assoc())
{
    $pdf->Cell(120,10,utf8_decode('Número de factura'),1,1,'C');
    $pdf->Cell(120,10, $valor,1,1,'C');

//Salto de linea
$pdf->Multicell(0,15,"");

$pdf->Cell(45,10,'RFC Emisor',1,0,'C');
$pdf->Cell(50,10,$row['rfcemisor'],1,0,'C',0);
$pdf->Cell(45,10,'Nombre Emisor',1,0,'C');
$pdf->Cell(50,10,$row['nombreemisor'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(45,10,'RFC del Receptor',1,0,'C');
$pdf->Cell(50,10,$rfcCliente,1,0,'C',0);
$pdf->Cell(45,10,'Nombre del Receptor',1,0,'C');
$pdf->Cell(50,10,$row['nombrereceptor'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(45,10,utf8_decode('Fecha Emisión'),1,0,'C');
$pdf->Cell(90,10, $row['fechaemision'],1,1,'C',0);
$pdf->Cell(45,10,'Tipo de Comprobante',1,0,'C');
$pdf->Cell(90,10,$row['tipodecomprobante'],1,1,'C',0);
$pdf->Cell(45,10,'Regimen Fiscal',1,0,'C');
$pdf->Cell(90,10,$row['regimenfiscal'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(30,10,'Clave Poducto',1,0,'C');
$pdf->Cell(25,10,'Cantidad',1,0,'C');
$pdf->Cell(75,10,utf8_decode('Descripción'),1,0,'C');
$pdf->Cell(30,10,'Valor Unitario',1,0,'C');
$pdf->Cell(30,10,'Importe',1,0,'C');
$pdf->Multicell(0,05," ");

$pdf->Cell(30,10,$row['claveproducto'],1,0,'C',0);
$pdf->Cell(25,10,$row['cantidad'],1,0,'C',0);
$pdf->Cell(75,10,$row['descripcion'],1,0,'C',0);
$pdf->Cell(30,10,$row['valorunitario'],1,0,'C',0);
$pdf->Cell(30,10,$row['importe'],1,1,'C',0);

$pdf->Cell(130,10,'IVA',1,0,'C');
$pdf->Cell(25,10,$row['iva'],1,1,'C',0);

$pdf->Cell(130,10,'TOTAL',1,0,'C');
$pdf->Cell(25,10,$row['total'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(30,10,utf8_decode('Método de pago'),1,0,'C');
$pdf->Cell(90,10,$row['metododepago'],1,1,'C',0);
$pdf->Cell(30,10,('Forma de pago'),1,0,'C');
$pdf->Cell(90,10,$pago,1,1,'C',0);
$pdf->Cell(30,10,('Tipo de pago'),1,0,'C');
$pdf->Cell(90,10,$row['tipodepago'],1,1,'C',0);

$pdf->Cell(30,10,('Sello digital'),1,0,'C');
$pdf->Cell(90,10,$row['sellodigital'],1,0,'C',0);

$pdf->Multicell(0,15," ");
  }
$pdf->Output();
  }
//Creacion del objeto de la clase heredada
/* $pdf= new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

//Ciclo para obtener todos los datos
while($row=$resultado->fetch_assoc())
{

    $pdf->Cell(120,10,utf8_decode('Número de factura'),1,1,'C');
    $pdf->Cell(120,10, $valor,1,1,'C');

//Salto de linea
$pdf->Multicell(0,15,"");

$pdf->Cell(45,10,'RFC Emisor',1,0,'C');
$pdf->Cell(50,10,$row['rfcemisor'],1,0,'C',0);
$pdf->Cell(45,10,'Nombre Emisor',1,0,'C');
$pdf->Cell(50,10,$row['nombreemisor'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(45,10,'RFC del Receptor',1,0,'C');
$pdf->Cell(50,10,$rfcCliente,1,0,'C',0);
$pdf->Cell(45,10,'Nombre del Receptor',1,0,'C');
$pdf->Cell(50,10,$row['nombrereceptor'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(45,10,utf8_decode('Fecha Emisión'),1,0,'C');
$pdf->Cell(90,10, $row['fechaemision'],1,1,'C',0);
$pdf->Cell(45,10,'Tipo de Comprobante',1,0,'C');
$pdf->Cell(90,10,$row['tipodecomprobante'],1,1,'C',0);
$pdf->Cell(45,10,'Regimen Fiscal',1,0,'C');
$pdf->Cell(90,10,$row['regimenfiscal'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(30,10,'Clave Poducto',1,0,'C');
$pdf->Cell(25,10,'Cantidad',1,0,'C');
$pdf->Cell(75,10,utf8_decode('Descripción'),1,0,'C');
$pdf->Cell(30,10,'Valor Unitario',1,0,'C');
$pdf->Cell(30,10,'Importe',1,0,'C');
$pdf->Multicell(0,05," ");

$pdf->Cell(30,10,$row['claveproducto'],1,0,'C',0);
$pdf->Cell(25,10,$row['cantidad'],1,0,'C',0);
$pdf->Cell(75,10,$row['descripcion'],1,0,'C',0);
$pdf->Cell(30,10,$row['valorunitario'],1,0,'C',0);
$pdf->Cell(30,10,$row['importe'],1,1,'C',0);

$pdf->Cell(130,10,'IVA',1,0,'C');
$pdf->Cell(25,10,$row['iva'],1,1,'C',0);

$pdf->Cell(130,10,'TOTAL',1,0,'C');
$pdf->Cell(25,10,$row['total'],1,1,'C',0);

$pdf->Multicell(0,15," ");

$pdf->Cell(30,10,utf8_decode('Método de pago'),1,0,'C');
$pdf->Cell(90,10,$row['metododepago'],1,1,'C',0);
$pdf->Cell(30,10,('Forma de pago'),1,0,'C');
$pdf->Cell(90,10,$pago,1,1,'C',0);
$pdf->Cell(30,10,('Tipo de pago'),1,0,'C');
$pdf->Cell(90,10,$row['tipodepago'],1,1,'C',0);

$pdf->Cell(30,10,('Sello digital'),1,0,'C');
$pdf->Cell(90,10,$row['sellodigital'],1,0,'C',0);

$pdf->Multicell(0,15," ");
}


$pdf->Output();
 */
?>



