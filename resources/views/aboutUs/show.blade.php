@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Конткаты</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>О нас:</strong> {c$aboutUs->description)!!}</p>
                        <p><strong>Контакты:</strong> {!! nl2br($aboutUs->contacts)!!}</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
