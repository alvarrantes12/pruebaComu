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

Clase: new
Vista que se encarga de crear un formulario con el fin crear una nueva edición en la base de datos-->
@extends('adminMasterPage')

@section('adminContent')

<div class="container-fluid">
    <div class="container">
        <div class="col-md-12  text-center">
            <h2>Agregar Edición</h2><br><br>
        </div>
    </div>


 <form class="form-horizontal" role="form" method="POST" action="{{ url('insertNewEdition/') }}">
      
 <div class="form-group">
    {!!csrf_field() !!}
    <label for="" class="col-lg-4 control-label">Nombre de la Edición:</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" id="nameEdition" name = "nameEdition"
             placeholder="Ej. San José">
    </div>
    <label for="" class="col-lg-4 control-label">Año de la Edición:</label>
    <div class="col-lg-6">
        <div class='input-group date' id='year'>
            <input placeholder = "Seleccione el año de la edición" name = "year" type='text' class="form-control" id='datepicker' autocomplete='off' onchange="changeEventHandler(event);"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
        </div>
        </div>
    <label for="" class="col-lg-4 control-label">Lugar de los Evento:</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" id="place" name = "place"
             placeholder="Ej. Desamparados">
    </div>
</div>
<div class="col-lg-offset-8 col-lg-4">
      <a href="{{URL::to('edition/')}}"><button type="btn btn-info" class="btn btn-info"><span class="glyphicon"> </span><span>Cancelar</span></button></a>
      <button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Aceptar</span></button>
    </div>
</form>

</div>
<script type="text/javascript">
    $(document).ready(function($)  {
        	$(function () {
                $('#datepicker').datetimepicker({locale: 'es', format: 'YYYY', viewMode: 'years'});
                
            });
    	});
</script>
@endsection