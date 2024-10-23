<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Círculos al Azar</title>
    <link rel="stylesheet" href="styles.css"> <!-- Vincular el archivo CSS -->
</head>
<body>

<?php
    // Generar número aleatorio entre 1 y 10 para los círculos
    $circulos = rand(1, 10);

    // Mostrar el número de círculos
    if ($circulos == 1) {
        print "<h2>$circulos círculo</h2>\n";
    } else {
        print "<h2>$circulos círculos</h2>\n";
    }

    // Iniciar tabla
    print "<table>\n";
    print "<tbody>\n";
    print "<tr>\n";

    // Dibujar los círculos
    for ($i = 0; $i < $circulos; $i++) {
        print "<td>\n";
        print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\">\n";
        print "  <circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"black\" />\n";  // Círculo negro
        print "</svg>\n";
        print "</td>\n";
    }

    // Cerrar tabla
    print "</tr>\n";
    print "</tbody>\n";
    print "</table>\n";
?>

</body>
</html>
