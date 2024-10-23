<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de Dos Dados</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <?php
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);

        echo "<div class='dados'>";
        echo "<img src='img/$dado1.png' alt='Dado $dado1' class='dado'>";
        echo "<img src='img/$dado2.png' alt='Dado $dado2' class='dado'>";
        echo "</div>";

        if ($dado1 == $dado2) {
            echo "<h2>¡Ha salido una pareja de valores iguales: $dado1!</h2>";
        } else {
            $mayor = max($dado1, $dado2);
            echo "<h2>El mayor valor obtenido es: $mayor</h2>";
        }
    ?>
</body>
</html>
