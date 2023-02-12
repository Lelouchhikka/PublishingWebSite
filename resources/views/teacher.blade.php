@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center text-center ">
            <div class="separator">Лучший учитель</div>

            <div class="card">
                <div class="mt-4">
                    <div class="row justify-content-center  ">
                        @foreach($teacher->photos as $photo)
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img_photo">
                        @endforeach
                    </div>
                </div>

                <div class="card-body">
                    <p> {{ $teacher->name }}</p>
                    <p> {{ $teacher->description }}</p>
                    <p> {{ $teacher->experience }}</p>
                </div>
            </div>


        </div>
    </div>
@endsection
