<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>niiru</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container-fluid">
        <h1>Sitios próximos:</h1>
        <div class="card-columns">
        @foreach ($sitios as $sitio)

        <?php try { ?>
                <div class="card" style="width: 18rem;">
                
                    <img src="{{ $sitio->picture_url }}" class="card-img-top" alt="Imagen de {{ $sitio->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $sitio->name }}</h5>
                        <form action="{{ route('actividades.store') }}" method="post">
                            @csrf
                        <input type="hidden" name="nombre" value="{{ $sitio->name }}">
                        <input type="hidden" name="img" value="{{ $sitio->picture_url }}">
                            <button type="submit" class="btn btn-primary">Añadir</button>
                        </form>
                    </div>
                </div>
                <?php } catch (\Throwable $th) {} ?>

        @endforeach

    </div>
</body>
</html>