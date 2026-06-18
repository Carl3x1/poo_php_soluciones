<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 3: Biblioteca Virtual</title>
</head>
<body>
    <h2>Registro de Libro</h2>
    <form action="objetos/objetoSolucion3.php" method="post">
        <div>
            <label for="txt_isbn">ISBN:</label>
            <input type="text" id="txt_isbn" name="txt_isbn" required>
        </div>
        <br>
        <div>
            <label for="txt_titulo">Título:</label>
            <input type="text" id="txt_titulo" name="txt_titulo" required>
        </div>
        <br>
        <div>
            <label for="txt_autor">Autor:</label>
            <input type="text" id="txt_autor" name="txt_autor" required>
        </div>
        <br>
        <div>
            <label for="num_anio">Año de Publicación:</label>
            <input type="number" id="num_anio" name="num_anio" required>
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
