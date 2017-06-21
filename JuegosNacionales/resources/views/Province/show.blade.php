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
Vista que se encarga de crear una tabla con todo las provincias presentes en la base de datos-->

@extends('adminMasterPage')
@section('adminContent')

<div class="container-fluid">
    <div class="container">
        <div class="col-md-12 text-left">
            
            <h3>Provincias </h3>
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
                        <input id="filtrar" placeholder='Digite el nombre de la provincia' type="text" class="form-control" name="filter" value="{{ old('filter') }}" required autofocus>
                        @if ($errors->has('filter'))
                            <span class="help-block">
                                <strong>{{$errors->first('filter')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 ">
                            <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"> </span><span>  Buscar</span></button>
                        </div>
                    </div>
                </form>
                             
            </td>
            <td align="center">
                <div class="col-md-12 ">
                   <a href="{{URL::to('addProvince/')}}"> <button class="btn btn-info"><span class="glyphicon glyphicon-plus"> </span><span>  Agregar Nueva Provincia</span></button></a>
              </div>
            </td> 
        </div>
    </table>
</div>
<div class="col-md-12">
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <th>Provincia</th>
                <th>Editar</th>
                <th>Borrar</th>
            </thead>
            @foreach($province as $p)
            <tr>
                <td>
                    {{$p->nameProvince}}
                </td>
                <td>
                   <a href="{{URL::to('/canton/editar/'.$p->IDCanton)}}">
                       <i class="fa fa-pencil-square-o "></i><span> Editar</span>
                   </a>
               </td>
               <td>
                   <a href="{{URL::to('/canton/eliminar/'.$p->IDCanton)}}">
                       <i class="fa fa-trash-o"></i><span> Eliminar</span>
                   </a>
               </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
