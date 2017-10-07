 <?php  



function randomText($length) {   //FUNCION PARA CREAR UNA CLAVE ALEATORIA 
    $pattern = "123456789PIUYTREWQASDFGHJKLMNBVCXZ123456789PLMK1IJNBHUYGVC123456789FTRDXZSEWAQWSDERFTGYHUJ123569876543ERDFREDESWQASWQASDGHGTY";  
    for($i=0;$i<$length;$i++) {  
      $key .= $pattern{rand(0,35)};  
    }  
    return $key;  
}  

$_SESSION['tmptxt_seg'] = randomText(5); //aqui guardo el numero que se escribira en la imagen en variable de sesion para su us en la confirmacion 
$captcha_seg = imagecreatefromgif("../carpeta/carpeta/bgcaptcha.gif"); //obtenemos la imagen de fondo 
$colText = imagecolorallocate($captcha_seg, 0, 0, 0);  
imagestring($captcha_seg, 5, 10, 4, $_SESSION['tmptxt_seg'], $colText);  

header("Content-type: image/gif");  
imagegif($captcha_seg);  
?>