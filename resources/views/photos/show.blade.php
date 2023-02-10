@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center mb-3">
        <h1 class="h3 mb-0">Photo Details</h1>
        <div class="ml-auto">
            <a href="{{ route('photos.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <td>{{ $photo->id }}</td>
        </tr>
        <tr>
            <th>Path</th>
            <td><img src="{{ asset('/storage/'.$photo->path) }}" class="card-img-top"
                     style="height: 150px; width: 150px;display: block;" alt="{{ $photo->path }}"></td>
        </tr>
        <tr>
            <th>Imageable ID</th>
            <td>{{ $photo->imageable_id }}</td>
        </tr>
        <tr>
            <th>Imageable Type</th>
            <td>{{ $photo->imageable_type }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $photo->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $photo->updated_at }}</td>
        </tr>
    </table>
@endsection
