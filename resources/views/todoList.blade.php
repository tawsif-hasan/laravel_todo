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
            <input class="form-control" value="{{old('taskName')}}" type="text" id="taskName" name="taskName" placeholder="Task Title"><br>
            <label for="taskDescription">Task Description</label>
            <textarea class="form-control" value="{{old('taskDescription')}}" rows="6" cols="30" name="taskDescription" id="taskDescription"></textarea><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Add">
        </form>
    </div>
</div>

<div class="container row">
@foreach($todos as $todo)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $todo->taskName }}</h5>
      <p class="card-text">{{ $todo->taskDescription }}</p>
      @if($todo->status != 'complete')
        <a href="{{route('editTodo'),[$todo->$id]}}" class="btn btn-primary">Edit</a>
        <a href="{{route('todo.changeStatus',[$todo->id,'complete'])}}" class="btn btn-warning">Mark as complete</a>
        <a href="#" class="btn btn-danger">Delete</a>
      
      @else
        <a href="" class="btn btn-success disabled">Completed</a>    
      @endif
      
    </div>
  </div>
@endforeach
</div>
@endsection