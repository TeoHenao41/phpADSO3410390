<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos PHP</title>
</head>
<body>
    <?php
    $limite = 50;
    for ($i=0; $i < $limite; $i++) { 
        # Impresion de los números del 0 a 50
        echo "Número: $i<br>";
    }

    // Ciclo while
    $limite = rand(50, 100);
    $inicio = 1;
    echo "<hr>";
    # Impresion de numeros del 1 al limite aleatorio (50 y 100)
    while ($inicio <= $limite) {
        echo "[WHILE] Número: ".$inicio."<br>";
        $inicio++;
    }

    // DO WHILE
    $dia = date("d");
    $inicio = rand(10,20);
    # Mostrar los numeros de un número random (10 y 20) a la fecha actual
    do {
        echo "[DO...WHILE] Número $inicio";
        $inicio++;
    } while ($inicio <= $dia);

    # MOSTRAR LA TABLAS DE MULTIPLICAR
    # Utilizar FOR, WHILE y DO...WHILE
    $numero = 2;
    echo "<hr>";
    for ($i = 1; $i <= 10; $i++) {
    echo "[FOR]$numero x $i = " . ($numero * $i) . "<br>";
    }

    // WHILE
    $numero = 2;
    $tabla = 2;
    echo "<hr>";
    while ($numero <= 10){
    echo "[WHILE] $numero x $tabla =" .($numero * $tabla)."<br>";
    $numero++;
    } 

    $numero = 2;
    $tabla = 2;
    echo "<hr>";
    do {
    echo "[DO.....WHILE] $numero x $tabla =" .($numero * $tabla)."<br>";
    $numero++;
    } while ($numero <= 10);

    ?>
</body>
</html>