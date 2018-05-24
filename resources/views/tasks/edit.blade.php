@extends('layouts.app')

@section('content')

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        {!! Form::label('status', 'ステータス: ') !!}
        {!! Form::text('status') !!}
    
    
        {!! Form::label('content', 'タスク: ') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection