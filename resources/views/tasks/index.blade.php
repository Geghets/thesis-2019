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
                    <th>Created At</th>
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
                        <td>{{$task->created_at }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
    @endsection