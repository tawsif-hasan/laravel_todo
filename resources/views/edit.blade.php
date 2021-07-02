@extends('layouts.master');

@section('content')
<br>
<br>
<br>
<h2>Todo List</h2>
@include('errors')

@if(session('success'))
    <li class="alert alert-success">{{session('success')}}</li>
@endif
<div class="row">
    <div class="col-md-12">
        <form class="form-group" action="" method="POST">
            {{ csrf_field() }}
            <label for="taskName">Task Title</label>
            <input class="form-control" value="{{ $task->taskName }}" type="text" id="taskName" name="taskName" placeholder="Task Title"><br>
            <label for="taskDescription">Task Description</label>
            <textarea class="form-control" value="{{ $task->taskDescription }}" rows="6" cols="30" name="taskDescription" id="taskDescription"></textarea><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Add">
        </form>
    </div>
</div>