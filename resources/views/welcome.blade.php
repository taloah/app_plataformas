@extends('layouts.app')

@section('content')
<div class="container p-5 my-3" style="border:2px solid #ccc;">
    <div class="row">
        <div class="col-md-5">
            <img src="/profile/1599224997.jpg" class="img-fluid" width="450px" height="450px"style="border:2px solid #ccc;">
        </div>
        <div align="center" class="col-md-7 p-5 my-3">
            <h2>Web Application de citas médicas</h2>
            <p>Bienvenidos a nuestra app web de agenda de citas.</p>
            <p><b>Grupo 2 conformado por: Jorge Sánchez, Leslye Torres, Víctor Desiderio.</b></p>
        <!--div align="center" class="col md-8"-->
                <!--a href="{{url('/register')}}"><button class="btn btn-outline-primary">Registrarse como paciente</button></a>
                <!--a href="{{url('/login')}}"><!--button class="btn btn-outline-danger"--><!--/button></a-->
            <!--/div-->
        </div>
    </div>
    <hr>

  <!--date picker component-->
  <find-doctor></find-doctor>
</div>
@endsection
