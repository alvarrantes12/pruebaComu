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
            <h2>Agregar Cantón</h2><br><br>
        </div>
           
            
        
  </div>
    <form class="form-horizontal" role="form" method='POST' action="{{ url('newCanton/') }}">
      {{ csrf_field() }} 

    <label for="" class="col-lg-4 control-label">Nombre del cantón</label>
    
    <div class="col-lg-6">
      <input type="text" class="form-control" id="canton" name="canton" placeholder="Ej: Grecia" value= "{{old ('cantonName')}}">
    </div><br><br>
    <div>
    <label for="" class="col-lg-4 control-label">Provincia</label>
        <div class="btn-group col-lg-6">
            <select class="form-control" id="province" name="province">
            <option value="0" selected>Seleccione una provincia...</option>
             @foreach ($province as $p)
              <option value ='{{$p->IDProvince}}'>{{$p->nameProvince}}</option>
            @endforeach
        </select>
</div>
</div>
  <br><br>
                        
                        <div class="col-lg-offset-8 col-lg-4">
      <a href="{{URL::to('canton/')}}"><button type="btn btn-info" class="btn btn-info"><span class="glyphicon"> </span><span>Cancelar</span></button></a>
     <button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Aceptar</span></button>
    </div>
</form>



  </div>


@endsection