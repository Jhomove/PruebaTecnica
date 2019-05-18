@extends('layout')

@section('title','{$title}-AunarOverflow')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><div>{{$question->title}}</div><sub>{{$question->name}}</sub></h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$question->text}}</h6>
            <ul class="list-group list-group-flush">
                @foreach ($answers as $answer)
                    <li class="list-group-item"><div>{{$answer->text}}</div> <sub>{{$answer->name}}</sub> </li>
                @endforeach
                @if (Auth::id())
                <li class="list-group-item">
                    <form method="POST" action="{{ route('questions.show',['id' => $question]) }}" style="width:100%;">
                    {!! csrf_field() !!}
                        <input name="text" type="text" class="form-control" placeholder="Nueva respuesta" aria-describedby="button-addon4">
                        <button class="btn btn-primary" type="submit" style="margin-top:10px">Postear</button>
                    </form>
                </li>
                @endif
                <a href="{{  route('questions.index') }}">Regresar</a>
            </ul>
        </div>
    </div>
@endsection