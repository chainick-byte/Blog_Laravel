<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <a href="{{url('/formIndex')}}">quiero publicar</a>
    <br>
    <table style="width:80%">
        @foreach($blogs as $blog)
        <tr>
            <th>{{$blog->titulo}}</th>
            <th></th>

        </tr>

        <tr>
            <td colspan="2">{{$blog->articulo}}</td>

        </tr>
        <tr>
            <td><strong>{{$blog->created_at}}</strong> </td>

            <td><strong>{{$blog->autor}}</strong></td>
        </tr>
        @endforeach
       
    </table>
    <br>
  <!--hay que buscar com esto hacer horizontal-->
    <button type="button">{{$blogs->links()}}</button>
    
   
</body>

</html>