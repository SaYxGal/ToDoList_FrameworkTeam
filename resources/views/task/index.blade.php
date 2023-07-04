@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a class="btn btn-primary mb-3" href="{{route('tasks.create')}}">Добавить</a>
    </div>
    @foreach($tasks as $task)
        <div><a href="{{route('tasks.show', $task->id)}}">{{$task->id}}. {{$task->title}}</a></div>
    @endforeach
</div>
@endsection
