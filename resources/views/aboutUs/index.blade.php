@extends('layouts.app')

@section('content')
    <div class="container mt-5">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Описание</th>
                                <th>Контакты</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! nl2br( $aboutUs->description) !!}</td>
                                    <td>{!! nl2br($aboutUs->contacts)!!}</td>
                                </tr>
                            </tbody>
                        </table>
                                <a href="{{ route('aboutUs.edit', $aboutUs) }}" class="btn btn-primary">Edit</a>
    </div>
@endsection
