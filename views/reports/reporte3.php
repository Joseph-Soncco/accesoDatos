<?php
//Este archivo funciona como un motor de RENDERIZADO
//Input (HTML) > procesar > PDF
//require_once dirname(__FILE__).'/../vendor/autoload.php';
require_once '../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf; //Core = núcleo librería
use Spipu\Html2Pdf\Exception\Html2PdfException; //Identificación errores
use Spipu\Html2Pdf\Exception\ExceptionFormatter; //Formatear pdf

try {

    ob_start();
    include_once '../contents/content-reporte3.php';
    $content = ob_get_clean();

    //El último valor son los márgenes
    $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', array(20, 15, 15, 15));
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('Mascotas.pdf');

} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}