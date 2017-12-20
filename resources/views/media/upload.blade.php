@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

    <h1>Upload File</h1>

    @if($success)
        <div class="alert alert-success" role="alert"> file succesfully uploaded.</div>
    @endif
            <form class ="form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <label>Main Picture</label>
                    <input type="file" name="mainpicture">
                </div>
                <br/>
                <div class="form-group">
                <label>Gallery</label>
                    <input type="file" name="gallery[]" multiple="multiple">
                </div>
                
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-small">Submit</button>
                    <a href="/media" class="btn btn-success btn-small">Back to list</a>
                </div>
                 <!-- untuk keamanan dalam mengacak kode dengan laravel -->
                 {{csrf_field()}}
            </form>
        </div>
    </div>
</div>    

@endsection