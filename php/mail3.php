<?php
//ini_set( 'display_errors', 1 );
error_reporting( E_ALL );


//traemos los datos del formulario.
$nombre=$_POST["nombre"];
$from=$_POST["email"];
$telefono = $_POST["telefono"];
$text=$_POST["texto"];



$mje = $text;


$para      = 'info@oxisteel.com';
$titulo    = 'Contacto';
$mensaje   = 'Nombre: '.$nombre."<br />\n".'E-Mail: '.$from. "<br />\n".' Telefono: '.$telefono."<br />\n". 'Mensaje: '.$text."<br />\n";
$cabeceras = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);

echo "<p>El mensaje ha sido enviado con exito. Nos estaremos comunicando a la brevedad.</p>";



?>