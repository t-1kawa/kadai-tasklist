@extends('layouts.app')

@section('content')

    <h1>id: {!! $task->id !!}詳細ページ</h1>
    <ul>
        <li>id: {{ $task->id }}</li>
        <li>タスク: {{ $task->content }}</li>
        {!! link_to_route('tasks.edit', 'このタスクを編集する', ['id' => $task->id]) !!}
    
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除') !!}
        {!! Form::close() !!}
        
    </ul>
    

@endsection