<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Subject;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function show()
    {
        $tasks = Task::all();
/*        dd($tasks);*/
        return view('tasks.index', compact("tasks"));
    }

    public function create()
    {
        $subjects = Subject::all();

        return view('tasks.create')->with([
            'subjects' => $subjects
        ]);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $subject = Subject::find('id', $request->subject_id);
        $task = new Task();
        $task->question = $request->task;
        $task->subject()->associate($subject);
        $task->save();

        foreach ($request->answers as $answer) {
            $answerObj = new Answer();
            $answerObj->answers = $answer['title'];
            if (isset($answer['is_true']) && $answer['is_true'] === 'on') {
                $answerObj->result = 1;
            }
            $answerObj->question()->associate($task);
            $answerObj->save();
        }


        dd($request->all());
    }
}