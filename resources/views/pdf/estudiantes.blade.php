<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Estudiantes</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>

    <center><img style="margin-top: 30px;" src="img/señoraDelCarmen.jpg" width="200" height="200"></center>

    <h1 style="text-align: center;">I.E NUESTRA SEÑORA DEL CARMEN</h1>
    <hr>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Identidicacion</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Dirrecion</th>
          <th scope="col">Telefono</th>
          <th scope="col">Barrio</th>
          <th scope="col">Acudiente</th>
        </tr>
      </thead>
      <tbody>
            @foreach($students as $dato)  
            <tr>
                <td>{{$dato->id}}</td>
                <td>{{$dato->nombre}}</td>
                <td>{{$dato->apellido}}</td>
                <td>{{$dato->direccion}}</td>
                <td>{{$dato->telefono}}</td>
                <td>{{$dato->barrio}}</td>
                <td>{{$dato->nombreAcudiente}}</td>
            </tr> 
            @endforeach             
         </tbody>
    </table>

</body>
</html>