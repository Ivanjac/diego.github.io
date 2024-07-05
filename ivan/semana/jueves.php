<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0; /* Fondo gris claro */
            color: #333333; /* Color de texto oscuro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Altura mínima de la ventana */
        }
        .container {
            width: 95%;
            max-width: 400px; /* Ancho máximo */
            background: #ffffff; /* Fondo blanco */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            overflow-y: auto; /* Habilita el scroll vertical cuando es necesario */
            max-height: 90vh; /* Altura máxima del contenedor para evitar scroll innecesario */
        }
        .header {
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 2.5em; /* Tamaño de fuente grande */
            margin: 0;
            color: #333333;
            font-weight: bold; /* Negrita */
        }
        .exercise-card {
            background-color: #f8f9fa; /* Fondo gris claro */
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.3s ease; /* Transición suave para efecto hover */
        }
        .exercise-card:hover {
            transform: scale(1.02); /* Efecto de escala al pasar el ratón */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .exercise-card h2 {
            font-size: 1.8em; /* Tamaño de fuente grande */
            color: #333333;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .exercise-card p {
            font-size: 1.1em; /* Tamaño de fuente */
            color: #666666;
        }
        .footer {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
            border-top: 1px solid #dddddd;
            padding-top: 10px;
        }
        .footer a {
            text-decoration: none;
            color: #333333;
            font-size: 0.9em;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
        }
        .footer a:hover {
            background-color: #007bff; /* Color de fondo azul al pasar el ratón */
            color: #ffffff; /* Color de texto blanco al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Lunes</h1>
        </div>
        <div class="exercise-card">
            <h2>Ejercicio 1: Bíceps</h2>
            <p>Realiza 3 series de curl de bíceps con mancuernas.</p>
        </div>
        <div class="exercise-card">
            <h2>Ejercicio 2: Espalda</h2>
            <p>Haz 3 series de remo con barra para trabajar la espalda.</p>
        </div>
        <div class="exercise-card">
            <h2>Ejercicio 3: Bíceps</h2>
            <p>Termina con 3 series de martillo para fortalecer los bíceps.</p>
        </div>
        
        <!-- Incluir descanso.php aquí -->
        <?php include('descanso.php'); ?>
        
        <?php include('pie1.php'); ?>
    </div>
</body>
</html>
