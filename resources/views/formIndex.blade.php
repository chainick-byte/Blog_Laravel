<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/micss.css') }}" rel="stylesheet">
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.config.height=600;
        CKEDITOR.config.width=auto;
    </script>

</head>

<body>
    <div class="container">
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
        <form method="POST" action="{{route('save')}}">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Titulo</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="titulo" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Articulo</label>
                <textarea class="ckeditor form-control" id="summary-ckeditor" name="articulo" rows="30"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="formGroupExampleInput">Autor</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="autor" placeholder="Autor">
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
</body>

</html>