<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 95%;
            max-width: 400px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 1.8em;
            margin: 0;
            color: #333333;
        }
        .header p {
            font-size: 1em;
            color: #666666;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 1.2em;
            color: #333333;
            margin-bottom: 10px;
        }
        .card {
            background: #f0f0f0;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .card h3 {
            font-size: 1em;
            color: #333333;
            margin: 0;
        }
        .card p {
            font-size: 0.9em;
            color: #666666;
        }
        .button {
            padding: 10px 20px;
            background-color: #1a1a1a;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .button:hover {
            background-color: #333333;
        }
        .start-link {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Hola Ivan 👋</h1>
            <p>¡Empecemos!</p>
        </div>
        <div class="section">
            <a href="progreso.php" style="text-decoration: none; color: inherit;">
                <h2>Entrenos esta semana</h2>
                <div class="card">
                    <h3>Lun 21 - Vie 25</h3>
                    <p>2/3 entrenos completados</p>
                </div>
            </a>
        </div>
        <div class="section" onclick="redirectToDay()">
            <h2>Comienza a entrenar</h2>
            <div class="card">
                <h3>Entrenar <span id="diaSemana">cuando quieras</span>:</h3>
                <p>Empezar</p>
            </div>
        </div>
        <div class="section">
            <h2>Planes para ganar músculo</h2>
            <div class="card">
                <h3>Recién llegada</h3>
                <p>Full Body - 3 días a la semana</p>
            </div>
        </div>
        
        <!-- Include footer.php -->
        <?php include('pie.php'); ?>
        
    </div>

    <script>
        function redirectToDay() {
            var diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
            var hoy = new Date().getDay();
            var diaTexto = diasSemana[hoy];
            
            // Construir la URL dinámica
            var url = 'semana/' + diaTexto.toLowerCase() + '.php';
            
            // Redirigir automáticamente
            window.location.href = url;
        }

        document.addEventListener("DOMContentLoaded", function() {
            var diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
            var hoy = new Date().getDay();
            var diaTexto = diasSemana[hoy];
            document.getElementById('diaSemana').textContent = diaTexto;
        });
    </script>
</body>
</html>
