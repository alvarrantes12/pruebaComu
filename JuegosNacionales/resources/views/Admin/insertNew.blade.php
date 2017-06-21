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
Vista que se encarga de crear un formulario con el fin de seleccionar el deporte, la categoría y la rama
específicos con el fin de recolectar parte de los datos de la inscripción de los participantes en el sistema-->
@extends('masterPage')
@section('content')
<div class="form-group">
   <div class="container-fluid">
      <div class="container">
         <div class="col-md-7 col-md-offset-2 text-center">
            <h2>Inscripcion de participantes</h2>
         </div>
      </div>
   </div>
   <section>
      <div class="row">
         <div class="col-md-6">
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <h3 class="panel-title">Consulta por numero de identidad</h3>
               </div>
               <div class="panel-body">
                  <div class="input-group">
                     <span class="input-group-btn">
                        <div class="dropdown">
                           <button class="btn btn-default dropdown" type="button" id="menu1" data-toggle="dropdown">Seleccione<span class="caret"></span></button>
                           <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cedula</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pasaporte</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">o1</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">o2</a></li>
                           </ul>
                        </div>
                     </span>
                     <input type="text" class="form-control" placeholder="Digite el numero de identificacion">
                  </div>
                  </br>
                  <div class="col-md-6 col-md-offset-4">
                     <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-check"> </span><span>Verificar</span></button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <h3 class="panel-title">Datos personales</h3>
               </div>
               <div class="panel-body">
                  <form class="form-horizontal" role="form">
                  <div  >
                     <label for="" class="col-lg-4 control-label">Nombre</label>
                     <div class="col-lg-6">
                        <input type="text" class="form-control" id="name" disabled
                           placeholder="">
                     </div>
                  </div>
                  <div  >
                     <label for="" class="col-lg-4 control-label">Primer Apellido</label>
                     <div class="col-lg-6">
                        <input type="text" class="form-control" id="apellido1" disabled
                           placeholder="">
                     </div>
                  </div>
                  <div  >
                     <label for="" class="col-lg-4 control-label">Segundo Apellido</label>
                     <div class="col-lg-6">
                        <input type="text" class="form-control" id="apellido2" disabled
                           placeholder="">
                     </div>
                  </div>
                  <div  >
                     <label for="" class="col-lg-4 control-label">Fecha de nacimiento</label>
                     <div class="col-lg-6">
                        <div class='input-group date' id='startDate'>
                           <input placeholder = "Seleccione una fecha" name = "startDate" type='text' class="form-control" id='datepicker' autocomplete='off' onchange="changeEventHandler(event);"/>
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div  >
                     <label for="" class="col-lg-4 control-label">Correo electronico</label>
                     <div class="col-lg-6">
                        <input type="email" class="form-control" id="email"
                           placeholder="cccccc@xxxxxx.vvv">
                     </div>
                  </div>
                  <div  >
                     <label for="" class="col-lg-4 control-label">Provincia</label>
                     <div class="col-lg-6">
                        <select class="form-control">
                           <option>A</option>
                           <option>B</option>
                           <option>C</option>
                           <option>D</option>
                           <option>E</option>
                        </select>
                     </div>
                  </div>
                  <div  >
                     <label for="" class="col-lg-4 control-label">Canton</label>
                     <div class="col-lg-6">
                        <select class="form-control">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </div>
                  </div>
                  <div  >
                     <label for="" class="col-lg-4 control-label">Direccion</label>
                     <div class="col-lg-6">
                        <textarea class="form-control" rows="5" id="addres"></textarea>
                     </div>
                  </div>
                  <div  >
                     <div class="col-lg-offset-2 col-lg-10">
                        <a href="{{URL::to('newDoc/')}}"> 
                        <button class="btn btn-info"><span class="glyphicon"> </span><span>Continuar  &rarr;</span></button>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script type="text/javascript">
      $(document).ready(function($)  {
          	$(function () {
                  $('#datepicker').datetimepicker({locale: 'es', format: 'YYYY-MM-DD'});
                  $('#datepicker2').datetimepicker({locale: 'es', format: 'YYYY-MM-DD'});
              });
      	});
   </script>
</div>
@endsection