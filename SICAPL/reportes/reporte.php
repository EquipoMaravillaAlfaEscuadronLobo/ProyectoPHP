<?php
	require './vendor/autoload.php';

	use Spipu\Html2Pdf\Html2Pdf;

	ob_start();
	require_once 'codigoBarras.php';
	$html=ob_get_clean();

	$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
	$html2pdf->writeHTML('<barcode dimension="1D" type="C128" value="cej-002-003-pa-003-002" label="label" style="width:70%; height:15mm; color: #770000; font-size: 4mm"></barcode>');
	$html2pdf->output('Reporte 1.pdf');

	?>