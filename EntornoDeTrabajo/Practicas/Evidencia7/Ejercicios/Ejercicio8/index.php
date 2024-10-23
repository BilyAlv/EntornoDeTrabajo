<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de Dado en Idioma Aleatorio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Tirada de Dado en Idioma Aleatorio</h1>
    <div class="dado-container">
        <?php
            $idiomas = [
                'es' => ['uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis'], // Español
                'en' => ['one', 'two', 'three', 'four', 'five', 'six'], // Inglés
                'fr' => ['un', 'deux', 'trois', 'quatre', 'cinq', 'six'], // Francés
                'de' => ['eins', 'zwei', 'drei', 'vier', 'fünf', 'sechs'], // Alemán
            ];

            $idiomaAleatorio = array_rand($idiomas);
            $nombresDados = $idiomas[$idiomaAleatorio];

            $valorDado = rand(1, 6);

            echo "<img class='dado' src='img/$valorDado.png' alt='Dado $valorDado'>";

            echo "<h2>Has obtenido un: <b>{$nombresDados[$valorDado - 1]}</b></h2>";
        ?>
    </div>
    <h3>Idioma: <b><?php echo ucfirst($idiomaAleatorio); ?></b></h3>
</body>
</html>
