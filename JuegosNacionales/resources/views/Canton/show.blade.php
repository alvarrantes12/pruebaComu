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
Vista que se encarga de crear una tabla con los cantones en la base de datos-->

@extends('adminMasterPage')
@section('adminContent')

<div class="container-fluid">
    <div class="container">
        <div class="col-md-12 text-left">
            
            <h3>Cantones </h3>
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
                        <input id="filtrar" placeholder='Digite el nombre del cantón' type="text" class="form-control" name="filter" value="{{ old('filter') }}" required autofocus>
                        @if ($errors->has('filter'))
                            <span class="help-block">
                                <strong>{{$errors->first('filter')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 ">
                            <a href="{{URL::to ('/insertCanton')}}"><button class="btn btn-info"><span class="glyphicon glyphicon-search"> </span><span>Agregar Canton</span></button></a>
                        </div>
                    </div>
                </form>
                             
            </td>
            <td align="center">
                <div class="col-md-12 ">
                   <a href="{{URL::to('addCanton/')}}"> <button class="btn btn-info"><span class="glyphicon glyphicon-plus"> </span><span>  Agregar Nuevo Cantón</span></button></a>
              </div>
            </td> 
        </div>
    </table>
</div>
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <th>Nombre del cantón</th>
                <th>provincia </th>
                <th> Editar</th>
                <th > Borrar </th>
           </thead>
           @foreach ($canton as $c)
           <tr>
               <td>{{$c->nameCanton}}</td>
               <td>{{$c->nameProvince}}</td>
                <td>
                   <a href="{{URL::to('/canton/editar/'.$c->IDCanton)}}">
                       <i class="fa fa-pencil-square-o "></i><span> Editar</span>
                   </a>
               </td>
               <td>
                   <a href="{{URL::to('deleteCanton/'.$c->IDCanton)}}">
                       <i class="fa fa-trash-o"></i><span> Eliminar</span>
                   </a>
               </td>
           </tr>
           @endforeach
        </table>
    </div>
</div>
@endsection
