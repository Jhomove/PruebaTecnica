@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                    <form method="POST" action="{{ url('questions') }}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input name="title" class="form-control" type="text" placeholder="Título Pregunta" style="margin-top:20px">
                            <textarea name="text" class="form-control" id="text_new_question" placeholder="Descripción pregunta" style="margin-top:20px"></textarea>
                            <button type="submit" class="btn btn-primary" style="margin-top:20px">Nueva pregunta</button>
                        </div>
                    </form>
                    <a href="{{  route('questions.index') }}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
