<?php
include '../manage_admin_panel/include/config.php';

use Dompdf\Dompdf;
use Dompdf\Options;
require_once "dompdf/autoload.inc.php";
$options = new Options();
$options->set('chroot',realpath(''));

$pdf = new Dompdf($options);

$pdf->set_option('isRemoteEnabled', true);
$pdf->set_option('isPhpEnabled', true);
//$pdf->set_option('defaultFont', 'Helvetica');
$pdf->set_option('isHtml5ParserEnabled', true);

$html = file_get_contents('demo.php?id=1');




$pdf->loadHtml($html);

$pdf->setPaper('A4', 'landscape');

$pdf->render();


$outputFile = 'output.pdf';
file_put_contents($outputFile, $pdf->output());

$file="abhi";
$pdf->stream($file,array("Attachments"=>0));

?>