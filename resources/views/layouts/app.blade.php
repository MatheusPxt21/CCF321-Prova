<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Estados e Municípios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('estados.index') }}">Prova CCF321 - Matheus Nascimento Peixoto - 4662</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('estados.index') }}">Estados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('municipios.index') }}">Municípios</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
