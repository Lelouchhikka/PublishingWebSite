@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Информация о учителе</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>ФИО:</strong> {{ $teacher->name }}</p>
                        <p><strong>Описание:</strong> {!! nl2br($teacher->description) !!}</p>
                        <p><strong>Опыт работы:</strong> {!! nl2br($teacher->experience)!!}</p>
                    </div>
                </div>

                <div class="mt-4">
                    <h4>Фотографии учителя</h4>
                    <div class="row">
                        @foreach($teacher->photos as $photo)
                            <div class="col-md-4">
                                <img src="{{ asset('/storage/'.$photo->path) }}" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
