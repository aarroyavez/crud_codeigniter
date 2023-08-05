<!DOCTYPE html>
<html>
<head>
    <title>Ver Operaciones</title>
</head>
<body>
    <h1>Operaciones Registradas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Número 1</th>
            <th>Número 2</th>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['numero1'] ?></td>
                <td><?= $registro['numero2'] ?></td>
                <td><?= $registro['operacion'] ?></td>
                <td><?= $registro['resultado'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
