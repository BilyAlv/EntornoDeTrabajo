<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres Cartas Aleatorias</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <?php
        // Generar tres números aleatorios entre 1 y 10
        $carta1 = rand(1, 10);
        $carta2 = rand(1, 10);
        $carta3 = rand(1, 10);
        
        // Encontrar el valor más alto
        $valorMaximo = max($carta1, $carta2, $carta3);
        
        // Mostrar las cartas como imágenes
        echo "<div class='cartas'>";
        echo "<img src='img/$carta1.png' alt='Carta $carta1' class='carta'>";
        echo "<img src='img/$carta2.png' alt='Carta $carta2' class='carta'>";
        echo "<img src='img/$carta3.png' alt='Carta $carta3' class='carta'>";
        echo "</div>";
        
        // Mostrar el valor más alto
        echo "<h2>El valor más alto es: $valorMaximo</h2>";
    ?>
</body>
</html>
