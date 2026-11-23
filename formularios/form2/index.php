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
                <label for="txtemail">Email</label>
                <input type="email" name ="txtEmail" id="txtEmail">
            </div>
            <div class="campo">
                <label for="txttelefono">Telefono</label>
                <input type="tel" name ="txtTelefono" id="txtTelefono">
            </div>
            <div class="campo">
                <label for="txtCiudad">Ciudad</label>
                <select name ="txtCiudad" id="txtCiudad" class="custom-select">
                    <option value="Manizales">Manizales</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Cali">Cali</option>
                </select>
            </div>
            <div class="campo">
                <label for="txtEdad">Edad</label>
                <input type="number" name="txtEdad" id="txtEdad">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>














































































































































