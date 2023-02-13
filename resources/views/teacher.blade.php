@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center text-center ">
            <div class="separator">Лучший учитель</div>

            <div class="card">
                <div class="m-4">
                    <div class="row justify-content-center  text-start">
                        <h3 class="fw-bold"> {{ $teacher->name }}</h3>
                        @foreach($teacher->photos as $photo)
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img_photo">
                        @endforeach
                    </div>
                </div>

                <div class="card-body text-start">
                    <p>Опыт работы: {!! nl2br($teacher->experience) !!}</p>
                    <p>Описание: {!! nl2br( $teacher->description) !!}</p>
                </div>
            </div>


        </div>
    </div>
@endsection
