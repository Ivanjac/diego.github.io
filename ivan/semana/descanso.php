<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descanso</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Fondo gris claro */
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
            max-width: 400px; /* Ancho máximo */
            background: #ffffff; /* Fondo blanco */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .header {
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 2em; /* Tamaño de fuente grande */
            margin: 0;
            color: #333333;
            font-weight: bold; /* Negrita */
        }
        .timer {
            font-size: 2em; /* Tamaño de fuente grande para el cronómetro */
            margin-bottom: 20px;
        }
        .button {
            padding: 15px 30px; /* Padding para el botón */
            background-color: #007bff; /* Color de fondo azul */
            color: #ffffff; /* Color de texto blanco */
            font-size: 1.5em; /* Tamaño de fuente */
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
            text-decoration: none; /* Quitar subrayado de los enlaces */
            display: inline-block; /* Mostrar como bloque en línea */
            margin-right: 10px; /* Margen derecho para separación */
            vertical-align: middle; /* Alinear verticalmente con el cronómetro */
        }
        .stop-button {
            padding: 15px 30px; /* Padding para el botón */
            background-color: #dc3545; /* Color de fondo rojo */
            color: #ffffff; /* Color de texto blanco */
            font-size: 1.5em; /* Tamaño de fuente */
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
            text-decoration: none; /* Quitar subrayado de los enlaces */
            display: inline-block; /* Mostrar como bloque en línea */
            vertical-align: middle; /* Alinear verticalmente con el cronómetro */
        }
        .options {
            margin-top: 20px;
        }
        .options label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Descanso</h1>
        </div>
        <div class="timer" id="timer">3:00</div> <!-- Cronómetro inicializado en 3 minutos -->
        <button class="button" onclick="startTimer()">Descanso</button> <!-- Botón de descanso -->
        <button class="stop-button" onclick="stopTimer()">Parar</button> <!-- Botón para parar el cronómetro -->
        <div class="options">
            <label for="time-select">Cambiar tiempo:</label>
            <select id="time-select">
                <option value="1">1 minuto</option>
                <option value="2">2 minutos</option>
                <option value="3" selected>3 minutos (predeterminado)</option>
                <option value="4">4 minutos</option>
                <option value="5">5 minutos</option>
            </select>
        </div>
    </div>

    <script>
        var countdownInterval; // Variable global para almacenar el intervalo del cronómetro

        function startTimer() {
            var timerElement = document.getElementById('timer');
            var timeLeft = parseInt(document.getElementById('time-select').value) * 60; // Tiempo en segundos según la selección

            clearInterval(countdownInterval); // Limpiar intervalo anterior si existe

            countdownInterval = setInterval(function() {
                var minutes = Math.floor(timeLeft / 60);
                var seconds = timeLeft % 60;

                // Formateo de los segundos para que siempre tengan dos dígitos
                var formattedSeconds = seconds < 10 ? '0' + seconds : seconds;

                // Actualización del contenido del cronómetro
                timerElement.textContent = minutes + ':' + formattedSeconds;

                // Disminuir el tiempo restante
                timeLeft--;

                // Detener el cronómetro cuando llegue a cero
                if (timeLeft < 0) {
                    clearInterval(countdownInterval);
                    timerElement.textContent = 'Tiempo agotado';
                }
            }, 1000); // Intervalo de actualización cada segundo (1000 milisegundos = 1 segundo)
        }

        function stopTimer() {
            clearInterval(countdownInterval); // Parar el intervalo del cronómetro
        }
    </script>
</body>
</html>
