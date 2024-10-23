<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara de Dado Aleatoria</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <?php
        $numeroAleatorio = rand(1, 6);
        //Utilice imagenes creadas por mi en Canvas
        $rutaImagen = "img/$numeroAleatorio.png";
        echo "<img src='$rutaImagen' alt='Dado' class='dado'>";
    ?>
</body>
</html>
