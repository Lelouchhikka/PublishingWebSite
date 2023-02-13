@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center text-start ">
            <div class="separator">Лучший ученик</div>

            <div class="card">
                <div class="m-4">
                    <h3 class="fw-bold">{{ $student->name }}</h3>
                    <div class="row justify-content-center  ">
                        @foreach($student->photos as $photo)
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img_photo">
                        @endforeach
                    </div>
                </div>

                <div class="card-body text-start">
                    <p>{!! nl2br($student->description) !!}</p>
                </div>
            </div>


        </div>
    </div>
@endsection
