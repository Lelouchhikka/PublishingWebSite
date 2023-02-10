@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Photo</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('path') ? ' has-error' : '' }}">
                                <label for="path" class="col-md-4 control-label">Path</label>

                                <div class="col-md-6">
                                    <input id="path" type="file" class="form-control" name="path"
                                           required >

                                    @if ($errors->has('path'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('path') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('imageable_id') ? ' has-error' : '' }}">
                                <label for="imageable_id" class="col-md-4 control-label">Imageable ID</label>

                                <div class="col-md-6">
                                    <input id="imageable_id" type="text" class="form-control" name="imageable_id" value="{{ old('imageable_id') }}" required>

                                    @if ($errors->has('imageable_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('imageable_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('imageable_type') ? ' has-error' : '' }}">
                                <label for="imageable_type" class="col-md-4 control-label">Imageable Type</label>

                                <div class="col-md-6">
                                    <input id="imageable_type" type="text" class="form-control" name="imageable_type" value="{{ old('imageable_type') }}" required>

                                    @if ($errors->has('imageable_type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('imageable_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Photo
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
