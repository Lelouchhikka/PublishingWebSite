@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center text-center ">
            <div class="separator">Лучший выпуск</div>

            <div class="card">
                <div class="m-4">
                    <div class="row justify-content-center text-center d-flex flex-wrap">
                        <h3 class="fw-bold"> {{ $journal->name }}</h3>
                        @foreach($journal->photos as $photo)
                            <div class="col">
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img_photo mt-1">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-body text-start">

                    <h4 >Описание: {!! nl2br($journal->description) !!}</h4>
                </div>
            </div>


        </div>
    </div>
@endsection
