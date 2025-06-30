<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Editar Asistencia</title>
    <link rel="stylesheet" href="public/main.css" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f8fb;
            padding: 30px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #0d6efd;
        }

        form {
            max-width: 450px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgb(13 110 253 / 0.2);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="time"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 8px 12px;
            margin-bottom: 18px;
            border: 1.8px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="time"]:focus,
        input[type="date"]:focus,
        select:focus,
        textarea:focus {
            border-color: #0d6efd;
            outline: none;
            box-shadow: 0 0 5px #0d6efd;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #0d6efd;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #084ec8;
        }
    </style>
</head>
<body>
    <h1>Editar Asistencia</h1>
    <form method="post" novalidate>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($asistencia['nombre']) ?>" required />

        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" value="<?= htmlspecialchars($asistencia['hora']) ?>" required />

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" value="<?= htmlspecialchars($asistencia['fecha']) ?>" required />

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="PRESENTE" <?= $asistencia['estado'] === 'PRESENTE' ? 'selected' : '' ?>>PRESENTE</option>
            <option value="AUSENTE" <?= $asistencia['estado'] === 'AUSENTE' ? 'selected' : '' ?>>AUSENTE</option>
            <option value="TARDE" <?= $asistencia['estado'] === 'TARDE' ? 'selected' : '' ?>>TARDE</option>
            <option value="JUSTIFICADO" <?= $asistencia['estado'] === 'JUSTIFICADO' ? 'selected' : '' ?>>JUSTIFICADO</option>
        </select>

        <label for="observaciones">Observaciones:</label>
        <textarea id="observaciones" name="observaciones"><?= htmlspecialchars($asistencia['observaciones']) ?></textarea>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

