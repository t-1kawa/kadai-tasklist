@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    {!! link_to_route('tasks.create', 'タスク追加') !!}
    
    
    @if(count($tasks) > 0 )
        <ul>
            @foreach($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->content, ['id' => $task->id, 'content' => $task->contnt])  !!}</li>
            @endforeach
            
        </ul>
    @endif


@endsection