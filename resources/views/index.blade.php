<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/micss.css') }}" rel="stylesheet">
    <style>
       
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                    <a class="mr-auto mt-2 mt-lg-0 btn btn-outline-primary my-2 my-sm-0" href="{{url('/formIndex')}}" type="submit">Publicar</a>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <br>
        <br>

        @foreach($blogs as $blog)
        <div class="row" id="titulo">
            <h1>{{$blog->titulo}} </h1><br>

        </div>
        <div class="row">
            {!!$blog->articulo!!}

        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h3>{{ $blog->created_at }}</h3><br>
                <br>
            </div>
            <div class="col-6">
                <h3 id="autor">{{$blog->autor}}</h3><br>
                <br>
            </div>
        </div>

        @endforeach


        <br>


        <div class="row">{{$blogs->links()}}</div>
    </div>

</body>

</html>