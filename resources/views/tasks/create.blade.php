@extends('layouts.app')

@section('content')

    <h1>タスクを追加する</h1>
    
    
    <div class="row">
        <div class="col-xs-12">
        <div class="col-offset-2 col-md-8">
        <div class="col-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'ステータス: ') !!}
                    {!! Form::select('status' , array('完了' => '完了','未完了' => '未完了' ,'途中' => '途中') ,'') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'タスク名: ') !!}
                    {!! Form::text('content', null,  ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿') !!}
            
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    </div>
@endsection