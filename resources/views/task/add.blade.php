@extends('layout/layoutIndex')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">

    <h1>Add Task</h1>

    @if($success)
        <div class="alert alert-success" role="alert"> data succesfully saved.</div>
    @endif
            <form class ="form" method="POST">
                <div class="form-group">
                    <label for="task_name">Product Name</label>
                    <input type="text" class="form-control" id="task_name" name="task_name" placeholder="Task Name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-small">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-default" href="/task">Back to list</a>
</div>    

@endsection