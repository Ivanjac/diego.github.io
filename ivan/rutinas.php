<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutinas Semanales</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff; /* Fondo blanco */
            color: #333333; /* Color de texto oscuro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 95%;
            max-width: 400px; /* Mismo ancho máximo que la página anterior */
            background: #f8f9fa; /* Fondo gris claro */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .header {
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 2em; /* Tamaño de fuente más grande */
            margin: 0;
            color: #333333;
            font-weight: bold; /* Negrita */
        }
        .buttons {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Dos columnas iguales */
            gap: 15px; /* Espacio entre botones */
        }
        .button {
            padding: 20px;
            background-color: #1a1a1a; /* Color de fondo oscuro */
            color: #ffffff; /* Color del texto */
            font-size: 1.5em; /* Tamaño de fuente */
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
            text-decoration: none; /* Quitar subrayado de los enlaces */
            display: flex; /* Para centrar texto verticalmente */
            justify-content: center; /* Para centrar texto horizontalmente */
            align-items: center; /* Para centrar texto verticalmente */
            font-family: 'Roboto', sans-serif; /* Tipo de letra Roboto */
        }
        .button:hover {
            background-color: #333333; /* Color de fondo oscuro al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Rutinas semanales</h1>
        </div>
        <div class="buttons">
            <a href="semana/lunes.php" class="button">Lunes</a>
            <a href="semana/martes.php" class="button">Martes</a>
            <a href="semana/miercoles.php" class="button">Miércoles</a>
            <a href="semana/jueves.php" class="button">Jueves</a>
            <a href="semana/viernes.php" class="button">Viernes</a>
            <a href="semana/sabado.php" class="button">Sábado</a>
        </div>

        <?php include('pie.php'); ?>
    </div>

    
</body>
</html>
