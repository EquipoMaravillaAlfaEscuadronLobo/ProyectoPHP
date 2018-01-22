<?php
	/**
	* 
	*/
	
		$clasificacion = array(
"010 Bibliografía", 
"020 Bibliotecnología e informática", 
"030 Enciclopedias generales", 
"040 Este número no tiene ningún uso.", 
"050 Publicaciones en serie", 
"060 Organizaciones y museografía", 
"070 Periodismo, editoriales, diarios", 
"080 Colecciones generales", 
"090 Manuscritos y libros raros", 
"110 Metafísica", 
"120 Conocimiento, causa, fin, hombre", 
"130 Parapsicología, ocultismo", 
"140 Puntos de vista filosóficos", 
"150 Psicología", 
"160 Lógica", 
"170 Ética (filosofía moral)", 
"180 Filosofía antigua, medieval, oriental", 
"190 Filosofía moderna occidental", 
"210 Religión natural", 
"220 Biblia", 
"230 Teología cristiana", 
"240 Moral y prácticas cristianas", 
"250 Iglesia local y órdenes religiosas", 
"260 Teología social y eclesiología", 
"270 Historia y geografía de la iglesia", 
"280 Credos de la iglesia cristiana", 
"290 Otras religiones", 
"310 Estadística", 
"320 Ciencia política", 
"330 Economía", 
"340 Derecho", 
"350 Administración pública", 
"360 Patología y servicio sociales", 
"370 Educación", 
"380 Comercio", 
"390 Costumbres y folklore", 
"410 Lingüística", 
"420 Inglés y anglosajón", 
"430 Lenguas germánicas; alemán", 
"440 Lenguas romances; francés", 
"450 Italiano, rumano, rético", 
"460 Español y portugués", 
"470 Lenguas itálicas; latín", 
"480 Lenguas helénicas; griego clásico", 
"490 Otras lenguas", 
"510 Matemáticas", 
"520 Astronomía y ciencias afines", 
"530 Física", 
"540 Química y ciencias afines", 
"550 Geociencias", 
"560 Paleontología", 
"570 Ciencias biológicas", 
"580 Ciencias botánicas", 
"590 Ciencias zoológicas", 
"610 Ciencias médicas", 
"620 Ingeniería y operaciones afines", 
"630 Agricultura y tecnologías afines", 
"640 Economía doméstica", 
"650 Servicios administrativos empresariales", 
"660 Química industrial", 
"670 Manufacturas", 
"680 Manufacturas varias", 
"690 Construcciones", 
"710 Urbanismo y arquitectura del paisaje", 
"720 Arquitectura", 
"730 Artes plásticas; escultura", 
"740 Dibujo, artes decorativas y menores", 
"750 Pintura y pinturas", 
"760 Artes gráficas; grabados", 
"770 Fotografía y fotografías", 
"780 Música", 
"790 Entretenimiento", 
"810 Literatura americana en inglés", 
"820 Literatura inglesa y anglosajona", 
"830 Literaturas germánicas", 
"840 Literaturas de las lenguas romances", 
"850 Literaturas italiana, rumana", 
"860 Literaturas española y portuguesa", 
"870 Literaturas de las lenguas itálicas", 
"880 Literaturas de las lenguas helénicas", 
"890 Literaturas de otras lenguas", 
"910 Geografía; viajes", 
"920 Biografía y genealogía", 
"930 Historia del mundo antiguo", 
"940 Historia de Europa", 
"950 Historia de Asia", 
"960 Historia deÁfrica", 
"970 Historia de América del Norte", 
"980 Historia de América del Sur", 
"990 Historia de otras regiones", 
			);
		
			for ($i=0; $i <count($clasificacion) ; $i++) { 
			echo "<option onclick='llenarCodigo()' value='".$clasificacion[$i]."'>";
			
			}
			
		
		
	
?>