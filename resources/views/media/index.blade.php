@extends('layout/layoutIndex')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
                 <a href="/media/upload" class="btn btn-small btn-success"> Upload New </a>
            </div>

                <table class ="table table-bordered">
        
                <tr>
                <th>Filename</th>
                <th>Type</th>
                <th>Download</th>
                </tr>
                
                @foreach ($contents as $file)
                <tr>
                <td>{{ $file['basename']}}</td>
                <td>{{ $file['type'] }}</td>
                <td><a href="/storage/{{ $file['basename'] }}"> {{ $file['basename']}} </a></td>
                </tr>
                @endforeach

                </table>
        </div>
    </div>
</div>

@endsection