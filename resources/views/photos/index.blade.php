@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Photos</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Path</th>
            <th>imageable_id</th>
            <th>imageable_type</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($photos as $photo)
            <tr>
                <td>{{ $photo->id }}</td>
                <td><img src="{{ asset('storage/' . $photo->path) }}" height="50"></td>
                <td>{{$photo->imageable_id}}</td>
                <td>{{$photo->imageable_type}}</td>
                <td>
                    <a href="{{ route('photos.edit', $photo) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('photos.show', $photo->id) }}" class="btn btn-primary">Show </a>
                    <form action="{{ route('photos.destroy', $photo) }}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('photos.create') }}" class="btn btn-primary">Add photo</a>
</div>
@endsection
