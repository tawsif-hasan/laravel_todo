<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function index(){

        $todos = Todo::all();
        return view('todoList', compact('todos'));
    }

    public function addTask(){
        //Validation
        $this->validate(request(),[
            'taskName' => 'required|max:20'
        ]);

        Todo::create([
            'taskName' => request('taskName'),
            'taskDescription' => request('taskDescription')
        ]);
        return redirect()->back()->with('success', 'Task Created');
    }

    //Change Status of Task
    public function changeStatus($id,$status){
        if($id != null && $status != null){
            $todo = Todo::find($id); //Select * from todos where id=5

            $todo->update([
                'status'=>$status //$status=complete obtained from todoList view
            ]);
            return redirect()->back();
        }
        else{
            return 'Something is wrong';
        }
    }

    // Show Edit
    public function editTodo($id){
        $task = Todo::find($id);
        return view('edit', compact('edit'));
    }
}
