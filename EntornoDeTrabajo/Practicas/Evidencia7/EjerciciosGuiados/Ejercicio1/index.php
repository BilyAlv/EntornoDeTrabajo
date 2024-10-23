<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Línea Aleatoria</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Generador de Línea Aleatoria</h1>
    <?php
    //Mejore el codigo proporcionado de ejemplo con esete ya que me daba error.
        $longitud = rand(10, 1000);
        print "<p>Longitud: $longitud px</p>\n";
        print "<svg width=\"$longitud\" height=\"10\">\n";
        print "    <line x1=\"0\" y1=\"5\" x2=\"$longitud\" y2=\"5\" stroke=\"black\" stroke-width=\"10\" />\n";
        print "</svg>\n";
    ?>

<br />
    <button onclick="location.reload();" title = "Generar una nueva linea de manera Aleatoria">Generar Nueva Línea</button>
</body>
</html>
