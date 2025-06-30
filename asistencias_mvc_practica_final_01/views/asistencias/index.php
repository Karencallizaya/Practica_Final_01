<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Asistencias</title>
    <link rel="stylesheet" href="public/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        a.button {
            display: inline-block;
            padding: 8px 15px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        .acciones a {
            margin: 0 5px;
            text-decoration: none;
            color: #007bff;
        }
        .acciones a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Asistencias</h1>
        <a href="index.php?action=create" class="button">Agregar Asistencia</a>
        
        <table>
            <tr>
                <th>Nombre</th>
                <th>Hora</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($asistencias as $a): ?>
            <tr>
                <td><?= htmlspecialchars($a['nombre']) ?></td>
                <td><?= htmlspecialchars($a['hora']) ?></td>
                <td><?= htmlspecialchars($a['fecha']) ?></td>
                <td><?= htmlspecialchars($a['estado']) ?></td>
                <td><?= htmlspecialchars($a['observaciones']) ?></td>
                <td class="acciones">
                    <a href="index.php?action=edit&id=<?= $a['id'] ?>">Editar</a> |
                    <a href="index.php?action=delete&id=<?= $a['id'] ?>" onclick="return confirm('¿Deseas eliminar este registro?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>