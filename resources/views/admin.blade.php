@extends('layouts.app')
    <title>Administrador</title>
  <style>
    .chart-container {
       width: 600px;
       height:600px
    }
  </style>
@section('content')
{{-- @auth
  {{ auth()->user()->name }}
  <a href="#"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
  @endauth


  @auth
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
      </form>
  @endauth
 --}}
  <script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            responsive: true,
            language: {
                "decimal": "",
                "emptyTable": "No hay datos",
                // "info": "Mostrando START a END de TOTAL registros",
                // "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                "infoFiltered": "(Filtro de MAX total registros)",
                "infoPostFix": "",
                "thousands": ",",
                // "lengthMenu": "Tabla estudiantes",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron coincidencias",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Próximo",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar orden de columna ascendente",
                    "sortDescending": ": Activar orden de columna desendente"
                }
            }
        });
    });
 </script>

 <script type="text/javascript">
    function Confirmdelete(){
      var respuesta = confirm('¿Estas seguro de que quieres eliminar este funcionario?');
      if (respuesta == true){
          return true;
      }else{
        return false;
      }
    }
</script>
<div class="container">

  <a href="#" data-toggle="modal" data-target="#admins" class="btn btn-info">Funcionarios <i class="fas fa-users-cog"></i></a><br><br>

@include('partials.session-status')
  
  <h3 style="margin-top: 10px;">Descargar Archivo</h3>
  <a href="{{ route('estudiantes.excel') }}" class="btn btn-success">Excel <i class="fas fa-file-excel"></i></a>
  <a href="{{ route('estudiantes.pdf') }}" class="btn btn-danger">PDF <i class="fas fa-file-pdf"></i></a><br>
  <p>(Archivo completo en excel)</p>

  <div class="card shadow mb-4" style="margin-top: 10px;">
            <div class="card-header py-3 bg-primary">
              <h6 class="m-0 font-weight-bold text-white"><center>Registros de los estudiantes <i class="fas fa-user-graduate"></i></center></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                  <thead class="bg-dark">
                    <tr>
                      <th style="color: white;">Identificacion</th>
                      <th style="color: white;">Nombre</th>
                      <th style="color: white;">Apellido</th>
                      <th style="color: white;">Dirreccion</th>
                      <th style="color: white;">Telefono</th>
                      <th style="color: white;">Barrio</th>
                      <th style="color: white;">Acudiente</th>                      
                    </tr>
                  </thead>
                  <tfoot class="bg-dark">
                    <tr>
                      <th style="color: white;">Identificacion</th>
                      <th style="color: white;">Nombre</th>
                      <th style="color: white;">Apellido</th>
                      <th style="color: white;">Dirreccion</th>
                      <th style="color: white;">Telefono</th>
                      <th style="color: white;">Barrio</th>
                      <th style="color: white;">Acudiente</th>                      
                    </tr>
                  </tfoot>
                  <tbody>
                   @foreach($student as $dato)  
                    <tr>
                      <td class="text-info"><b>{{$dato->id}}</b></td>
                      <td class="text-info"><b>{{$dato->nombre}}</b></td>
                      <td class="text-info"><b>{{$dato->apellido}}</b></td>
                      <td class="text-info"><b>{{$dato->direccion}}</b></td>
                      <td class="text-info"><b>{{$dato->telefono}}</b></td>
                      <td class="text-info"><b>{{$dato->barrio}}</b></td>
                      <td class="text-info"><b>{{$dato->nombreAcudiente}}</b></td>                     
                    </tr> 
                    @endforeach             
                  </tbody>
                </table>
              </div>
  </div>
</div>
{{-- <div class="card-header" style="width: 800px;">
  <h4>sisa</h4>
  <div class="card-body">
    <canvas id="myChart"></canvas>
  </div>
</div> --}}

    <!-- Modal -->
<div class="modal fade" id="admins" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-light">
            <!-- Modal Header -->
            <div class="modal-header bg-info text-white">
              <h4 class="modal-title" id="myModalLabel">Funcionarios <i class="fas fa-users-cog"></i></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true" style="color: white;">×</span>
                    <span class="sr-only">Close</span>
                </button>
                
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="card shadow mb-4" style="margin-top: 10px;">
            <div class="card-header py-3 bg-dark">
              <h6 class="m-0 font-weight-bold text-white"><center>Administradores actuales</center></h6>
            </div>
            <div class="card-body bg-light">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="background-color: blue;">
                    <tr>
                      {{-- <th style="color: white;">Identificacion</th> --}}
                      <th style="color: white;">Nombre</th>
                      <th style="color: white;">Correo</th>
                      <th style="color: white;">Fecha de resgistro</th>
                      <th style="color: white;"><i class="fas fa-user-edit"></i></i> </th>
                     {{--  <th style="color: white;">Dirreccion</th>
                      <th style="color: white;">Telefono</th>
                      <th style="color: white;">Barrio</th>
                      <th style="color: white;">Acudiente</th> --}}
                    </tr>
                  </thead>
                  <tfoot style="background-color: blue;">
                    <tr>
                      {{-- <th style="color: white;">Identificacion</th> --}}
                      <th style="color: white;">Nombre</th>
                      <th style="color: white;">Correo</th>
                      <th style="color: white;">Fecha de resgistro</th>
                      <th style="color: white;"><i class="fas fa-user-edit"></i></i> </th>
                     {{--  <th style="color: white;">Dirreccion</th>
                      <th style="color: white;">Telefono</th>
                      <th style="color: white;">Barrio</th>
                      <th style="color: white;">Acudiente</th> --}}
                    </tr>
                  </tfoot>
                  <tbody>
                   @foreach($user as $dato)  
                    <tr>
                      {{-- <td>{{$dato->id}}</td> --}}
                      <td><b>{{$dato->name}}</b></td>
                      <td><b>{{$dato->email}}</b></td>
                      <td><b>{{$dato->created_at->diffForHumans()}}</b></td>
                      <form method="POST" action="{{ route('destroy', $dato) }}">
                        @csrf @method('DELETE')
                      <td><button onclick='return Confirmdelete()' title="Borrar" class="btn btn-danger"><i class="fas fa-user-minus"></i></button>
                      </form>
                    </tr> 
                    @endforeach             
                  </tbody>
                </table>
              </div>
  </div>
</div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
                <a type="button" href="{{ route('newAdmin') }}" class="btn btn-primary submitBtn" onclick="submitContactForm()">Nuevo <i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
    </div>
</div>
<script src="/chart.js/Chart.min.js"></script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 18, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection