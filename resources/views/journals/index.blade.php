@extends('layouts.app')

@section('content')
    <div class="container mt-5">
                        <p>
                            <a href="{{ route('journals.create') }}" class="btn btn-success">Добавить выпуск</a>
                        </p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Фотографии</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($journals as $journal)
                                <tr>
                                    <td>{{ $journal->name }}</td>
                                    <td>{{ $journal->description }}</td>
                                    <td>
                                        @foreach ($journal->photos as $photo)
                                            <img src="{{ asset('/storage/'.$photo->path) }}" alt="{{ $journal->name }}" width="50">
                                        @endforeach
                                    </td>
                                    <td >
                                        <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-primary">Редактировать</a>
                                        <a href="{{ route('journals.show', $journal->id) }}" class="btn btn-primary">Показать</a>
                                        <form action="{{ route('journals.destroy', $journal->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
    </div>
@endsection
