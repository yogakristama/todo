@extends('layout/app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">

    <h1>Edit Task</h1>

    @if($success)
        <div class="alert alert-success" role="alert"> data succesfully saved.</div>
    @endif

            <form class ="form" method="POST">
                <div class="form-group">
                    <label for="task_name">Task Name</label>
                    <input type="text" class="form-control" id="task_name" name="task_name" placeholder="Task Name" value= {{$task->name}}>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-small">Submit</button>
                </div>
                 <!-- untuk keamanan dalam mengacak kode dengan laravel -->
                 {{csrf_field()}}
            </form>
        </div>
    </div>
    <a class="btn btn-default" href="/task">Back to list</a>
</div>    

@endsection