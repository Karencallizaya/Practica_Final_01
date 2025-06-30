<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Asistencia</title>
    <link rel="stylesheet" href="public/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            width: 50%;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }
        form input, form select, form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        form textarea {
            resize: vertical;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            width: 100%;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Agregar Nueva Asistencia</h1>
        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" required>

            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>

            <label for="estado">Estado:</label>
            <select name="estado" id="estado" required>
                <option value="PRESENTE">PRESENTE</option>
                <option value="AUSENTE">AUSENTE</option>
                <option value="TARDE">TARDE</option>
                <option value="JUSTIFICADO">JUSTIFICADO</option>
            </select>

            <label for="observaciones">Observaciones:</label>
            <textarea name="observaciones" id="observaciones" rows="4"></textarea>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
