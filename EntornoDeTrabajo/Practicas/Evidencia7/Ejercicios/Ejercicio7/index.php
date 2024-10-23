<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de Dados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Tirada de Dados</h1>
    <div class="dados-container">
        <?php
            $cantidadDados = rand(1, 10);
            $totalPuntos = 0;

            for ($i = 0; $i < $cantidadDados; $i++) {
                $valorDado = rand(1, 6);
                $totalPuntos += $valorDado;

                echo "<img class='dado' src='img/$valorDado.png' alt='Dado $valorDado'>";
            }
        ?>
    </div>
    <h2>Total de dados: <?php echo $cantidadDados; ?></h2> 
    <h2>Total de puntos: <?php echo $totalPuntos; ?></h2>
</body>
</html>
