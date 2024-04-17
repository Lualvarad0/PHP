<?php

// Constantes para los datos de conexión
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "tesis");

// Crear conexión utilizando PDO (más seguro y versátil)
try {
    $conexion = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Configurar el modo de error de PDO para que lance excepciones en lugar de advertencias
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Establecer el conjunto de caracteres utf8
    $conexion->exec("SET NAMES utf8");
    // Opcional: Establecer el collation de la sesión
    $conexion->exec("SET SESSION collation_connection ='utf8_unicode_ci'");
    echo "Conexión exitosa";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Cerrar conexión al finalizar el script (opcional, PDO lo hace automáticamente al salir del ámbito)
// $conexion = null;
