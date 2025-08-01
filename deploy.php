<?php
// ✅ Cambia este token por uno más largo si deseas
$tokenEsperado = 'mi_secreto_3948xyz';

if (!isset($_GET['token']) || $_GET['token'] !== $tokenEsperado) {
    http_response_code(403);
    exit('❌ Acceso denegado');
}

// Ejecutar git pull
$salida = shell_exec('cd /home/jordanrobert/www && git pull 2>&1');
echo "<pre>$salida</pre>";
?>
