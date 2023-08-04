<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Matemáticas</title>
</head>
<body>
    <h1>Operaciones Matemáticas</h1>
    <form action="<?php echo site_url('operaciones/guardar_operacion'); ?>" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br>

        <label for="operacion">Operación:</label>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
