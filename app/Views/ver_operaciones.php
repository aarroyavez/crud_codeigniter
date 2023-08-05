<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Guardadas</title>
</head>
<body>
    <h1>Operaciones Guardadas</h1>
    <table border="1">
        <tr>
            <th>Número 1</th>
            <th>Número 2</th>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <?php foreach ($operaciones as $operacion): ?>
        <tr>
            <td><?php echo $operacion['numero1']; ?></td>
            <td><?php echo $operacion['numero2']; ?></td>
            <td><?php echo $operacion['operacion']; ?></td>
            <td><?php echo $operacion['resultado']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
