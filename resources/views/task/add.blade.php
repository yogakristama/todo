@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">

    <h1>Add Task</h1>

    @if($success)
        <div class="alert alert-success" role="alert"> data succesfully saved.</div>
    @endif
            <form class ="form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="task_name">Task Name</label>
                    <input type="text" class="form-control" id="task_name" name="task_name" placeholder="Task Name">
                </div>
                <div class="form-group" >
                    <label for="task_name">Task Image</label>
                    <input type="file" class="form-control" id="task_image" name="task_image" placeholder="Task Image">
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