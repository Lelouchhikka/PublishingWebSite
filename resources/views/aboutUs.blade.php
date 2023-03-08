@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="separator">Контакты</div>
            <div class="col-lg-10 text-center">
                <p>{!! nl2br($str)!!}</p>
        </div>
    </div>

@endsection
