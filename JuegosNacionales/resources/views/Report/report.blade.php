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
            <h2>Reportes</h2><br><br>
        </div>
    </div>


    <form class="form-horizontal" role="form">
      
        <div class="form-group">
            <label for="" class="col-lg-4 control-label">Seleccione el deporte</label>
            <div class="col-lg-6">
                 <select class="form-control">
                      <option>Seleccione...</option>
                      <option>Atletismo</option>
                      <option>Natación</option>
                  </select>
             </div>
        </div>
        <div class="form-group">
            <label for="" class="col-lg-4 control-label">Tipo de reporte</label>
            <div class="col-lg-6">
                 <select class="form-control">
                      <option>Seleccione...</option>
                      <option>Cantonal</option>
                      <option>Categoría</option>
                  </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-8 col-lg-4">
              <button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Cancelar</span></button>
               <button type="submit" class="btn btn-info"><span class="glyphicon"> </span><span>Exportar PDF</span></button>
            </div>
        </div>
      
        </form>
  
</div>

@endsection