<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <!-- AGREGAR MARGENES A LA PÁGINA -->
    @include('dashboard.partials.navbar')
    <div class="container">
        <div class="jumbotron">
            @include('dashboard.partials.status')
            @yield('content') <!-- Nos permite practicar la herencia y el polimorfismo -->
        </div>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
