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

            
                <div class="card" style="width: 18rem;">
                <?php try { ?>
                    <img src="{{ $sitio->picture_url }}" class="card-img-top" alt="Imagen de {{ $sitio->name }}">
                <?php } catch (\Throwable $th) {} ?>
                    <div class="card-body">
                        <h5 class="card-title">{{ $sitio->name }}</h5>
                        <a href="#" class="btn btn-primary">Añadir</a>
                    </div>
                </div>

        @endforeach

    </div>
</body>
</html>