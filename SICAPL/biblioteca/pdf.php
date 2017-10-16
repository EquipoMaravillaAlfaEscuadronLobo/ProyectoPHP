<?php 
	$direccion=$_GET['direccion'];
	header('content-type: application/pdf');
	readfile($direccion);
	//echo $direccion;
 ?>