<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Gestión de Empleados</title>
</head>
<body>
    <h2>Registro de Empleado</h2>
    <form action="objetos/objetoSolucion2.php" method="post">
        <div>
            <label for="txt_nombre">Nombre:</label>
            <input type="text" id="txt_nombre" name="txt_nombre" required>
        </div>
        <br>
        <div>
            <label for="txt_puesto">Puesto:</label>
            <input type="text" id="txt_puesto" name="txt_puesto" required>
        </div>
        <br>
        <div>
            <label for="num_horas">Horas Trabajadas:</label>
            <input type="number" id="num_horas" name="num_horas" required>
        </div>
        <br>
        <div>
            <label for="num_pago_hora">Pago por Hora:</label>
            <input type="number" id="num_pago_hora" name="num_pago_hora" step="0.01" required>
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
