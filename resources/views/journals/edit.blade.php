
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Student</h1>
                <div class="ml-auto">
                    <a href="{{ route('journals.index') }}" class="btn btn-secondary">Back</a>
                </div>
                <form action="{{ route('journals.update', $journal) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $journal->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $journal->description }}" required>
                    </div>
                    <div class="form-group">
                        <label for="photos">Add photos:</label>
                        <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <br>
                <div class="d-flex flex-wrap col-12">
                    @foreach($journal->photos as $photo)
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
