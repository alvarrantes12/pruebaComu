 <!--Universidad de Costa Rica
Informática Empresarial
IF7102 - Multimedios
Prof. Jonathan Rojas
Proyecto Inscripciones Juegos Nacionales ICODER
Estudiantes:
Paula Álvarez Barrantes – B40301
Elí Hidalgo Quesada - B43429
Stephanie Rojas Alfaro – A54827
I Ciclo, 2017

Clase: show
Vista que se encarga de crear una tabla con todo los participantes inscritos o con parte de su
inscripción en el sistema-->
@extends('masterPage')
@section('content')
<div class="form-group">
   <script type="text/javascript">
      function putSport() {
          var sportS= localStorage.getItem("sport");
          document.getElementById("selectedSport").innerHTML = sportS;
      }
   </script>
   <div class="container-fluid">
      <div class="container">
         <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Inscripción Juegos Nacionales</h2>
         </div>
         <div  >
            <div class="col-md-6 text-right">
               <h3>Deporte:</h3>
            </div>
            <div class="col-md-5 text-left">
               <h3 id="selectedSport"></h3>
               <script type="text/javascript">putSport()</script>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-12">
      <div class="table-responsive">
         <table  class="table table-hover table-striped">
            <td aling="center">
               <form class="form-horizontal" role="form" method="POST" >
                  {{ csrf_field() }}
                  <div class="col-md-8">
                     <input id="filtrar" placeholder='Digite la identificación del participante' type="text" class="form-control" name="filter" value="{{ old('filter') }}" required autofocus>
                     @if ($errors->has('filter'))
                     <span class="help-block">
                     <strong>{{$errors->first('filter')}}</strong>
                     </span>
                     @endif
                  </div>
                  <div  >
                     <div class="col-md-4 ">
                        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"> </span><span>  Buscar</span></button>
                     </div>
                  </div>
               </form>
            </td>
            <td align="center">
               <div class="col-md-12 ">
                  <button class="btn btn-info"><span class="glyphicon glyphicon-plus"> </span><span>  Agregar Nuevo Participante</span></button>
               </div>
            </td>
      </div>
      </table>
   </div>
   <div class="col-md-12">
      <div class="table-responsive">
         <table class="table table-hover table-striped">
            <thead>
               <th>Identificación</th>
               <th>Nombre</th>
               <th>Primer Apellido</th>
               <th>Segundo Apellido</th>
               <th>Fecha Nacimiento</th>
               <th>Peso</th>
               <th>Estatura</th>
               <th>Estado</th>
            </thead>
         </table>
      </div>
   </div>
</div>
@endsection
