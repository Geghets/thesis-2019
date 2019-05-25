<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\UserAnswer;
use App\UserTask;
use Illuminate\Http\Request;
use test\Mockery\ReturnTypeObjectTypeHint;

class StudentController extends Controller
{

    public function nofications()
    {

        $userTask = UserTask::where([
            'user_id' => auth()->id(),
            'status' => 0
        ])->get();

        return view('student.notifications')->with([
            'userTasks' => $userTask
        ]);
    }

    public function questions()
    {
        $userTask = UserTask::where([
            'user_id' => auth()->id(),
        ])->with('question')->get();

        return view('student.questions')->with([
            'userTasks' => $userTask
        ]);
    }

    public function questionAnswer(Task $task)
    {
        $task->load('subject','group','answers');

        return view('student.answer-page')->with([
            'task' => $task,
        ]);
    }

    public function answerToQuestion(Request $request)
    {
        $data = $request->all();
        $userId = auth()->id();
        UserAnswer::firstOrNew([
            'answer_id' => $data['answer_id'],
            'student_id' => $userId,
        ]);

        UserTask::where([
            'user_id' => $userId,
            'question_id' => $data['question_id']
        ])->update([
            'status' => 1
        ]);

        return redirect('my-questions');
    }

}
