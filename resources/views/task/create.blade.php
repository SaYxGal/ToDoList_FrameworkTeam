@extends('layouts.app')

@section('content')
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input
                value="{{old('title')}}"
                type="text" name="title" class="form-control" id="title"/>
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Содержание</label>
            <textarea
                name="description" class="form-control" id="description">{{old('description')}}</textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
