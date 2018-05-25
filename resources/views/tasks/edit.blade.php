@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-xs-12">
        <div class="col-offset-2 col-md-8">
        <div class="col-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス: ') !!}
                    {!! Form::select('status' , array('完了' => '完了','未完了' => '未完了' ,'途中' => '途中') ,'') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'タスク: ') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('更新') !!}
        
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    </div>
@endsection