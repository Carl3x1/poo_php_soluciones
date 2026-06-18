<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal - Ejercicios POO PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .menu-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            margin-top: 20px;
        }
        .menu-link {
            display: block;
            text-align: center;
            padding: 15px;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(74, 222, 128, 0.3);
            border-radius: 10px;
            color: #ffffff;
            text-decoration: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        .menu-link:hover {
            background: rgba(74, 222, 128, 0.2);
            border-color: #4ade80;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 222, 128, 0.2);
        }
    </style>
</head>
<body>
    <form style="max-width: 500px;">
        <h2>Ejercicios POO PHP</h2>
        <div style="text-align: center; color: #a7f3d0; margin-bottom: 20px;">
            Selecciona un ejercicio para continuar
        </div>
        <div class="menu-container">
            <a href="form_solucion1.php" class="menu-link">Ejercicio 1: Sistema de Productos</a>
            <a href="form_solucion2.php" class="menu-link">Ejercicio 2: Gestión de Empleados</a>
            <a href="form_solucion3.php" class="menu-link">Ejercicio 3: Biblioteca Virtual</a>
            <a href="form_solucion4.php" class="menu-link">Ejercicio 4: Sistema de Vehículos</a>
            <a href="form_solucion5.php" class="menu-link">Ejercicio 5: Sistema Bancario</a>
            <a href="form_solucion6.php" class="menu-link">Ejercicio 6: Control de Personal</a>
        </div>
    </form>
</body>
</html>
