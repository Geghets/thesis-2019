@extends('layouts.app')
@section('content')

    <a href="{{route("createTask")}}">Add Task</a>
    <h1>Task list</h1>
    <div class="container">
        <div class="jumbotron">

            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Question</th>
                    <th>Group</th>
                    <th>Created At</th>
                    <th>Send</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $a = 1;
                @endphp
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td>{{$task->question }}</td>
                        <td>{{$task->group->title }}</td>
                        <td>{{$task->created_at }}</td>
                        <th>
                            @if(count($task->taskSent))
                            <span style="color:green;">Done</span>
                            @else
                            <a href="{{ url('/send-task/'.$task->id) }}">Send</a>
                            @endif

                        </th>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
    @endsection
