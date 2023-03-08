
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Редактировать Контакты</h1>
                <div class="ml-auto">
                    <a href="{{ route('aboutUs.index') }}" class="btn btn-secondary">Назад</a>
                </div>
                <form action="{{ route('aboutUs.update', $aboutUs) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">О нас:</label>
                        <textarea  class="form-control" id="description" name="description" required>{{ $aboutUs->description }}</textarea>
                        <label for="name">Контакты:</label>
                        <textarea  class="form-control" id="contacts" name="contacts" required>{{ $aboutUs->contacts }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </form>

                <br>

            </div>
        </div>
    </div>
@endsection
