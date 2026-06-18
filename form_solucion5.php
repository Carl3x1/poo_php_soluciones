<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 5: Sistema Bancario</title>
</head>
<body>
    <h2>Registro de Cuenta Bancaria</h2>
    <form action="objetos/objetoSolucion5.php" method="post">
        <div>
            <label for="tipo_cuenta">Tipo de Cuenta:</label>
            <select id="tipo_cuenta" name="tipo_cuenta" required>
                <option value="ahorro">Cuenta de Ahorro</option>
                <option value="corriente">Cuenta Corriente</option>
            </select>
        </div>
        <br>
        <div>
            <label for="txt_numeroCuenta">Número de Cuenta:</label>
            <input type="text" id="txt_numeroCuenta" name="txt_numeroCuenta" required>
        </div>
        <br>
        <div>
            <label for="txt_titular">Titular:</label>
            <input type="text" id="txt_titular" name="txt_titular" required>
        </div>
        <br>
        <div>
            <label for="num_saldo">Saldo:</label>
            <input type="number" id="num_saldo" name="num_saldo" step="0.01" required>
        </div>
        <br>
        <h3>Datos Cuenta de Ahorro (Solo si aplica)</h3>
        <div>
            <label for="num_tasaInteres">Tasa de Interés:</label>
            <input type="number" id="num_tasaInteres" name="num_tasaInteres" step="0.01">
        </div>
        <br>
        <h3>Datos Cuenta Corriente (Solo si aplica)</h3>
        <div>
            <label for="num_limiteMensual">Límite de Débito Mensual:</label>
            <input type="number" id="num_limiteMensual" name="num_limiteMensual" step="0.01">
        </div>
        <br>
        <div>
            <label for="num_limiteDiario">Límite de Débito Diario:</label>
            <input type="number" id="num_limiteDiario" name="num_limiteDiario" step="0.01">
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
