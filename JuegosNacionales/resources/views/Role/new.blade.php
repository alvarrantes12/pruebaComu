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
            <h2>Agregar Tipo de Usuario</h2><br><br>
        </div>
    </div>


    <form class="form-horizontal" role="form" method="POST" action="{{ url('insertR/') }}">
      
 <div class="form-group">
    {!!csrf_field() !!}
    <label for="" class="col-lg-4 control-label">Nombre del tipo de usuario:</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" id="role" name = "role"
             placeholder="Digite el nombre el tipo de usuario" value="{{ old('role') }}">
    </div>

    
</div>
<div class="col-lg-offset-8 col-lg-4">
      <button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Aceptar</span></button>
      <a href="{{URL::to('role/')}}"><button type="btn btn-info" class="btn btn-info"><span class="glyphicon"> </span><span>Cancelar</span></button></a>
    </div>
</form>

 </div>

@endsection