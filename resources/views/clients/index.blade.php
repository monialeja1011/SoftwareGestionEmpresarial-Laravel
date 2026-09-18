<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Veterinaria Huellitas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f8fb;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            color: #2563eb;
            margin-bottom: 5px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #2563eb;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #e2e8f0;
        }

        tr:hover {
            background: #f8fafc;
        }

        .count {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            padding: 8px 14px;
            border-radius: 20px;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Veterinaria Huellitas</h1>
    <p class="subtitle">Sistema de Gestión Empresarial — Clientes</p>

    <div class="card">

        <div class="count">
            Total de clientes: {{ $clients->count() }}
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email ?? 'No registrado' }}</td>
                        <td>{{ $client->address ?? 'No registrada' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

</body>
</html>
