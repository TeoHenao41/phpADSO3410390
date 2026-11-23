<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";

$tipoEstudio = isset($_POST['txtTipoEstudio']) ? $_POST['txtTipoEstudio'] : "";


$deportesDisponibles = [
    "txtBaloncesto" => "Baloncesto",
    "txtFutbol"     => "Futbol",
    "txtTenis"      => "Tenis",
    "txtVoleibol"   => "Voleibol",
];
$deportes = [];
foreach ($deportesDisponibles as $campo => $deporte) {
    if (!empty($_POST[$campo])) {
        $deportes[] = $deporte;
    }
}

$observaciones = isset($_POST['txtObservaciones']) ? $_POST['txtObservaciones'] : "";


$nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
$tipoEstudio = htmlspecialchars($tipoEstudio, ENT_QUOTES, 'UTF-8');
$observaciones = htmlspecialchars($observaciones, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Datos del usuario</title>
</head>
<body>
    <main class="container">
        <h2>Datos del usuario</h2>
        <div class="campo">
            <label>Nombre: <?php echo $nombre; ?></label>
        </div>
        <div class="campo">
            <label>Tipo de estudio: <?php echo $tipoEstudio ? $tipoEstudio : "No especificado"; ?></label>
        </div>
        <div class="campo">
            <label>Deportes: <?php echo empty($deportes) ? "No practica deportes" : implode(", ", $deportes); ?></label>
        </div>
        <div class="campo">
            <label>Observaciones de salud: <?php echo $observaciones; ?></label>
        </div>
    </main>
</body>
</html>