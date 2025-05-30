<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">  -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">  
    </head>
    <body>
        <div class="container p-5">
            <h1 style="color: black;">Analisis Kerusakan Mesin Terhadap Kelayakan Operasional di Politeknik Industri ATMI Cikarang</h1>

            @yield('content')
        </div>

    </body>
</html>
