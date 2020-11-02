<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{route('save')}}">
    <label for="fname">Titulo</label><br>
        @csrf 
        <input type="text" name="titulo"><br>
        <label for="w3review">Review of W3Schools:</label>
        <br>
        <textarea id="w3review" name="articulo" rows="4" cols="50">
    At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
        </textarea>
        <br>
        <label for="fname">Autor</label><br>
        <input type="text" id="autor" name="autor"><br>
        <!--aqui va en la clase btn el boton de bootstrap-->
        <button type="submit">Guardar</button>
    </form>
    
</body>

</html>