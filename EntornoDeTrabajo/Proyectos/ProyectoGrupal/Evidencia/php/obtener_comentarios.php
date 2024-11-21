<?php
$archivo = 'comentarios.json';

if (file_exists($archivo)) {
    $comentarios = json_decode(file_get_contents($archivo), true);
    echo json_encode($comentarios);
} else {
    echo json_encode([]);
}
?>
