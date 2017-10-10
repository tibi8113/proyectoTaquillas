<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello world !</title>

    <!-- Fonts -->


    <!-- Styles -->
    <style>

        body {
            background-color:#8EF9FF;
            font-size:40px;
        }
        #division {
        }

    </style>
</head>
<body>
<div id="division">
    <a href="/adios">Hello World</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Oops! Something went wrong</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif

    <form action="/insertarDB" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token	() }}"><br>
        Nombre:<br>
        <input type="text" name="nombre"><br><br>
        Apellido:<br>
        <input type="text" name="apellido"><br><br>
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>
