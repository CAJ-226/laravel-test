<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    public function show($task_id){
      $task = \App\Models\Task::find($task_id);
      if($task->completed){
        $message = "task completed";
      } else {
        $message = "task ongoing";
      }
      return view('show',[
        "task_id"=>$task->id,
        "title" => $task->title,
        "description" => $task->description,
        "date"=>$task->created_at->format('d F Y'),
        "message"=>$message
      ]);
    }

    public function cancel($task_id){
      $task = \App\Models\Task::find($task_id);
      if ($task){
        $task->delete();
        $message = 'The task '.$task_id.' has been deleted.';
      } else {
        $message = 'The task '.$task_id.' doesn\'t exist.';
      }
      return view('cancel',[
        'message' => $message
      ]);
    }

    public function indexAlphabet(){
      $tasks = \App\Models\Task::orderBy('title','asc')->get();
      return view('index-alphabet', [
          'tasks' => $tasks
      ]);
    }
}
