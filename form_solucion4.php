<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 4: Sistema de Vehículos</title>
</head>
<body>
    <h2>Registro de Vehículo</h2>
    <form action="objetos/objetoSolucion4.php" method="post">
        <div>
            <label for="tipo_clase">Registrar:</label>
            <select id="tipo_clase" name="tipo_clase" required>
                <option value="automovil">Automóvil</option>
                <option value="motocicleta">Motocicleta</option>
            </select>
        </div>
        <br>
        <div>
            <label for="txt_placa">Placa:</label>
            <input type="text" id="txt_placa" name="txt_placa" required>
        </div>
        <br>
        <div>
            <label for="txt_marca">Marca:</label>
            <input type="text" id="txt_marca" name="txt_marca" required>
        </div>
        <br>
        <div>
            <label for="txt_modelo">Modelo:</label>
            <input type="text" id="txt_modelo" name="txt_modelo" required>
        </div>
        <br>
        <div>
            <label for="num_precio">Precio:</label>
            <input type="number" id="num_precio" name="num_precio" step="0.01" required>
        </div>
        <br>
        <h3>Datos Automóvil (Solo si aplica)</h3>
        <div>
            <label for="txt_tipoVehiculo">Tipo de Vehículo:</label>
            <input type="text" id="txt_tipoVehiculo" name="txt_tipoVehiculo">
        </div>
        <br>
        <div>
            <label for="num_puertas">Número de Puertas:</label>
            <input type="number" id="num_puertas" name="num_puertas">
        </div>
        <br>
        <div>
            <label for="txt_combustible">Tipo de Combustible:</label>
            <input type="text" id="txt_combustible" name="txt_combustible">
        </div>
        <br>
        <h3>Datos Motocicleta (Solo si aplica)</h3>
        <div>
            <label for="txt_cilindrada">Cilindrada:</label>
            <input type="text" id="txt_cilindrada" name="txt_cilindrada">
        </div>
        <br>
        <div>
            <label for="txt_tipoMoto">Tipo de Moto:</label>
            <input type="text" id="txt_tipoMoto" name="txt_tipoMoto">
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>
