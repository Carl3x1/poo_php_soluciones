<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 6: Control de Personal</title>
</head>
<body>
    <h2>Registro de Empleado</h2>
    <form action="objetos/objetoSolucion6.php" method="post">
        <div>
            <label for="tipo_empleado">Tipo de Empleado:</label>
            <select id="tipo_empleado" name="tipo_empleado" required>
                <option value="tiempo_completo">Tiempo Completo</option>
                <option value="por_horas">Por Horas</option>
            </select>
        </div>
        <br>
        <div>
            <label for="txt_codigo">Código de Empleado:</label>
            <input type="text" id="txt_codigo" name="txt_codigo" required>
        </div>
        <br>
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
            <label for="num_sueldoBase">Sueldo Base:</label>
            <input type="number" id="num_sueldoBase" name="num_sueldoBase" step="0.01" required>
        </div>
        <br>
        <h3>Datos Tiempo Completo (Solo si aplica)</h3>
        <div>
            <label for="num_bono">Bono:</label>
            <input type="number" id="num_bono" name="num_bono" step="0.01">
        </div>
        <br>
        <h3>Datos Por Horas (Solo si aplica)</h3>
        <div>
            <label for="num_horas">Horas Trabajadas:</label>
            <input type="number" id="num_horas" name="num_horas" step="0.01">
        </div>
        <br>
        <div>
            <label for="num_pagoHora">Pago por Hora:</label>
            <input type="number" id="num_pagoHora" name="num_pagoHora" step="0.01">
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
