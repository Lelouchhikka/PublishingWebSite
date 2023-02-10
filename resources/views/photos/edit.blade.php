@extends('layouts.app')
@section('content')
    <div class="ml-auto">
        <a href="{{ route('photos.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <h2 style="margin-top: 5rem;" class="text-center">Edit Product</h2>
    <br>
    <form action="{{ route('photos.update', $photo->id) }}" method="POST" name="update_product">
        {{ csrf_field() }}
        @method('PATCH')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Path</strong>
                    @if($photo->path)
                        <img src="{{ asset('storage/' . $photo->path) }}"
                             class="card-img-top mx-auto"
                             style="height: 150px; width: 150px;display: block;"
                             alt="{{ $photo->path }}"
                        >
                    @endif
                    <input type="file" name="image_path" class="form-control" placeholder="" value="{{ $photo->path }}">

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>imageable_id</strong>
                    <input type="number" name="imageable_id" class="form-control" placeholder="Enter Price" value="{{ $photo->imageable_id }}">

                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>imageable_type</strong>
                        <input type="text" name="imageable_type" class="form-control" placeholder="Enter Category Id" value="{{ $photo->imageable_type }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
