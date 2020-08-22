 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap2.min.css">
  <link href="fontawesome-free/css/all.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <script src="./bootstrap/js/jquery2.min.js"></script>
  <script src="./bootstrap/js/bootstrap2.min.js"></script>
  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
  <title>@yield('title', 'Institucion Señora del Carmen')</title>
</head>
<body>
<div class="container">
<center><img style="margin-top: 30px;" src="img/señoraDelCarmen.jpg" width="200" height="200"></center>
<h1 style="text-align: center;">INSTITUCION EDUCATIVA NUESTRA SEÑORA DEL CAMEN</h1>
<h2 style="margin-top: 50px; text-align: center;">Formato de inscripcion <i class="far fa-edit"></i></h2>

<div class="progress" style="margin-top: 50px;">
  <div class="progress-bar progress-bar-striped active" style="background-color: green;" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<form id="regiration_form" novalidate action="{{ route('store') }}"  method="POST" style="margin-top: 20px;">
@csrf
<fieldset>
  <h2><center><b>Paso 1: Datos de identifiacion del estudiante.</b></center></h2>
  <div class="form-group col-md-6">
  <label for="tipo">Tipo de documento</label>
  <select name="tipoDocumento" class="form-control" required="">
    <option value="">Seleccione</option>
    @foreach($tipoDocumento as $tipo)
      <option value="{{ $tipo->id }}" {{ old('tipoDocumento') == $tipo->id ? 'selected' : ''}} >{{ $tipo->documento }}</option>
    @endforeach
  </select>
  {!! $errors->first('tipoDocumento','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="id">Numero de identificacion</label>
  <input type="number" class="form-control" name="id" id="id" placeholder="No. Identificacion" value="{{ old('id') }}">
  {!! $errors->first('id','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="genero">Genero</label>
  <select name="genero" class="form-control">
    <option value="">Seleccione</option>
    @foreach($genero as $generos)
      <option value="{{ $generos->id }}" {{ old('genero') == $generos->id ? 'selected' : ''}}>{{ $generos->genero }}</option>
    @endforeach
  </select>
  {!! $errors->first('genero','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="departamentoExpedicion">Departamentos de Expedicion</label>
  <select name="departamentoExpedicion" class="form-control">
    <option value="">Seleccione</option>
    @foreach($departamentoExpedicion as $departamento)
      <option value="{{ $departamento->id }}" {{ old('departamentoExpedicion') == $departamento->id ? 'selected' : ''}}>{{ $departamento->departamentoExpedicion }}</option>
    @endforeach
  </select>
  {!! $errors->first('departamentoExpedicion','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="municipioExpedicion">Municipio de Expedicion</label>
  <select name="municipioExpedicion" class="form-control">
    <option value="">Seleccione</option>
    @foreach($municipioExpedicion as $municipio)
      <option value="{{ $municipio->id }}" {{ old('municipioExpedicion') == $municipio->id ? 'selected' : ''}}>{{ $municipio->municipioExpedicion }}</option>
    @endforeach
  </select>
  {!! $errors->first('municipioExpedicion','<small style="color: red;">:message</small>') !!}
</div>

<div class="form-group col-md-6">
  <label for="fechaNacimiento">Fecha de Nacimiento</label>
  <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ old('fechaNacimiento') }}">
  {!! $errors->first('fechaNacimiento','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="">Departamento</label>
  <select name="departamento" class="form-control">
    <option value="">Seleccione</option>
    @foreach($departamentos as $departamento)
      <option value="{{ $departamento->id }}" {{ old('departamento') == $departamento->id ? 'selected' : ''}}>{{ $departamento->departamento }}</option>
    @endforeach
  </select>
  {!! $errors->first('departamento','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="">Municipio</label>
  <select name="municipio" class="form-control">
    <option value="">Seleccione</option>
    @foreach($Municipio as $municipios)
      <option value="{{ $municipios->id }}" {{ old('municipio' ) == $municipios->id ? 'selected' : ''}}>{{ $municipios->municipio }}</option>
    @endforeach
  </select>
  {!! $errors->first('municipio','<small style="color: red;">:message</small>') !!}
</div>
<h2><center><b>Paso 2: Nombre y apellidos-direccion</b></center></h2>
  <div class="form-group col-md-6">
  <label for="apellido">Apellidos</label>
  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellidos..." value="{{ old('apellido') }}">
  {!! $errors->first('apellido','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="nombre">Nombres</label>
  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres..." value="{{ old('nombre') }}">
  {!! $errors->first('nombre','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="direccion">Direccion</label>
  <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion..." value="{{ old('direccion') }}">
  {!! $errors->first('direccion','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="barrio">Barrio</label>
  <input type="text" class="form-control" name="barrio" id="barrio" placeholder="Barrio..." value="{{ old('barrio') }}">
  {!! $errors->first('barrio','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="zona">Zona</label>
  <select name="zona" class="form-control">
    <option value="">Seleccione</option>
    @foreach($zona as $zonas)
      <option value="{{ $zonas->id }}" {{ old('zona') == $zonas->id ? 'selected' : ''}}>{{ $zonas->zona }}</option>
    @endforeach
  </select>
  {!! $errors->first('zona','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="telefono">Telefono</label>
  <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono..."  value="{{ old('telefono') }}">
  {!! $errors->first('telefono','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="celular">Celular</label>
  <input type="number" class="form-control" name="celular" id="celular" placeholder="Celular..."  value="{{ old('celular') }}">
  {!! $errors->first('celular','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="email">Correo Electronico</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico..." value="{{ old('email') }}">
  {!! $errors->first('email','<small style="color: red;">:message</small>') !!}
</div>
 <h2><center><b>Paso 3: Información del sistema de salud</b></center></h2>
<div class="form-group col-md-6">
  <label for="sectorPrivado">Proviene del sector privado</label>
  <select name="sectorPrivado" class="form-control">
    <option value="">Seleccione</option>
    @foreach($epsPrivado as $epsPrivado)
      <option value="{{ $epsPrivado->id }}" {{ old('sectorPrivado') == $epsPrivado->id ? 'selected' : ''}}>{{ $epsPrivado->sector }}</option>
    @endforeach
  </select>
  {!! $errors->first('sectorPrivado','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="epsMunicipio">Proveniente de otro municipio</label>
  <select name="epsMunicipio" class="form-control">
    <option value="">Seleccione</option>
    @foreach($epsMunicipio as $epsMunicipio)
      <option value="{{ $epsMunicipio->id }}" {{ old('epsMunicipio') == $epsMunicipio->id ? 'selected' : ''}}>{{ $epsMunicipio->municipios }}</option>
    @endforeach
  </select>
  {!! $errors->first('epsMunicipio','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="instProviene">Institucion de donde proviene</label>
  <input type="text" class="form-control" name="instProviene" id="instProviene" placeholder="Institucion de donde proviene..."  value="{{ old('instProviene') }}">
  {!! $errors->first('instProviene','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="eps">EPS</label>
  <input type="text" class="form-control" name="eps" id="eps" placeholder="EPS"  value="{{ old('eps') }}">
  {!! $errors->first('eps','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="ips">IPS</label>
  <input type="text" class="form-control" name="ips" id="ips" placeholder="EPS"  value="{{ old('ips') }}">
  {!! $errors->first('ips','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="tipoSangre">Tipo de sangre</label>
  <input type="text" class="form-control" name="tipoSangre" id="tipoSangre" placeholder="R.H"  value="{{ old('tipoSangre') }}">
  {!! $errors->first('tipoSangre','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="victimaConflicto">Poblacion victima del conflicto</label>
  <select name="victimaConflicto" class="form-control">
    <option value="">Seleccione</option>
    @foreach($victimaConflicto as $victimaConflicto)
      <option value="{{ $victimaConflicto->id }}" {{ old('victimaConflicto') == $victimaConflicto->id ? 'selected' : ''}}>{{ $victimaConflicto->victima }}</option>
    @endforeach
  </select>
  {!! $errors->first('victimaConflicto','<small style="color: red;">:message</small>') !!}
</div>
  <input type="button" style="margin-top: 25px;" class="next btn btn-info" value="Siguiente" />
</fieldset>
<fieldset>
  <h2><center><b>Paso 4: Situacion economica-Territorialidad</b></center></h2>
<div class="form-group col-md-12">
  <label for="numeroSisben">Numero del carnet del sisben</label>
  <input type="number" class="form-control" name="numeroSisben" id="numeroSisben" placeholder="No. del carnet del sisben..." value="{{ old('numeroSisben') }}">
  {!! $errors->first('numeroSisben','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="puntajeSisben">Puntaje del sisben</label>
  <input type="number" class="form-control" name="puntajeSisben" id="puntajeSisben" placeholder="Puntaje del sisben..." value="{{ old('puntajeSisben') }}">
  {!! $errors->first('puntajeSisben','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="estrato">Estrato</label>
  <input type="number" class="form-control" name="estrato" id="estrato" placeholder="Estrato..." value="{{ old('estrato') }}">
  {!! $errors->first('estrato','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="">Alumno madre</label>
  <select name="alumnoMadre" class="form-control">
    <option value="">Seleccione</option>
    @foreach($estatusMadre as $estatus)
      <option value="{{ $estatus->id }}" {{ old('alumnoMadre') == $estatus->id ? 'selected' : ''}}>{{ $estatus->estatus }}</option>
    @endforeach
  </select>
  {!! $errors->first('alumnoMadre','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="">Etnia</label>
  <select name="etnia" class="form-control">
    <option value="">Seleccione</option>
    @foreach($etnia as $etnia)
      <option value="{{ $etnia->id }}" {{ old('etnia') == $etnia->id ? 'selected' : ''}} >{{ $etnia->etnia }}</option>
    @endforeach
  </select>
  {!! $errors->first('etnia','<small style="color: red;">:message</small>') !!}
</div>
<h2><center><b>Paso 5: Situacion de discapacidad</b></center></h2>
<div class="form-group col-md-6">
  <label for="">Discapacidad</label>
  <select name="discapacidad" class="form-control">
    <option value="">Seleccione</option>
    @foreach($discapacidad as $discapacidad)
      <option value="{{ $discapacidad->id }}" {{ old('discapacidad') == $discapacidad->id ? 'selected' : ''}} >{{ $discapacidad->discapacidad }}</option>
    @endforeach
  </select>
  {!! $errors->first('discapacidad','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="">Transtorno en el aprendizaje escolar y comportamiento</label>
  <select name="transtornoAprendisaje" class="form-control">
    <option value="">Seleccione</option>
    @foreach($transtorno as $transtorno)
      <option value="{{ $transtorno->id }}" {{ old('transtornoAprendisaje') == $transtorno->id ? 'selected' : ''}} >{{ $transtorno->transtorno }}</option>
    @endforeach
  </select>
  {!! $errors->first('transtornoAprendisaje','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="">Apoyo academico especial</label>
  <select name="apoyoEspecial" class="form-control">
    <option value="">Seleccione</option>
    @foreach($apoyo as $apoyo)
      <option value="{{ $apoyo->id }}" {{ old('capacidadEcepcional') == $apoyo->id ? 'selected' : ''}} >{{ $apoyo->apoyo }}</option>
    @endforeach
  </select>
  {!! $errors->first('apoyoEspecial','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="">Capacidades ecepcionales</label>
  <select name="capacidadEcepcional" class="form-control">
    <option value="">Seleccione</option>
    @foreach($capacidades as $capacidades)
      <option value="{{ $capacidades->id }}" {{ old('capacidadEcepcional') == $capacidades->id ? 'selected' : ''}} >{{ $capacidades->capacidades }}</option>
    @endforeach
  </select>
  {!! $errors->first('capacidadEcepcional','<small style="color: red;">:message</small>') !!}
</div>
 <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>
<fieldset>
  <h2><center><b>Paso 6: Información del acudiente</b></center></h2>
<div class="form-group col-md-6">
  <label for="apellidoAcudiente">Apellidos</label>
  <input type="text" class="form-control" name="apellidoAcudiente" id="apellidoAcudiente" placeholder="Apellidos..." value="{{ old('apellidoAcudiente') }}">
  {!! $errors->first('apellidoAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="nombreAcudiente">Nombres</label>
  <input type="text" class="form-control" name="nombreAcudiente" id="nombreAcudiente" placeholder="Nombres..." value="{{ old('nombreAcudiente') }}">
  {!! $errors->first('nombreAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="paisAcudiente">Pais</label>
  <input type="text" class="form-control" name="paisAcudiente" id="paisAcudiente" placeholder="Pais..." value="{{ old('paisAcudiente') }}">
  {!! $errors->first('paisAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="direccionAcudiente">Direccion</label>
  <input type="text" class="form-control" name="direccionAcudiente" id="direccionAcudiente" placeholder="Direccion..." value="{{ old('direccionAcudiente') }}">
  {!! $errors->first('direccionAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="barrioAcudiente">Barrio</label>
  <input type="text" class="form-control" name="barrioAcudiente" id="barrioAcudiente" placeholder="Barrio..." value="{{ old('barrioAcudiente') }}">
  {!! $errors->first('barrioAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="parentesco">Parentesco</label>
  <input type="text" class="form-control" name="parentesco" id="parentesco" placeholder="Parentesco..." value="{{ old('parentesco') }}">
  {!! $errors->first('parentesco','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
 <label for="zona">Zona</label>
  <select name="zonaAcudiente" class="form-control">
    <option value="">Seleccione</option>
    @foreach($zona as $zona)
      <option value="{{ $zona->id }}" {{ old('zonaAcudiente') == $zona->id ? 'selected' : ''}}>{{ $zona->zona }}</option>
    @endforeach
  </select>
  {!! $errors->first('zonaAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="telefonoAcudiente">Telefono</label>
  <input type="text" class="form-control" name="telefonoAcudiente" id="telefonoAcudiente" placeholder="Telefono..." value="{{ old('telefonoAcudiente') }}">
  {!! $errors->first('telefonoAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="celularAcudiente">Celular</label>
  <input type="text" class="form-control" name="celularAcudiente" id="celularAcudiente" placeholder="Celular..." value="{{ old('celularAcudiente') }}">
  {!! $errors->first('celularAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="emailAcudiente">Email</label>
  <input type="text" class="form-control" name="emailAcudiente" id="emailAcudiente" placeholder="Email..." value="{{ old('emailAcudiente') }}">
  {!! $errors->first('emailAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="tipo">Tipo de documento</label>
  <select name="tipoDocumentoAcudiente" class="form-control">
    <option value="">Seleccione</option>
    @foreach($tipoDocumento as $tipo)
      <option value="{{ $tipo->id }}" {{ old('tipoDocumentoAcudiente') == $tipo->id ? 'selected' : ''}} >{{ $tipo->documento }}</option>
    @endforeach
  </select>
  {!! $errors->first('tipoDocumentoAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="idAcudiente">Numero de identificacion</label>
  <input type="number" class="form-control" name="idAcudiente" id="idAcudiente" placeholder="Numero de identificacion..." value="{{ old('idAcudiente') }}">
  {!! $errors->first('idAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="tipo">Genero</label>
  <select name="generoAcudiente" class="form-control">
    <option value="">Seleccione</option>
    @foreach($genero as $genero)
      <option value="{{ $genero->id }}" {{ old('generoAcudiente') == $genero->id ? 'selected' : ''}}>{{ $genero->genero }}</option>
    @endforeach
  </select>
  {!! $errors->first('generoAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="departamentoExpedicionAcudiente">Departamentos de expedicion</label>
  <select name="departamentoExpedicionAcudiente" class="form-control">
    <option value="">Seleccione</option>
    @foreach($departamentoExpedicion as $departamento)
      <option value="{{ $departamento->id }}" {{ old('departamentoExpedicionAcudiente') == $departamento->id ? 'selected' : ''}}>{{ $departamento->departamentoExpedicion }}</option>
    @endforeach
  </select>
  {!! $errors->first('departamentoExpedicionAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="municipioExpedicionAcudiente">Municipio de expedicion</label>
  <select name="municipioExpedicionAcudiente" class="form-control">
    <option value="">Seleccione</option>
    @foreach($municipioExpedicion as $municipio)
      <option value="{{ $municipio->id }}" {{ old('municipioExpedicionAcudiente') == $municipio->id ? 'selected' : ''}}>{{ $municipio->municipioExpedicion }}</option>
    @endforeach
  </select>
  {!! $errors->first('municipioExpedicionAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="convivencia"><strong>Convive con el estudiante</strong></label>  
    <select name="convivenciaEstudiante" class="form-control">
      <option value="">Seleccione</option>
      <option value="si" {{ old('municipioExpedicionAcudiente') == 'si' ? 'selected' : ''}}>Si</option>
      <option value="no" {{ old('municipioExpedicionAcudiente') == 'no' ? 'selected' : ''}}>No</option>
    </select>
  {!! $errors->first('convivenciaEstudiante','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="fechaNacimientoAcudiente">Fecha de nacimiento</label>
  <input type="date" class="form-control" name="fechaNacimientoAcudiente" id="fechaNacimientoAcudiente" placeholder="Fecha nacimiento..." value="{{ old('fechaNacimientoAcudiente') }}">
  {!! $errors->first('fechaNacimiento','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="departamentoAcudiente">Departamento</label>
  <select name="departamentoAcudiente" class="form-control">
    <option value="">Seleccione</option>
    @foreach($departamentos as $departamentos)
      <option value="{{ $departamentos->id }}" {{ old('departamento') == $departamentos->id ? 'selected' : ''}}>{{ $departamentos->departamento }}</option>
    @endforeach
  </select>
  {!! $errors->first('departamento','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="municipioAcudiente">Municipio</label>
  <select name="municipioAcudiente" class="form-control">
    <option value="">Seleccione</option>
    @foreach($Municipio as $municipio)
      <option value="{{ $municipio->id }}" {{ old('municipioAcudiente') == $municipio->id ? 'selected' : ''}}>{{ $municipio->municipio }}</option>
    @endforeach
  </select>
  {!! $errors->first('municipioAcudiente','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="tipoEmpleo">Tipo de empleo</label>
  <select name="tipoEmpleo" class="form-control">
    <option value="">Seleccione</option>
    @foreach($tipoEmpleo as $empleo)
      <option value="{{ $empleo->id }}" {{ old('tipoEmpleo') == $empleo->id ? 'selected' : ''}}>{{ $empleo->tipo }}</option>
    @endforeach
  </select>
  {!! $errors->first('tipoEmpleo','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="ocupacion">Ocupacion</label>
  <input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ocupacion..." value="{{ old('ocupacion') }}">
  {!! $errors->first('ocupacion','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="profecion">Profecion</label>
  <input type="text" class="form-control" name="profecion" id="profecion" placeholder="Profecion..." value="{{ old('profecion') }}">
  {!! $errors->first('profecion','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="direccionEmpresa">Direccion de la empresa</label>
  <input type="text" class="form-control" name="direccionEmpresa" id="direccionEmpresa" placeholder="Direccion de la empresa..." value="{{ old('direccionEmpresa') }}">
  {!! $errors->first('direccionEmpresa','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="nombreEmpresa">Nombre de la empresa</label>
  <input type="text" class="form-control" name="nombreEmpresa" id="nombreEmpresa" placeholder="Nombre de la empresa..." value="{{ old('nombreEmpresa') }}">
  {!! $errors->first('nombreEmpresa','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="cargoEmpresa">Cargo que desempeña</label>
  <input type="text" class="form-control" name="cargoEmpresa" id="cargoEmpresa" placeholder="Cargo que desempeña..." value="{{ old('cargoEmpresa') }}">
  {!! $errors->first('cargoEmpresa','<small style="color: red;">:message</small>') !!}
</div>
<div class="form-group col-md-6">
  <label for="telefonoEmpresa">Telefono de la empresa</label>
  <input type="number" class="form-control" name="telefonoEmpresa" id="telefonoEmpresa" placeholder="Telefono de la empresa..." value="{{ old('telefonoEmpresa') }}">
  {!! $errors->first('telefonoEmpresa','<small style="color: red;">:message</small>') !!}
</div>
  <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  <input type="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>
</form>
</div>
</body><br><br>
</html>
<script type="text/javascript">
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
</script>