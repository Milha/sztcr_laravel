<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Poruka - {{ $poruka->naslov }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <h1>{{ $poruka->naslov }}</h1>
    <p><strong>Posiljalac:</strong> {{ $poruka->id }}</p>
    <p><strong>Obradjeno:</strong> {{ $poruka->procitana ? 'Da' : 'Ne' }}</p>
    <p><strong>Poslato:</strong> {{ $poruka->created_at }}</p>
    <p><strong>Sadrzaj:</strong></p>
    <p>{{ $poruka->sadrzaj }}</p>
</body>

</html>
