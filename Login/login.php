<?php
// Define los nombres de usuario y contraseñas permitidos
$usuarios_validos = array(
	"usuario1" => "contraseña1",
	"usuario2" => "contraseña2",
	"usuario3" => "contraseña3"
);

// Obtiene los valores ingresados en el formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica si el nombre de usuario y la contraseña son válidos
if (isset($usuarios_validos[$username]) && $usuarios_validos[$username] == $password) {
	// Inicio de sesión exitoso, redirige al usuario a la página de inicio
	header("Location: inicio.php");
	exit;
} else {
	// Inicio de sesión fallido, muestra un mensaje de error
	echo "Nombre de usuario o contraseña incorrectos.";
}
?>
