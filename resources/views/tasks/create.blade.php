@extends('layouts.app')

@section('content')
    <h1>Create task</h1>
    <form action="{{route('storeTask')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="subject_id">Subject</label>
        <select name="subject_id" id="subject_id" class="form-control">
            <option>Select subject</option>
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="task">Task</label>
        <input type="text" class="form-control" name="task" required>

        <label for="">Answers</label>

        <div class="form-group">
            <div class="col-md-1">
                <label for="answer_0">Is true</label>
                <input
                        type="radio"
                        name="answers[0][is_true]"
                        class="pull-left form-check-input"
                        id="answer_0">
            </div>
            <div class="col-md-11">
                <label for="answer_0_title pull-left">Answer</label>
                <input
                        type="text"
                        name="answers[0][title]"
                        class="pull-left form-control"
                        id="answer_0_title">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-1">
                <label for="answer_1">Is true</label>
                <input
                        type="radio"
                        name="answers[1][is_true]"
                        class="pull-left form-check-input"
                        id="answer_1">
            </div>
            <div class="col-md-11">
                <label for="answer_0_title pull-left">Answer</label>
                <input
                        type="text"
                        name="answers[1][title]"
                        class="pull-left form-control"
                        id="answer_1_title">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-1">
                <label for="answer_2">Is true</label>
                <input
                        type="radio"
                        name="answers[2][is_true]"
                        class="pull-left form-check-input"
                        id="answer_2">
            </div>
            <div class="col-md-11">
                <label for="answer_0_title pull-left">Answer</label>
                <input
                        type="text"
                        name="answers[2][title]"
                        class="pull-left form-control"
                        id="answer_2_title">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-1">
                <label for="answer_3">Is true</label>
                <input
                        type="radio"
                        name="answers[3][is_true]"
                        class="pull-left form-check-input"
                        id="answer_3">
            </div>
            <div class="col-md-11">
                <label for="answer_0_title pull-left">Answer</label>
                <input
                        type="text"
                       name="answers[3][title]"
                        class="pull-left form-control"
                        id="answer_3_title">
            </div>
            <div class="clearfix"></div>
        </div>
        <button type="submit" class="btn btn-default btn-lg ">
            Save
        </button>
    </div>
    </form>
@endsection()