@extends('layouts.app')

@section('content')
    <div class="container mt-5">
                        <p>
                            <a href="{{ route('students.create') }}" class="btn btn-success">Добавить Студента</a>
                        </p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ФИО</th>
                                <th>Описание</th>
                                <th>Фотографии</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->description }}</td>
                                    <td>
                                        @foreach ($student->photos as $photo)
                                            <img src="{{ asset('/storage/'.$photo->path) }}" alt="{{ $student->name }}" width="50">
                                        @endforeach
                                    </td>
                                    <td >
                                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Редактировать</a>
                                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">Показать</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="post">
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
