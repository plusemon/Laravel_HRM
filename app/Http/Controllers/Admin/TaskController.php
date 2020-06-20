<?php

namespace App\Http\Controllers\Admin;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = $request->all();

        // check if request has file attachment
        if ($request->has('attachment')) {
            $file = $request->file('attachment');
            $url = Storage::put('task', $file);
            $task['attachment'] = $url;
        }

        $store = Task::create($task);

        if ($store) {
            $alert = [
                'alert-type' => 'success',
                'message' => 'Task send successfully'
            ];
        }else{
            $alert = [
                'alert-type' => 'error',
                'message' => 'Someting went wrong'
            ];
        }
        return redirect('admin/task')->with($alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        // return $request;
        $task=Task::find($request->id);
        $update = $task->update($request->all());

        if ($update) {
            $alert = [
                'alert-type' => 'success',
                'message' => 'Task Completed successfully'
            ];
        }else{
            $alert = [
                'alert-type' => 'error',
                'message' => 'Someting went wrong'
            ];
        }
        return back()->with($alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // return $request;
        $task = Task::findOrFail($request->task_id);
        $task->delete();
            $alert = [
                'alert-type' => 'success',
                'message' => 'User updated successfully'
            ];
        return back()->with($alert);
    }
}
