<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <form id="form2" action="process.php" method="post">
            <h2>Registro de usuario</h2>
            <div class="campo">
                <label for="txtnombre">Nombre</label>
                <input type="text" name ="txtNombre" id="txtNombre">
            </div>
            <div class="campo">
                <label for="txtTipoEstudio">Tipo de estudio</label>
                <div class="radio-container">
                    <div class="radio-group">
                        <input type="radio" name="txtTipoEstudio" value="Estudios primarios" class="custom-radio">
                        <span>Estudios Primarios</span>
                    </div>
                    <div class="radio-group">
                        <input type="radio" name="txtTipoEstudio" value="Estudios secundarios" class="custom-radio">
                        <span>Estudios secundarios</span>
                    </div>
                    <div class="radio-group">
                        <input type="radio" name="txtTipoEstudio" value="Posgrado" class="custom-radio">
                        <span>Posgrado</span>
                    </div>
                    <div class="radio-group">
                        <input type="radio" name="txtTipoEstudio" value="No tiene estudios" class="custom-radio">
                        <span>No tiene estudios</span>
                    </div>
                </div>
            </div>
            <div class="campo">
                <label for="txtDeportes">¿Qué deportes practica?</label>
                <div class="check-container">
                    <div class="chek-group">
                        <input type="checkbox" name="txtBaloncesto">
                        <span>Baloncesto</span>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="txtFutbol">
                        <span>Futbol</span>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="txtTenis">
                        <span>Tenis</span>
                    </div>
                    <div class="check-group">
                        <input type="checkbox" name="txtVoleibol">
                        <span>Voleibol</span>
                    </div>
                </div>
            </div>
            <div class="campo">
                <label for="txtObservaciones">Observaciones de salud</label>
                <textarea name="txtObservaciones" id="txtObservaciones" rows="5" placeholder="Ingrese sus observaciones de salud"></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>














































































































































