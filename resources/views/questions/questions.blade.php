@extends('layout')


@section('title','AunarOverflow')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Pregunta</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr id= '{{$question->id}}'>
                    <td><a href="{{ route('questions.show',['id' => $question]) }}">{{$question->title}}</a></td>
                    <td>{{$question->text}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection