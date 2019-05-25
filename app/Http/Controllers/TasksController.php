<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Groups;
use App\Models\Subject;
use App\Models\Task;
use App\UserTask;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function show()
    {
        $tasks = Task::all()->load('group','taskSent');
        return view('tasks.index', compact("tasks"));
    }

    public function create()
    {
        $subjects = Subject::all();
        $groups = Groups::all();

        return view('tasks.create')->with([
            'subjects' => $subjects,
            'groups' => $groups
        ]);
    }

    public function store(Request $request)
    {
        $subject = Subject::find((int)$request->subject_id);

        $task = new Task();
        $task->question = $request->task;
        $task->group_id = $request->group_id;
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

        return redirect()->back();
    }

    public function sendTask(Task $task)
    {

        $groupUsers = $task->group->users;

        $groupUsers->map(function($user) use ($task) {
            UserTask::insert([
                'user_id' => $user->id,
                'question_id' => $task->id
            ]);
        });

        return redirect()->back();

    }
}
