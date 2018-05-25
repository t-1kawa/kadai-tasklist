@extends('layouts.app')

@section('content')

    
    
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            <h1>タスクを追加する</h1>
            
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
@endsection