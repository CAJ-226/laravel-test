<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller{
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
}
