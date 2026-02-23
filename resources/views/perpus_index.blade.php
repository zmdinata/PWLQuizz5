<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Perpustakaan - STMIK IKMI Cirebon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 40px auto;
            background-color: #f5f5f5;
            color: #333;
        }

        h1 {
            color: #1a56a4;
            border-bottom: 2px solid #1a56a4;
            padding-bottom: 8px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background: #fff;
            margin: 8px 0;
            padding: 12px 16px;
            border-left: 4px solid #1a56a4;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        p {
            color: #555;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <h1>📚 Katalog Koleksi Buku</h1>
    <p>Perpustakaan STMIK IKMI Cirebon</p>

    <ul>
        @foreach($data_buku as $buku)
            <li>{{ $buku }}</li>
        @endforeach
    </ul>
</body>

</html>