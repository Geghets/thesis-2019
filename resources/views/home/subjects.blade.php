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
                        <th>Id</th>
                        <th>Title</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{$subject->title }}</td>
                        <td>{{$subject->created_at }}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
@endsection