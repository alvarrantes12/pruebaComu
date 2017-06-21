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
Vista que se encarga de crear un formulario con el fin crear un nuevo canton en la base de datos-->
@extends('adminMasterPage')

@section('adminContent')
<div class="container-fluid">
    <div class="container">
        <div class="col-md-12  text-center">
            <h2>Agregar Categoría</h2><br><br>
        </div>
    </div>

<form class="form-horizontal" role="form" method="POST" action="{{ url('insertNewCategory/') }}">
      
 <div class="form-group">
    {!!csrf_field() !!}
    <label for="" class="col-lg-4 control-label">Nombre de la categoría:</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" id="category" name = "category"
             placeholder="Ej. Sub-17" value="{{ old('category') }}">
    </div>

    <label for="" class="col-md-4 control-label">Límite inicial de fecha de nacimiento:</label>
    <div class="col-lg-6">
        <div class='input-group date' id='startDate'>
            <input placeholder = "Seleccione una fecha" name = "startDate" type='text' class="form-control" id='datepicker' autocomplete='off' onchange="changeEventHandler(event);"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
        </div>
        </div>
        <label for="" class="col-md-4 control-label">Fecha límite de fecha de nacimiento:</label>
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