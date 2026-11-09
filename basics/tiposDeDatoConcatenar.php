<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Tipos de variables
    // En PHP no es necesario declarar el tipo de datos
    $dia = 4; // Tipo int
    $salario = 200000.50; //Tipo double
    $nombre = "Ana"; // tipo string o var
    $estado = true; // tipo boleano

    // Imprsion de vbles
    echo "<br>Vble tipo entero: $dia";
    echo "<br>Vble tipo double: ".$salario;
    echo "<br>Vble tipo string: ".$nombre;
    echo "<br>Vble tipo boleano: ".$estado;
    echo"<hr>";

    echo"{$nombre} gana \$$salario"; // Interpolacion y escape de caracteres
    echo "<br>";
    $texto = sprintf("Hoy es %d",$dia);
    echo $texto;
    $peras = 3;
    $manzana = 5;
    $mango = 4;
    $preciofrutas = 25500.30;
    $texto = sprintf("Soy %s y tengo %d peras, %d manzanas, %d mango y costaron $%.2f", $nombre, $peras, $manzana, $mango, $preciofrutas);
    echo "<br>".$texto;

    echo "<hr>";
    $titulo = "Programa de formacion";
    $texto = "Analisis y desarrollo de software";
    $html = <<<HTML
    <div class="card">
        <h2>$titulo</h2>
        <p>$texto</p>
    </div>
    HTML;
    echo "$html";

    echo "<hr>";

    $random = rand(10, 15);
    $randomText = ["diez", "once", "doce", "trece", "catorce", "quince"];
    $textoNumero = $randomText[$random - 10];
    echo "El numero aleatorio es: $random y en texto es: $textoNumero";

    ?>
</body>
</html>