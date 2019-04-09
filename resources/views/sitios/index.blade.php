<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>niiru</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body style='background-color:#9e9e9e'>
<br>
    <div class="container-fluid .flex-column .justify-content-center" >
        <h1 class="title">Sitios próximos:</h1>
        <br>
        <div class="card-columns ">
        @foreach ($sitios as $sitio)

            
                <div class="card text-center " style="width: 20rem; background-image:url(./img/niiru/fondos/fondo_cerca-de-ti(1080x1000).jpg)">
                <?php try { ?>
                    <img src="{{ $sitio->picture_url }}" class="card-img-top" alt="Imagen de {{ $sitio->name }}">
                <?php } catch (\Throwable $th) {} ?>
                    <div class="card-body">
                        <h5 class="card-title">{{ $sitio->name }}</h5>
                        <a href="#" class="btn btn-primary" style='background-color:#73a237'>Añadir</a>
                    </div>
                </div>

        @endforeach

    </div>
</body>
</html>