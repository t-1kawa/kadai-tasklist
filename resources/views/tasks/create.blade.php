@extends('layouts.app')

@section('content')

    <h1>タスクを追加する</h1>
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
            {!! Form::label('status', 'ステータス: ') !!}
            {!! Form::text('status') !!}
        
            {!! Form::label('content', 'タスク名: ') !!}
            {!! Form::text('content') !!}
            
            {!! Form::submit('投稿') !!}
        {!! Form::close() !!}

@endsection