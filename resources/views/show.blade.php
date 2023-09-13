@extends('layout.header')

@section('title', $task->title)
{{-- no need @endsection as this line doesnt have html --}}

@section('content')
    <div class="container">

        <h1>{{ $task -> title }}</h1>
        <p>{{ $task->description }}</p>

        @if ($task->long_description)
            <p>{{ $task->long_description }}</p>
        @endif

        <p>{{ $task->created_at }}</p>
        <p>{{ $task->updated_at }}</p>
        </div>
@endsection

@extends('layout.footer')
