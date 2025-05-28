<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous"> 
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-image: url('https://i.pinimg.com/474x/f8/3a/5d/f83a5d22986f2d0e6be75a7380c30174.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 850px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background-color: #34495e;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</h1>
        @yield('content')
    </div>
</body>
</html>
