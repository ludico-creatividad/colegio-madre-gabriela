<?php
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

if(!empty($_POST['nombre']) and !empty($_POST['mensaje'])){

    // We take the data that came from POST and sanitize it.

    $nombre = sanitize($_POST['nombre'], 'alpha');
    $correo = sanitize($_POST['correo'], 'email');
    $asunto = sanitize($_POST['asunto'], 'varchar');
    $mensaje = sanitize($_POST['mensaje'], 'txt');

    $to = 'diegomtzb@hotmail.com';
    $subject = "contacto";

    $body = "<p>Te han enviado un mensaje desde tu web, revisa aqui tu mensaje:</p>
	<p><strong>Nombre:</strong> ".$nombre."</p>
	<p><strong>Correo:</strong> ".$correo."</p>
	<p><strong>Asunto:</strong> ".$asunto."</p>
	<p><strong>Message:</strong> ".$mensaje."

	";
    $headers = 'From: <no-reply@madregabriela.edu.co>' . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    // mail($to, $subject, $body, $headers)

    if(true){
        $alert =  '<div class="alert alert-success">Tu mensaje ha sido enviado</div>';
    }else{
        $alert =  '<div class="alert alert-danger">Tu mensaje no pudo ser enviado</div>';
    }

}else{
    $alert =  '<div class="alert alert-warning">Llena todos los datos</div>';
}
