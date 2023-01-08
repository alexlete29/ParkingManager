<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Personas</title>
</head>
<body>
@include('navbar')
<form method="post" action="/asignado">
    @csrf
<div class="container">
    <select name="select1" class="form-select">
        <option value="" selected hidden>Usuarios</option>
    @foreach ($arrayuser as $usuarios)
        <option value="{{$usuarios->id}}">{{$usuarios->nombre}}</option>
    @endforeach
    </select>
    <select name="select2" id="" class="form-select">
        <option value="" selected hidden>Coches</option>
    @foreach ($arraycoches as $coches)
    <option value="{{$coches->id}}">{{$coches->matricula}}</option>
    @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Asignar</button>
</div>
</form>
 
</body>
</html>
