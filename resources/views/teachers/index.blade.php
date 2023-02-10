@extends('layouts.app')

@section('content')
    <div class="container mt-5">
                        <p>
                            <a href="{{ route('teachers.create') }}" class="btn btn-success">Add Teacher</a>
                        </p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Photos</th>
                                <th>Experience</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->description }}</td>
                                    <td>{{ $teacher->experience }}</td>
                                    <td>
                                        @foreach ($teacher->photos as $photo)
                                            <img src="{{ asset('/storage/'.$photo->path) }}" alt="{{ $teacher->name }}" width="50">
                                        @endforeach
                                    </td>
                                    <td >
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-primary">Show</a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
    </div>
@endsection
