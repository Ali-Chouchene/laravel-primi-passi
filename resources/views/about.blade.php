<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>About</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container d-flex justify-content-center">
                <ul class="navbar-nav w-25 d-flex justify-content-between">
                    <li class="nav-item">
                        <h4><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" href="{{route('about')}}">About</a></h4>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" href="{{route('info')}}">Info</a></h4>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container pt-5 mt-5">
            <div class="text-center pt-5 mt-5">
                <h1 class="text-center mb-5">{{$message}}</h1>
                <h2>
                    {{$intro}}
                </h2>
            </div>
    </main>
</body>

</html>