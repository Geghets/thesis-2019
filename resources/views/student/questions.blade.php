@extends('student.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="container">
                <div class="jumbotron">

                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Group</th>
                            <th>Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $a = 1;
                        @endphp
                        @foreach($userTasks as $task)
                            <tr>
                                <td>{{ $a++ }}</td>
                                <td><a href="{{url('/my-questions/'.$task->question->id) }}">{{$task->question->question }}</a></td>
                                <td>{{$task->question->group->title }}</td>
                                <td>{{$task->created_at }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection
