@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create Teacher</h1>
                <form action="{{ route('teachers.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <textarea  class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Experience:</label>
                        <textarea type="text" class="form-control" id="experience" name="experience" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photos">Photos:</label>
                        <input type="file" class="form-control" id="photos" name="photos[]" multiple required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
