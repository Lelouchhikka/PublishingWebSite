@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Information</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong>{!! nl2br( $student->name)!!}</p>
                        <p><strong>Description:</strong> {!! nl2br($student->description)!!}</p>
                    </div>
                </div>

                <div class="mt-4">
                    <h4>Student Photos</h4>
                    <div class="row">
                        @foreach($student->photos as $photo)
                            <div class="col-md-4">
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
