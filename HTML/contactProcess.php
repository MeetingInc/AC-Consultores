<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "Website AC Consultores";
$EmailTo = "info@analisisyconsultorias.es";
$Subject = "Mensaje desde la web.";
$nombre = Trim(stripslashes($_POST['nombre'])); 
$email = Trim(stripslashes($_POST['email'])); 
$empresa = Trim(stripslashes($_POST['empresa'])); 
$asunto = Trim(stripslashes($_POST['asunto'])); 
$mensaje = Trim(stripslashes($_POST['mensaje'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "Ha recibido un mensaje desde la web";
$Body .= "\n";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Empresa:";
$Body .= $empresa;
$Body .= "\n";
$Body .= "Asunto: ";
$Body .= $asunto;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
?>
