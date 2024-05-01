<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task; // means we are using the Task model , we are importing the Task model from the models folder


class TasksController extends Controller
{  
    
    
    
    public function createTaskForm()
    {
        return view('Tasks.create');
    }
    

    public function createTask(Request $request)
    {
        $task = new Task;
        $task->task_name = $request->taskName;
        $task->task_description = $request->taskDescription;
        $task->save();
        return view('Tasks.create',['success' => 'Task created successfully']);
    }
  
    public function viewAllTasks()
    {
        $tasks = Task::all(); 
        return view('Tasks.view', ['tasks' => $tasks]);
    }

    public function showOneTask($id){
        $task = Task::find($id);
        if($task == null)
        {
            return response(['message' => 'Task not found'], 404);
        }
        return view('Tasks.viewOne' , ['task' => $task]);
    }

    public function showEditTaskForm($id)
    {
        $task = Task::find($id);
        if($task == null)
        {
            return response(['message' => 'Task not found'], 404);
        }
        return view('Tasks.edit' , ['task' => $task]);
    }
   
     
    public function deleteTask($id)
    {
        $task = Task::find($id);
        if($task == null)
        {
            return response(['message' => 'Task not found'], 404);
        }
        $task->delete();
        return redirect('/tasks/view');
    }

    public function editTask(Request $request, $id)
    {
        $task = Task::find($id);
    
        if ($task == null) {
            return response()->json(['message' => 'Task not found'], 404);
        }
    
        $task->task_name = $request->taskN;
        $task->task_description = $request->taskD;
        $task->save();
    
        return view('Tasks.view' , ['tasks' => Task::all()]);
    }
    

   
   
}