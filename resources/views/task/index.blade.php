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
            <th>Action</th>
            <th>Images</th>
            </tr>
            </thead>
            @foreach ($task as $tasks)
            <tr>
            <td>{{$tasks->id}}</td>
            <td>{{$tasks->name}}</td>
            <td>
            <a href="/task/edit/{{$tasks->id}}" class ="btn btn-default btn-xs"> Edit </a>
            <form method="POST" style="display:inline" action="/task/delete">
                <input type="hidden" name= "task_id" value="{{ $tasks->id }}" />
                <button type="submit" class="btn btn-danger">Delete </button>
            </form>
            </td>
            
            <td><a href="/storage/{{ $tasks->image }}"> {{$tasks->image}} </a></td>
            <!-- jangan lupa link kan php artisan storage:link -->
            </tr>
            @endforeach

        </table>
        </div>
    </div>
</div>    

@endsection