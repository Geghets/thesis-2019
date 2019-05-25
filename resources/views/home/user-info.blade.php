@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
                            {{ $userAnswers->question->question }}
                        </td>
                        <td>
                            @if($userAnswers->result)
                                <i class="fas fa-check"></i>
                            @else
                                <i class="fas fa-minus"></i>
                            @endif

                        <td>{{$userAnswers->created_at }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection