<!DOCTYPE html>
<html>
<head>
    <title>Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous"> 
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="mx-auto mt-5" style="background-color: ">
       <!-- <h2 class="text-2xl font-bold mb-4 text-center">
  Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri
</h2> -->
        @yield('content')
    </div>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('https://i.pinimg.com/474x/f8/3a/5d/f83a5d22986f2d0e6be75a7380c30174.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        padding: 0;

        
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(8px);
        border-radius: 1rem;
        padding: 2rem;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        color: #333;
        background-position: center;

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

