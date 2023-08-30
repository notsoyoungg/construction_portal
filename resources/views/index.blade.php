<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Top navbar example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">



    <!-- Bootstrap core CSS -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->

    <link href="{{ asset('css/navbar-top.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Top navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Расчет снеговой нагрузки (Односкатное покрытие)</h1>
{{--        <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>--}}
{{--        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>--}}
        <form method="POST" action="{{ route('index-page') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Регион</label>
                <select name="snowValue" class="form-select" aria-label="Default select example">
                    @foreach($cities as $city)
                        <option value="{{ $city->snow_value }}">
                            {{ $city->city }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Уклон кровли (в градусах)</label>
                <input type="text" name="roofAngle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Условия местности</label>
                <select name="ce" class="form-select" aria-label="Default select example">
                    @foreach($ces as $ce)
                        <option value="{{ $ce->value }}">
                            {{ $ce->terrain_condition }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Расчитать</button>
        </form>
        @if($snow)
{{--            <h4>Регион: </h4>--}}
{{--            <h4>Се: </h4>--}}
{{--            <h4>Ст: </h4>--}}
{{--            <h4>Sk:</h4>--}}
{{--            <h4>Sk:</h4>--}}
            <h3 class="mt-5">Величина снеговой нагрузки: {{ $snow }}кПа</h3>
        @endif
    </div>
</main>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
