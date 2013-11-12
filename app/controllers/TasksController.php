<?php 

class TasksController extends BaseController 
{

    public function index() 
    {
        $tasks = Task::all();

        // fetch all tasks
        return View::make('tasks.index', compact('tasks'));


        // load a view to display them

    }

    public function show($id) {

        // fetch a single task
        $task = Task::findOrFail($id);

        return View::make('tasks.show', array('task' => $task));
    }
}

 ?>