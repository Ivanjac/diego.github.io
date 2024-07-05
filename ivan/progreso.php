<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Ejercicios</title>
    <link href='https://fullcalendar.io/releases/core/4.0.1/main.min.css' rel='stylesheet' />
    <link href='https://fullcalendar.io/releases/daygrid/4.0.1/main.min.css' rel='stylesheet' />
    <script src='https://fullcalendar.io/releases/core/4.0.1/main.min.js'></script>
    <script src='https://fullcalendar.io/releases/daygrid/4.0.1/main.min.js'></script>
    <script src='https://fullcalendar.io/releases/core/4.0.1/locales/es.js'></script> <!-- Añadido el locale en español -->
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
            max-width: 400px; /* Ajustado para dispositivos móviles */
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
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
        #calendar {
            max-width: 100%;
            margin: 0 auto;
            height: 70vh; /* Ajusta la altura del calendario */
        }
        .fc-toolbar {
            flex-direction: column; /* Cambia la dirección del flexbox para los botones */
            align-items: flex-start; /* Alinea los botones a la izquierda */
            margin-top: 10px; /* Espacio superior para separar del calendario */
            padding-left: 10px; /* Espaciado a la izquierda para respetar los bordes */
        }
        .fc-button {
            margin: 5px; /* Espaciado entre los botones */
        }
        .fc-day-grid {
            width: 100%;
        }
        .fc-day {
            position: relative;
            min-height: 50px;
            cursor: pointer;
        }
        .fc-day:hover {
            background-color: #f0f0f0;
        }
        .fc-day.completed {
            background-color: #d4edda; /* Color de fondo para los días marcados como cumplidos */
        }
        .fc-day-top {
            font-size: 0.8em; /* Tamaño de fuente para los nombres de días */
        }
        .fc-day-number {
            font-size: 1em; /* Tamaño de fuente para los números de días */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 id="calendar-title"></h1>
        </div>
        <div id='calendar'></div>
        <?php include('pie.php'); ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendarTitleEl = document.getElementById('calendar-title');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ],
                locale: 'es', // Establece el idioma en español
                events: [
                    // Aquí puedes agregar eventos predeterminados
                    { title: 'Ejercicio', start: '2023-07-03' }
                ],
                dateClick: function(info) {
                    var dateCell = info.dayEl;
                    if (dateCell.classList.contains('completed')) {
                        dateCell.classList.remove('completed');
                    } else {
                        dateCell.classList.add('completed');
                    }
                },
                viewRender: function(view) {
                    var title = view.title;
                    calendarTitleEl.textContent = title;
                }
            });

            calendar.render();
        });
    </script>
</body>
</html>
