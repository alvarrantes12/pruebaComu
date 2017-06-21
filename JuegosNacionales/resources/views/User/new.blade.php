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
            <h2>Agregar Usuario</h2><br><br>
        </div>
    </div>


<form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-2" for="email">Identificación:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="id" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-2" for="">Nombre completo:</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="name" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-2" for="">Nombre de usuario:</label>
    <div class="col-sm-6"> 
      <input type="text" class="form-control" id="user" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-offset-2 col-sm-2" for="year">Correo electrónico:</label>
    <div class="col-sm-6"> 
      <input type="email" class="form-control" id="email" placeholder="">
    </div>
  </div>
   <div class="form-group">
  <label for="" class="col-lg-4 control-label">Tipo de usuario:</label>
     <div class="col-lg-6">
         <select class="form-control">
              <option>Seleccione...</option>
              <option>Representante</option>
              <option>Administrador</option>
          </select>
      </div>
      <button type="button" class="btn btn-primary btn-large" data-toggle="modal" data-target="#insertarTipoUsuario">Añadir Otra</button>
      </div>
   
   </form>

    <div class="col-lg-offset-8 col-lg-4">
      <a href="{{URL::to('user/')}}"><button type="btn btn-info" class="btn btn-info"><span class="glyphicon"> </span><span>Cancelar</span></button></a>
       <a href="{{URL::to('user/')}}"><button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Aceptar</span></button></a>
    </div>
</div>


<!-- Vista modal para la inserción de una nuevo tipo de usuario -->

<div id="insertarTipoUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Añadir tipo de usuario</h4>
      </div>
      <div class="modal-body">
        <form id='formCategoria' class="form-horizontal" role="form" method="POST" action="{{ url('/dispositivo/crearCategoria/') }}">
              {{ csrf_field() }}
             <div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
                            <label for="categoria" align='left'  class="col-md-4 control-label">Tipo de usuario: </label>
                            <div class="col-md-6">
                                <input id="modelo" placeholder='Ingrese el nombre del tipo de usuario' type="text" class="form-control" name="categoria" value="{{ old('categoria') }}" required autofocus>

                                
                                
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                    <button type="submit" class="btn btn-info">
                                        Insertar
                                    </button>
                                    <button type="submit" class="btn btn-info" data-dismiss='modal'>
                                        Cerrar
                                    </button>
                            </div>
                        </div>
       </form>        
      </div>
      
    </div>
  </div>
</div>
@endsection