<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel Comics</title>
</head>
<body>
    <h1 class="text-center my-2">Welcome in Laravel Comics</h1>

    <div class="container my-3">
        <h2>Gli studenti sono:</h2>
        <ul>
            @foreach ($studenti as $studente)
                <li>{{ $studente }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
