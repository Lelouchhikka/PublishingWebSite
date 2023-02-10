
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Student</h1>
                <div class="ml-auto">
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
                </div>
                <form action="{{ route('teachers.update', $teacher) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $teacher->description }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Experience:</label>
                        <input type="text" class="form-control" id="experience" name="experience" value="{{ $teacher->experience }}" required>
                    </div>
                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
