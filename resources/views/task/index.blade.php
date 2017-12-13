@extends('layout/layoutIndex')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="well">
        <a href="/task/add" class="btn btn-small btn-success"> Add New </a>
        </div>

            <table class ="table table-bordered">
            <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            </tr>
            </thead>
            @foreach ($task as $tasks)
            <tr>
            <td>{{$tasks->id}}</td>
            <td>{{$tasks->name}}</td>
            
            </tr>
            @endforeach

        </table>
        </div>
    </div>
</div>    

@endsection