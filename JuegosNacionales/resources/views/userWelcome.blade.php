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

Clase: userWelcome
Vista que se encarga de hacer la bienvenida para los usuarios del sistema de inscripción a los juegos nacionales-->
@extends('masterPage')

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="col-md-7 col-md-offset-2 text-center">
            <h1>¡Bienvenid@!</h1>
            <h2>Sistema de Inscripción a los Juegos Nacionales</h2>
        </div>
    </div>
</div>

   <div class="col-md-4 col-md-offset-4 text-center">
       <a href="{{URL::to('newCo/')}}">
           <button type="button" class="btn btn-danger btn-lg">Inscribir</button>
       </a>
       <a href="{{URL::to('report/')}}">
           <button type="button" class="btn btn-danger btn-lg">Reportes</button>
       </a>
    </div>


@endsection
