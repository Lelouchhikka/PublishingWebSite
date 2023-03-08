@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="separator">О нас</div>
            <div class="col-lg-10 text-center">
                <p>{!! nl2br($str)!!}</p>
        </div>
    </div>

@endsection
