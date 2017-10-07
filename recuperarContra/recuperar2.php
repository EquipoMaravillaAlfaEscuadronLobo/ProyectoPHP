procesa los datos enviados por POST desde un form con tres campos, password,  password2 y tmptxt_seg 
<?php 
session_start(); //abrimos la sesion para poder despues pasar variables de una pagina a otra 

//datos para establecer la conexion con la base de mysql. 
$conexion=mysql_connect('localhost','xxxxxx','xxxxx')or die ('Ha fallado la conexión: '.mysql_error()); 
mysql_select_db('registro')or die ('Error al seleccionar la Base de Datos: '.mysql_error()); 



function quitar($mensaje) //funcion para quitar caracteres no permitidos 
{ 
    $nopermitidos = array("'",'\\','<','>',"\"",";","$","%","&","/","|","{","}","[","]","+","#"); 
    $mensaje = str_replace($nopermitidos, "", $mensaje); 
    return $mensaje; 
} 
function mysql_escape($cadena) { 
    if(get_magic_quotes_gpc() != 0) { 
        $cadena = stripslashes($cadena); 
    } 
    return mysql_real_escape_string($cadena); 
}   

if (isset($_POST["password"])) { 
     
    $password = quitar($_POST["password"]); //variable que viene del campo del form pasword 
    $password2 = quitar($_POST["password2"]);//variable que viene del campo del form pasword2 
                $password = mysql_escape($password);  //aplico la funcion mysql_escape 
                $password2 = mysql_escape($password2); 

    $password = md5($password); // codificamos los password con md5 
    $password2 = md5($password2); 
    $email = $_SESSION['email']; // recogemos la variable email y username que guardamos en la sesion en el script anterior 
                $username = $_SESSION['username'];  


     
     
    // Hay campos en blanco 
    if($password==NULL|$password2==NULL) { 
        echo "un campo está vacio."; 
     
        }else{ 
                              // si coiciden los codigos de seguridad 
            if (quitar($_SESSION['tmptxt_seg']) !== quitar($_POST['tmptxt_seg'])) {  
                    echo "Introdujo mal el codigo de seguridad."; 
                 
        } else {  
         
     
        // ¿Coinciden las contraseñas? 
        if($password!=$password2) { 
            echo "Las contraseñas no coinciden"; 
            formRegistro(); 
        }else{ 
         
         
        $query = "UPDATE usuarios 
            SET password = '$password' WHERE   usuario = '$username' OR email ='$email' " ; 
                mysql_query($query) or die(mysql_error());     
                 
            //obtengo los datos del usuario para mandar el email     
            $result = "SELECT * FROM usuarios WHERE password = '$password'"; 
                     
             $result = mysql_query($result) or die ( mysql_error() );         
         
            $row = mysql_fetch_array($result);  
                 
        echo "La activacion de su nuevo password  tuvo exito."; 
         
             

     
          

                 
                          // Datos del email 

$nombre_origen    = "Lo que sea"; 
$email_origen     = "aaaa@aaaaaa.com"; 
$email_copia      = "aaaa@aaaaaa.com"; 
$email_ocultos    = "aaaa@aaaaaa.com"; 
//$email_destino    = "".$row['email']."";   
$email_destino    = "aaaa@aaaaaa.com";  //cambiar esta linea por la de encima cuando se termine la aplicacion para pruebas pon tu email 


$asunto           = "Activacion de nueca contraseña, guarde este email."; 

$mensaje          = '<table width="629" border="0" cellspacing="1" cellpadding="2"> 
  <tr> 
    <td width="623" align="left"></td> 
  </tr> 
  <tr> 
    <td bgcolor="#2EA354"><div style="color:#FFFFFF; font-size:14; font-family: Arial, Helvetica, sans-serif; text-transform: capitalize; font-weight: bold;"><strong>     Estos son sus datos  '.$row['usuario'].'</strong></div></td> 
  </tr> 
  <tr> 
    <td height="95" align="left" valign="top"><div style=" color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-bottom:3px;"> USUARIO: '.$row['usuario'].'</strong><br><br><br> 
           
          <strong>SU EMAIL : </strong>'.$row['email'].'</strong><br><br><br> 
          <strong>REACTIVO SU NUEVA CONTRASEÑA SIN NINGUN INCIDENTE.</strong><br><br> 
          <strong>GRACIAS POR CONFIAR EN CEVIT.</strong><br> 
          <strong>PRONTO ACTUALIZAREMOS CONTENIDOS, ESTATE ATENTA/O.</strong><br> 
    </div> 
    </td> 
  </tr> 
</table>'; 

                 


$formato          = "html"; 

//*****************************************************************// 
$headers  = "From: $nombre_origen <$email_origen> \r\n"; 
$headers .= "Return-Path: <$email_origen> \r\n"; 
$headers .= "Reply-To: $email_origen \r\n"; 
$headers .= "X-Sender: $email_origen \r\n"; 
$headers .= "X-Priority: 3 \r\n"; 
$headers .= "MIME-Version: 1.0 \r\n"; 
$headers .= "Content-Transfer-Encoding: 7bit \r\n"; 

//*****************************************************************// 
  
if($formato == "html") 
 { $headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";  } 
   else 
    { $headers .= "Content-Type: text/plain; charset=iso-8859-1 \r\n";  } 

if (@mail($email_destino, $asunto, $mensaje, $headers))  
    { }  
      
    } 
    } 
    } 
    } 



?>