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
                <h1>{{$group->title}}</h1>


                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $count = 0;
                @endphp
                @foreach($users as $user)
                    <tr>
                        <td>{{ ++$count }}</td>
                        <td>
                            <a href="{{ url('users/'. $user->id) }}">
                                {{$user->name }}
                            </a>
                        </td>
                        <td>{{$user->surname }}</td>
                        <td>{{$user->email }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
