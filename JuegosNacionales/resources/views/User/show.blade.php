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
Vista que se encarga de crear una tabla con todos los usuarios del sistema-->

@extends('adminMasterPage')
@section('adminContent')

<div class="form-group">
<div class="container-fluid">
    <div class="container">
        <div class="col-md-12 text-left">
            
            <h3>Usuarios </h3>
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
                        <input id="filtrar" placeholder='Digite el nombre del usuario' type="text" class="form-control" name="filter" value="{{ old('filter') }}" required autofocus>
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
                   <a href="{{URL::to('addUser/')}}"> <button class="btn btn-info"><span class="glyphicon glyphicon-plus"> </span><span>  Agregar Nuevo Usuario</span></button></a>
              </div>
            </td> 
        </div>
    </table>
</div>
<div class="col-md-12">
   <div class="table-responsive">
      <table class="table table-hover table-striped">
         <thead>
            <th>Numero de identificacion</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Canton</th>
            <th>Tipo de usuario</th>
            <th></th>
            <th></th>
         </thead>
         
         @foreach ($users as $u)
         <tr>
            <td>{{$u->IDPerson}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
               <a href="{{URL::to('/User/editar/' . $u->IDPerson)}}">
                  <i class="fa fa-pencil-square-o"></i> <span>Editar</span>
                  <!-- <small class="label pull-right bg-red">PDF</small> -->
               </a>
            </td>
            <td>
               <a href="{{URL::to('/User/eliminar/' . $u->IDPerson)}}">
                  <i class="fa fa-trash-o"></i> <span>Eliminar</span>
                  <!-- <small class="label pull-right bg-red">PDF</small> -->
               </a>
            </td>
         </tr>
         @endforeach
      </table>
   </div>
</div>
</div>
@endsection
