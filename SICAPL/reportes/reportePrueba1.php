<?php
    include_once '../class/tcpdf/tcpdf.php';
    include_once '../class/PHPJasperXML-0.9e.inc.php';
    include_once '../setting.php';
    
    $PHPJasperXML = new PHPJasperXML();
    //$PHPJasperXML ->
    $PHPJasperXML ->load_xml_file('pruebaBarCode.jrxml');
    $PHPJasperXML ->transferDBtoArray($server, $user, $pass, $db);   
    $PHPJasperXML ->outpage("I");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

