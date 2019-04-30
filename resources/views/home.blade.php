@extends('layouts.app')

@section('after-style')
<style>
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .list-item {               
        border: 3px solid green;
        color: blue;
        margin: auto 10px;
        min-height: 300px;
    }
    
    h4 {
        text-align: center;
    }

    .list-item p {
        padding: 5px;
        border: 1px solid #133d55;
        margin: 10px 5px;
    }

    .add-task {
        margin-top: 20px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <input type="button" value="Add Task" class="add-task" onclick="addTask()"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <h4>Todo</h4>
                            <div class="list-item todo connectedSortable">                      
                                @if(count($todoTasks))
                                @foreach($todoTasks as $todoTask)
                                <p data-id="{{ $todoTask->id}}" data-type="{{ $todoTask->type }}">{{ $todoTask->title}}</p>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h4>In progress</h4>
                            <div class="list-item inprogress connectedSortable">                       
                                @if(count($inProgressTasks))
                                @foreach($inProgressTasks as $inProgressTask)
                                <p data-id="{{ $inProgressTask->id}}" data-type="{{ $inProgressTask->type }}">{{ $inProgressTask->title}}</p>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h4>Done</h4>
                            <div class="list-item done connectedSortable">                       
                                @if(count($doneTasks))
                                @foreach($doneTasks as $doneTask)
                                <p data-id="{{ $doneTask->id}}" data-type="{{ $doneTask->type }}">{{ $doneTask->title}}</p>
                                @endforeach
                                @endif                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="create-task" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">               
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="create-bot-title">{{ __(' Create New Task.') }}</h4>
                </div>
                <div class="modal-body">                   
                    <div class="form-group">
                        <div class="form-group">
                            <p>
                                <label for="title">Title: </label>
                                <input type="text" name="title" id="title"/>
                            </p>                          
                        </div>                       
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">{{__('Cancel')}}</button>
                    <button class="btn btn-warning btn-sm save-btn" type="button" onClick="saveTask()">{{__('Create')}}</button>
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection
