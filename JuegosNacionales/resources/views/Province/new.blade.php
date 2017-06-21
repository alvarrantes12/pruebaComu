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
            <h2>Agregar Provincia</h2><br><br>
        </div>
    </div>


<form class="form-horizontal" role="form" method="POST" action="{{url('newProvince/')}}" >
  <div class="form-group">
      {!!csrf_field() !!}
    <label for="" class="control-label col-sm-offset-2 col-sm-2" >Nombre de la provincia:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="province" name="province" placeholder="Ej: Alajuela" value= "{{old('province')}}">
    </div>
  </div>
  <div class="col-lg-offset-8 col-lg-4">
      <a href="{{URL::to('province/')}}"><button type="btn btn-info" class="btn btn-info"><span class="glyphicon"> </span><span>Cancelar</span></button></a>
     <button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Aceptar</span></button>
    </div>
  </form>
</div>
@endsection