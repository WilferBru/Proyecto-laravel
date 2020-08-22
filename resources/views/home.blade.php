@extends('layouts.app')
    <title>Home</title>
@section('content')
<div class="container">
<center><img style="margin-top: 30px;" src="img/señoraDelCarmen.jpg" width="200" height="200"></center>
<h1 style="text-align: center;">INSTITUCION EDUCATIVA NUESTRA SEÑORA DEL CAMEN</h1>
<h2 style="margin-top: 30px; text-align: center;">Bienvenido</h2>

<p style="text-align: center; margin-top: 20px;">Bienvenido este formulario es de uso exclusivo para recoleccion de informacion de los estudiantes a los cuales desean matricular en nuestra institucion</p>

<div style="margin-top: 40px;"><center><a class="btn btn-outline-info my-2 my-sm-0" href="{{'/form'}}">Realizar formulario  <i class="far fa-edit"></i></a></center></div>
  
<footer style="margin-top: 20px;">
  <div class='alert alert-info' role='alert'><center><p style="text-align: center;"><b>Nota:</b> Este formulario solo puede ser realizado una sola vez, ¡Gracias!</p></center></div>
</footer>
</div>
@endsection