<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatorio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $numeroAleatorio = rand(1, 6);
        echo "<div class='numero'>$numeroAleatorio</div>";
    ?>
</body>
</html>
