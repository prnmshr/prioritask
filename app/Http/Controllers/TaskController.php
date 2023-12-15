<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function home()
    {
        $task = Task::all();
        return view('site.home', ['task' => $task]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'keyword' => 'required',
            'detail' => 'required',
            'date' => 'required',
            'quadrant' => 'required'
        ]);

        $task = new Task();
        $task->keyword = $request->keyword;
        $task->detail = $request->detail;
        $task->date = $request->date;
        $task->quadrant = $request->quadrant;
        $task->save();

        return redirect()->back()->with('success','Tugas berhasil anda tambahkan!');
    }

    public function quadone()
    {
        $task = Task::all();
        return view('site.quadone', ['task' => $task]);
    }

    public function quadtwo()
    {
        $task = Task::all();
        return view('site.quadtwo', ['task' => $task]);
    }

    public function quadthree()
    {
        $task = Task::all();
        return view('site.quadthree', ['task' => $task]);
    }

    public function quadfour()
    {
        $task = Task::all();
        return view('site.quadfour', ['task' => $task]);
    }


    public function updateStatus(Request $request, $taskId)
    {
        $task = Task::find($taskId);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        // Check if the task is already completed
        if ($task->status_id === 1) {
            return response()->json(['message' => 'Task already completed'], 400);
        }

        // Mark the task as completed
        $task->status_id = 1; // Assuming 1 is the ID for 'completed' status
        $task->save();

        return response()->json(['message' => 'Task marked as completed'], 200);
    }

    public function completeTask($taskId)
    {
        $task = Task::find($taskId);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        // Determine the new status_id based on the current status
        $newStatusId = ($task->status_id === 1) ? 2 : 1;

        // Mark the task with the new status_id
        $task->status_id = $newStatusId;
        $task->save();

        return response()->json(['message' => 'Task status updated'], 200);
    }

    public function achieved()
    {
        $task = Task::all();
        return view('site.achieved', ['task' => $task]);
    }

    public function unachieved()
    {
        $task = Task::all();
        return view('site.unachieved', ['task' => $task]);
    }

    public function insights()
    {
        $task = Task::all();
        return view('site.insights', ['task' => $task]);
    }

    public function statistics()
    {
        $task = Task::all();
        return view('site.statistics', ['task' => $task]);
    }
}
