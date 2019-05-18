@extends('layout')

@section('title','Crear pregunta')

@section('content')
<div class="text-center">
    <form class="form-signin" method="POST" action="{{ route('index') }}">
    {!! csrf_field() !!}
      <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Registrate o Crea una cuenta es gratis</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <a href="{{  route('index') }}" style="margin:10px"><button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button></a>
      <a href="{{  route('user.create') }}"><button class="btn btn-lg btn-primary btn-block" type="button">Registrarse</button></a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
</div>
@endsection