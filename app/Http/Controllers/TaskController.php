<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function home() {
        $task=Task::all();
        return view('site.home', ['task'=>$task]);
    }

    public function store(Request $request) {
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
}
