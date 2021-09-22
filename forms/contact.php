<?php
 $destino = 'eddiemedina110@gmail.com';

 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $mail = "Nombre: " . $name ; 

 $carta = "De: $name \n";
 $carta .= "Correo: $email \n";
 $carta .= "Mensaje: $message";

 mail($destino, "Email", $carta)

?>
