@extends('layouts.app')

@section('content')
    <div class="container mt-5">
                        <p>
                            <a href="{{ route('teachers.create') }}" class="btn btn-success">Add Teacher</a>
                        </p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ФИО</th>
                                <th>Описание</th>
                                <th>Опыт работы</th>
                                <th>Фотографии</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->description }}</td>
                                    <td>{{ $teacher->experience }}</td>
                                    <td>
                                        @foreach ($teacher->photos as $photo)
                                            <img src="{{ asset('/storage/'.$photo->path) }}" alt="{{ $teacher->name }}" width="50">
                                        @endforeach
                                    </td>
                                    <td >
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Редактировать</a>
                                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-primary">Показать</a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post">
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
