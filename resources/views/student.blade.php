@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center text-center ">
            <div class="separator">Лучший ученик</div>

            <div class="card">
                <div class="m-4 text-center">
                    <h3 class="fw-bold">{{ $student->name }}</h3>
                    <div class="row justify-content-center  ">
                        @foreach($student->photos as $photo)
                        <div class="col">
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img_photo">
                        </div>
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
