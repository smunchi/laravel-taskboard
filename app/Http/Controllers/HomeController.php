<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the taskboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoTasks = Task::where('type', '1')->orderBy('position', 'asc')->get(); 
        $inProgressTasks = Task::where('type', '2')->orderBy('position', 'asc')->get(); 
        $doneTasks = Task::where('type', '3')->orderBy('position', 'asc')->get(); 
        return view('home', array('todoTasks'=>$todoTasks, 'inProgressTasks'=>$inProgressTasks,'doneTasks'=>$doneTasks,));
    }
    
    public function createTask(Request $request)
     {
        $title = $request->title;
        
        $task = new Task();
        $task->title = $title;       
        $task->type = '1';
        if(Task::max('position')) {
            $position = Task::max('position');
        } else {
            $position = 0;
        }
        $task->position = $position + 1;
        $task->save();
        
        echo json_encode(array('success'=>true));
     }
     
     public function updateTaskType(Request $request)
     {
         $task = Task::find($request->id);
         $task->type = $request->type;
         $task->save();
         
         echo json_encode(array('success'=>true));
     }
     
     public function updateSortOrder(Request $request)
     {
         foreach($request->data as $position => $elementId) {
              $task = Task::find($elementId);
              $task->position = $position+1;
              $task->save();
         }
                  
         echo json_encode(array('success'=>true));
     }
}
