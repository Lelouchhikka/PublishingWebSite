
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
                        <textarea  class="form-control" id="description" name="description" required>{{ $teacher->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Experience:</label>
                        <textarea type="text" class="form-control" id="experience" name="experience" required>{{ $teacher->experience }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <br>
                <div class="d-flex flex-wrap col-12">
                    @foreach($teacher->photos as $photo)
                        <div class="col-2 d-flex flex-column text-end">
                            <img src="{{ asset('/storage/'.$photo->path) }}" class="img-fluid">

                            <form action="{{ route('photos.destroy', $photo) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
