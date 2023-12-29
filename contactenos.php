<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column; /* Cambio a dirección de columna */
            height: 100vh;
        }

        .container {
            text-align: left;
            max-width: 600px;
            width: 100%;
            margin: auto; /* Añadido para centrar el contenedor en la página */
        }

        .header {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            max-width: 800px;
            margin: auto;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 0px;
        }

        input[type="checkbox"] {
            margin-right: 0px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>


    <div class="header">
        <h1>Contactenos</h1>
    </div>

    <div class="container">
    <form action="p_contactenos.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="motivo">Motivo:</label>
        <select id="motivo" name="motivo">
            <option value="" disabled selected>Seleccione una opción</option>
            <option value="consulta">Consulta</option>
            <option value="reclamo">Reclamo</option>
            <option value="comentario">Comentario</option>
            <option value="sugerencia">Sugerencia</option>
            <option value="otros">Otros</option>
        </select>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

        <div class="checkbox-container">
            <input type="checkbox" name="consentimiento" id="consentimiento" required>
            <label for="consentimiento">He leído y acepto dar mi consentimiento para el uso de mis datos personales.</label>
        </div>

        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
