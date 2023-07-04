@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <a class="btn btn-primary mb-3" href="{{route('tasks.create')}}">Добавить</a>
    </div>
    @foreach($tasks as $task)
        <div class="d-flex justify-content-between m-2 p-2  border border-2 align-items-center">
            <a href="{{route('tasks.show', $task->id)}}">{{$task->title}}</a>
            <form action="{{route('tasks.destroy', $task->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Удалить"/>
            </form>
        </div>
    @endforeach
</div>
@endsection
