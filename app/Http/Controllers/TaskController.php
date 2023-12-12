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

        return redirect()->route('home');
    }

    public function quadone()
    {
        $task = Task::all();
        return view('site.quadone', ['task' => $task]);

        return redirect()->route('quadone');
    }

    public function quadtwo()
    {
        $task = Task::all();
        return view('site.quadtwo', ['task' => $task]);

        return redirect()->route('quadtwo');
    }

    public function quadthree()
    {
        $task = Task::all();
        return view('site.quadthree', ['task' => $task]);

        return redirect()->route('quadthree');
    }

    public function quadfour()
    {
        $task = Task::all();
        return view('site.quadfour', ['task' => $task]);

        return redirect()->route('quadfour');
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
}
