<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud de Turno</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        #cliente {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <header>
        <h1>Serenidad Vital - Consultorio Psicológico</h1>
    </header>

    <main>
        <div id="cliente">
            <h2>¡Hola! El paciente {{ $apellido }} {{ $name }} quiere contactar contigo para coordinar un turno para recibir atención psicológica.</h2>
            <p>Email: {{ $email }}</p>
            <p>Teléfono: {{ $telefono }}</p>
            <p>Tipo de Consulta: {{ $tipoConsulta }}</p>
        </div>

    </main>


</body>
</html>
