<?php
    // $_post[] es un array asociativo que trae los enviados por post del formulario
    $nombre = isset($_POST["txtNombre"]) ? $_POST["txtNombre"] : "";
    $email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"] : "";
    $telefono = $_POST["txtTelefono"] ?? 0;
    $ciudad = $_POST["txtCiudad"] ?? "";
    $edad = $_POST["txtEdad"] ?? -1;
    if ($edad >= 18){
        $msg = "Usted es mayor de edad";
    }elseif ($edad >= 0) {
        $msg = "Usted es menor de edad";
    } else {
        $msg = "Edad Incorrecta";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <div class="campo">
            <label for="Nombre">Nombre: <?php echo $nombre ?></label>
        </div>
        <div class="campo">
            <label for="Email">Email: <?php echo $email ?></label>
        </div>
        <div class="campo">
            <label for="Telefono">Telefono: <?php echo $telefono ?></label>
        </div>
        <div class="campo">
            <label for="Ciudad">Ciudad: <?php echo $ciudad ?></label>
        </div>
        <div class="campo">
            <label for="Edad">Edad: <?php echo $edad ?></label>
        </div>
        <div class="campo">
            <label>Mayoria edad: <?php echo $msg;?></label>
        </div>
    </main>
</body>
</html>