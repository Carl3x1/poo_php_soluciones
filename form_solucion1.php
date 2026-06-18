<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Problema 1: Sistema de Productos</title>
</head>
<body>
    <h2>Registro de Producto</h2>
    <form action="objetos/objetoSolucion1.php" method="post">
        <div>
            <label for="txt_codigo">Código:</label>
            <input type="text" id="txt_codigo" name="txt_codigo" required>
        </div>
        <br>
        <div>
            <label for="txt_nombre">Nombre:</label>
            <input type="text" id="txt_nombre" name="txt_nombre" required>
        </div>
        <br>
        <div>
            <label for="num_precio">Precio:</label>
            <input type="number" id="num_precio" name="num_precio" step="0.01" required>
        </div>
        <br>
        <div>
            <label for="num_existencia">Existencia:</label>
            <input type="number" id="num_existencia" name="num_existencia" required>
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
