<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World con Laravel</title>
        <link rel="icon" href="PERCORSO" sizes="16x16 24x24 32x32 48x48 64x64 128x128">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/css/app.css">
    </head>
    <body class="p-0 m-0">
        <div class="container">
            <h1 class="display-1 fw-bold p-3 m-4 text-danger rounded-5 bg-warning d-flex justify-content-center align-items-center">Hello World!</h1>
            <h1 class="display-1 fw-bold p-3 m-4 text-danger rounded-5 bg-warning d-flex justify-content-center align-items-center">{{$hello . " " . $world}}</h1>
            <h1 class="display-1 fw-bold p-3 m-4 text-danger rounded-5 bg-warning d-flex justify-content-center align-items-center">{{$hello}} {{$world}}</h1>
        </div>
    </body>
</html>
