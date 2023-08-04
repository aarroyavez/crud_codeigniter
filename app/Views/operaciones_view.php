<!-- Archivo: application/views/operaciones_view.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Operaciones</title>
</head>
<body>
    <h1>Operaciones Matemáticas</h1>

    <!-- Formulario para ingresar los números y la operación -->
    <form action="<?php echo site_url('Operaciones/guardar_operacion'); ?>" method="post">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" id="numero1">

        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" id="numero2">

        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <input type="submit" value="Calcular">
    </form>

    <!-- Mostrar los resultados de las operaciones guardadas en la base de datos -->
    <h2>Resultados anteriores:</h2>
    <ul>
        <?php foreach ($operaciones as $operacion): ?>
            <li>
                <?php echo $operacion->numero1; ?> <?php echo $operacion->operacion; ?> <?php echo $operacion->numero2; ?> = <?php echo $operacion->resultado; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
