<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World con Laravel</title>
    <link rel="icon" href="PERCORSO" sizes="16x16 24x24 32x32 48x48 64x64 128x128">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-0 m-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container px-5">
            <a class="navbar-brand display-3 fw-bold" href="/">Hello World con Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Pricing">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1
            class="display-1 fw-bold p-3 m-4 text-danger rounded-5 bg-warning d-flex justify-content-center align-items-center">
            <span>{{$statement}}</span>
        </h1>
    </div>
</body>

</html>
