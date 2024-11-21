<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);
    $nombre = $input['nombre'];
    $texto = $input['comentario'];
    $fecha = date("Y-m-d H:i:s");

    $nuevoComentario = [
        "nombre" => htmlspecialchars($nombre),
        "texto" => htmlspecialchars($texto),
        "fecha" => $fecha
    ];

    $comentarios = [];
    $archivo = 'comentarios.json';

    if (file_exists($archivo)) {
        $comentarios = json_decode(file_get_contents($archivo), true);
    }

    $comentarios[] = $nuevoComentario;
    file_put_contents($archivo, json_encode($comentarios));

    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>
