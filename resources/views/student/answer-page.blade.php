@extends('student.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <form action="{{ route('answer-to-question') }}" method="post">
                                @csrf

                                <input type="hidden" name="question_id" value="{{$task->id}}">
                                <p>  Subject: {{ $task->subject->title }} </p>
                                <p>  Group: {{ $task->group->title }} </p>

                                <h2> {{ $task->question }}</h2>

                                <select class="form-control" name="answer_id" id="answer_id">
                                    
                                    @foreach($task->answers as $answer)
                                        <option value="{{$answer->id}}">{{$answer->answers}}</option>
                                    @endforeach
                                    
                                </select>

                                <br>

                                <button class="btn btn-success">Answer</button>
                                
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
