@extends('layouts.app')

@section('content')
    <div class="justify-content-center d-flex flex-column">
        <div class="container align-items-center">
            <div class="fw-bold">{{$task->title}}</div>
            <div>{{$task->description}}</div>
            <a href="{{route('tasks.index')}}">Назад</a>
        </div>
    </div>
@endsection
