@extends('layouts.app')
@section('title','The list of tasks')
@section('content')
            @forelse($task as $task)
                <div>
                    <a href="{{ route('tasks.show', ['task' => $task->id ]) }}">{{ $task->title }}</a>
                </div>
            @empty
                <div>There are no tasks!</div>
            @endforelse
@endsection
