<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Círculos Aleatorios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <?php
            $numeroCirculos = rand(1, 10);
            for ($i = 0; $i < $numeroCirculos; $i++) {
                echo "<tr><td><div class='circulo'></div></td></tr>"; // Cada círculo en un <td> diferente dentro de un <tr>
            }
        ?>
    </table>
</body>
</html>
