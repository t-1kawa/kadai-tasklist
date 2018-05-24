@extends('layouts.app')

@section('content')

    <h1>id: {!! $task->id !!}詳細ページ</h1>
    <ul>
        <li>{{ $task->id }}</li>
        <li>{{ $task->status }}</li>
        <li>{{ $task->content }}</li>
        {!! link_to_route('tasks.edit', 'このタスクを編集する', ['id' => $task->id]) !!}
    </ul>
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    

@endsection