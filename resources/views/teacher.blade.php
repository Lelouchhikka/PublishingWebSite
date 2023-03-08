@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center text-center ">
            <div class="separator">Лучший учитель</div>

            <div class="card">
                <div class="m-4">
                    <div class="row justify-content-center  text-center">
                        <h3 class="fw-bold"> {{ $teacher->name }}</h3>
                        @foreach($teacher->photos as $photo)
                            <div class="col">
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img_photo">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-body text-start">
                    <p> {!! nl2br( $teacher->description) !!}</p>
                </div>
            </div>


        </div>
    </div>
@endsection
