<?php
    include_once '../PhpJasperLibrary/tcpdf/tcpdf.php';
    include_once '../PhpJasperLibrary/PHPJasperXML.inc.php';
    include_once '../setting.php';
    
    
    $xml =  simplexml_load_file("reporte1.jrxml");
    $PHPJasperXML = new PHPJasperXML();
    $PHPJasperXML ->arrayParameter=array("parameter1"=>1);
    $PHPJasperXML ->xml_dismantle($xml);
    $PHPJasperXML ->transferDBtoArray($server, $user, $pass, $db);   
    $PHPJasperXML ->outpage("I");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

