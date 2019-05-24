@extends('layouts.app')
@section('content')

    <style>
        .paginate_button{
            padding: 10px;
            color: #333 !important;
            border: 1px solid #979797;
            background-color: white;
        }
    </style>

    <div class="container">
        <div class="jumbotron">
            <table id="example" class="display" style="width:100%">



                <thead>
                <tr>
                    <th>Number</th>
                    <th>Title</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $a = 1;
                @endphp
                @foreach($groups as $group)
                    <tr>
                        <td>{{ $a++ }}</td>
                        <td><a href="{{ url('/workspace/'.$group->id) }}">{{$group->title }}</a></td>
                        <td>{{ $group->created_at }}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection