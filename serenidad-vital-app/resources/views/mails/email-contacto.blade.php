<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>

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

        #mensaje {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Serenidad Vital - Consultorio Psicológico</h1>
    </header>

    <main>
        <div id="cliente">
            <h2>¡Hola! Tienes un nuevo mensaje de {{ $userApellido }} {{ $userName }}</h2>
            <p>Email: {{ $email }}</p>
        </div>

        <div id="mensaje">
            <p>Mensaje: {{ $mensaje }}</p>
        </div>

    </main>


</body>
</html>
