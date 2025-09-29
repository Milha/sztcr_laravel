<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Izveštaj svih poruka | SZTR</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        h1 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Izveštaj svih poruka</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naslov</th>
                <th>Posiljalac</th>
                <th>Obradjeno</th>
                <th>Poslato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($poruke as $poruka)
                <tr>
                    <td>{{ $poruka->id }}</td>
                    <td>{{ $poruka->naslov }}</td>
                    <td>{{ $poruka->posiljalac->ime }}</td>
                    <td>{{ $poruka->procitana ? 'Da' : 'Ne' }}</td>
                    <td>{{ $poruka->created_at->format('d.m.Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
