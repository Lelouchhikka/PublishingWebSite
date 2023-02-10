@extends('layouts.app')

@section('content')
    <div class="container mt-5">
                        <p>
                            <a href="{{ route('journals.create') }}" class="btn btn-success">Add Journal</a>
                        </p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Photos</th>
                                <th>Actions</th>
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
                                        <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('journals.show', $journal->id) }}" class="btn btn-primary">Show</a>
                                        <form action="{{ route('journals.destroy', $journal->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
    </div>
@endsection
