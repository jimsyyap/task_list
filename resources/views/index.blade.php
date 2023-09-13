@extends('layout.outline')
@section('title', $task->title)

@section('content')
    <div class="container">
        <h1>Task List</h1>
        <div>
            @forelse ($tasks as $task)
                <div>
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
                </div>
        @empty
            <div>you have no tasks</div>
        @endforelse
        </div>
    </div>
@endsection
