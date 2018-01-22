<?php 
	$direccion=$_GET['direccion'];
	header('content-type: application/pdf');
	readfile("../biografias/".$direccion);
	//echo $direccion;
 ?>