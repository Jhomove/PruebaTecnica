@extends('layout')

@section('title','Crear pregunta')

@section('content')
    <form class="form-signin" method="POST" action="{{ route('index') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <input name="name" class="form-control" type="text" placeholder="Nombre completo" style="margin-top:20px">
            <input name="document" class="form-control" type="text" placeholder="N° documento" style="margin-top:20px">
            <input name="email" class="form-control" type="email" placeholder="Correo electrónico" style="margin-top:20px">
            <input name="password" class="form-control" type="password" placeholder="Contraseña" style="margin-top:20px">
            <input name="password_confirmation" class="form-control" type="password" placeholder="Contraseña" style="margin-top:20px">
            <button type="submit" class="btn btn-primary" style="margin-top:20px">Registrarse</button>
        </div>
        <a href="{{  route('index') }}">Regresar</a>
    </form>
@endsection