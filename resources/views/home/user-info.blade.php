@extends('layouts.app')
@section('content')
    <style>
        .paginate_button{
            padding: 10px;
            color: #333 !important;
            border: 1px solid #979797;
            background-color: white;
        }
    </style>        <div class="container">
        <div class="jumbotron">
            <table id="example" class="display" style="width:100%">
                <h1>{{$user->name}}</h1>


                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Result</th>
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                @php

                $count = 0;

                @endphp
                @foreach($user->userAnswers as $userAnswers)
                    <tr>
                        <td>{{ ++$count }}</td>
                        <td>
                            {{ $userAnswers->answers }}
                        </td>
                        <td>{{$userAnswers->result }}</td>
                        <td>{{$userAnswers->created_at }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection