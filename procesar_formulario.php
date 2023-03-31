<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configurar los detalles del correo electrónico
$para = 'esterlin25pero@gmail.com';
$titulo = 'Mensaje desde el formulario de contacto';
$mensaje_correo = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

// Enviar el correo electrónico
mail($para, $titulo, $mensaje_correo);

// Redirigir al usuario a una página de confirmación
header('Location: confirmacion.html');
?>
