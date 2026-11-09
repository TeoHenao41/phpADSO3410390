<?php
# Operador ternario
    $nombre = isset($_POST ["txtnombre"]) ? $_POST ["txtnombre"] : "" ;
    if (isset($_POST ["txtnombre"])) {
        $nombre = $_POST ["txtnombre"];
        }else{
            $nombre = "";
        }
        $email = isset($_POST ["txtEmail"]) ? $_POST ["txtEmail"] : "" ;

        #Operador nulo seguro
        $telefono = $_POST ["txtTelefono"] ?? 0;
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
    </main>
</body>
</html>