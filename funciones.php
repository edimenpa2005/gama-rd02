<?php
$nombre = $_POST['tnombre'];
$email = $_POST['tcorreo'];
$mensaje = $_POST['tdominio'];
$para = 'gamadigital.net@gmail.com';
$titulo = 'SUBSCRIPCION';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $tnombre\n E-Mail: $tcorreo\n Mensaje:\n $tdominio";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://gamadigital.net';
</script>";
} 
else {
	echo 'Falló el envio';
}
}
?>