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

Clase: specification
Vista que se encarga de crear un formulario con el fin crear una nueva edición en la base de datos-->
@extends('adminMasterPage')

@section('adminContent')
<div class="container-fluid">
    <div class="container">
        <div class="col-md-12  text-center">
            <h2>Agregar Deporte</h2><br><br>
        </div>
    </div>
  <form class="form-horizontal" role="form" method="POST" action="{{ url('insertNewSport/') }}">
    <div class="form-group">
      {!!csrf_field() !!}
      <label for="" class="col-lg-4 control-label">Nombre del deporte:</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="sportName" name = "sportName"
             placeholder="Ej. Ciclismo" value="{{ old('sportName') }}">
      </div>
      <label for="" class="col-lg-4 control-label">Tipo de Deporte:</label>
      <div class="btn-group">
        <select class="form-control" id = "sportT" name = "sportT">
            <option value="0" selected>Seleccione un tipo de deporte...</option>
             @foreach ($sportType as $sportType)
              <option  value ='{{$sportType->IDSportType}}'>{{$sportType->sportType}}</option>
            @endforeach
        </select>
    </div>
    <div></div>
    <label for="" class="col-lg-4 control-label">Cantidad de Atletas o de equipos:</label>
      <div class="col-lg-6">
        <input type="number" name = "athleteAmount" class="form-control" min="1">
             
    </div>
      <label for="" class="col-md-4 control-label">Inicio de inscripciones para este deporte:</label>
    <div class="col-lg-6">
        <div class='input-group date' id='startDate'>
            <input placeholder = "Seleccione una fecha" name = "startDate" type='text' class="form-control" id='datepicker' autocomplete='off' onchange="changeEventHandler(event);"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
        </div>
        </div>
        <label for="" class="col-md-4 control-label">Fin de inscripciones para este deporte:</label>
    <div class="col-lg-6">
        <div class='input-group date' id='endDate'>
            <input placeholder = "Seleccione una fecha" name = "endDate" type='text' class="form-control" id='datepicker2' autocomplete='off' onchange="changeEventHandler(event);"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
        </div>
        </div>
</div>
<div class="col-lg-offset-8 col-lg-4">
      <a href="{{URL::to('category/')}}"><button type="btn btn-info" class="btn btn-info"><span class="glyphicon"> </span><span>Cancelar</span></button></a>
      <button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Aceptar</span></button>
    </div>

  </form>

</div>

 
<script type="text/javascript">
    $(document).ready(function($)  {
        	$(function () {
                $('#datepicker').datetimepicker({locale: 'es', format: 'YYYY-MM-DD', viewMode: 'years'});
                $('#datepicker2').datetimepicker({locale: 'es', format: 'YYYY-MM-DD', viewMode: 'years'});
            });
    	});
</script>
@endsection