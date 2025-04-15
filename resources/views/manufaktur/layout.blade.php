<!DOCTYPE html>
<html>
<head>
    <title>Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</h1>
        @yield('content')
    </div>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
    }
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>

