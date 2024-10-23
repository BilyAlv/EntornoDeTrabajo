<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiradas de Dados</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <h1>Tiradas de Dados</h1>
    <?php
        $dado1 = rand(1, 6); 
        $dado2 = rand(1, 6); 

        print "<p>\n";
        print "<img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">\n"; 
        print "<img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">\n"; 
        print "</p>\n";

        $total = $dado1 + $dado2; 

        print "<p>Total: <span class=\"total\">$total</span></p>\n"; 
    ?>
</body>
</html>
