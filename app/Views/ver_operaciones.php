<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Guardadas</title>
</head>
<body>
    <h1>Operaciones Guardadas</h1>
    <table>
        <tr>
            <th>Número 1</th>
            <th>Número 2</th>
            <th>Operación</th>
            <th>Resultado</th>
        </tr>
        <?php foreach ($operaciones as $operacion) : ?>
            <tr>
                <td><?= $operacion['numero1'] ?></td>
                <td><?= $operacion['numero2'] ?></td>
                <td><?= $operacion['operacion'] ?></td>
                <td><?= $operacion['resultado'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
