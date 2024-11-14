<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 100%;
            margin: 20px auto;
            padding: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
        }

        img {
            display: block;
            margin: 0 auto 20px auto;
            width: 100px; /* Ajustar el tamaño del escudo */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">


        <h1>SAN LORENZO FE Y ALEGRÍA</h1>
        <h2>Reportes del Estudiante: {{ $student->nombre, $student->apellido }}</h2>
      

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Ítem</th>
                    <th>Área</th>
                    <th>Trimestre</th>
                    <th>Detalle/Observaciones</th>
                    <th>Profesor </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->nombre }}</td>
                        <td>{{ $report->fecha}}</td>
                        <td>{{ $report->item }}</td>
                        <td>{{ $report->area }}</td>
                        <td>{{ $report->trimestre }}</td>
                        <td>{{ $report->detalle_observaciones }}</td>
                        <td>{{ $report->teacher->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p>Fecha de generación del reporte: {{ now()->format('Y-m-d H:i:s') }}</p>
        </div>
    </div>
</body>
</html>
