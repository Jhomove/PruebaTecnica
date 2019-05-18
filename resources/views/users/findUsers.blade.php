@extends('layout')

<!-- @section('title','{$title}-AunarOverflow') -->

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    Busqueda de usuarios
                    {{ Form::open(['route' => 'findUser.index', 'method' => 'GET', 'class' => 'form-find form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('name', null, ['class' => 'form-control name', 'placeholder' => 'Nombre'])}}
                        </div>
                    {{ Form::close() }}
                </h1>
            </div>
            <div class="col-md-8">
                <table class="table table-hover table-striped"> 
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection