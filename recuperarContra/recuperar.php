<?php
$subject="Hi There!!";
$to="tbubba28@gmail.com";
$body="Prueba para el cambio de contraena";
if (mail($to,$subject,$body))
echo "Mail sent successfully!";
else
echo "Mail not sent!";
?>