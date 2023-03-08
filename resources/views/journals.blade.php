@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="row justify-content-center">
                <div class="separator">Выпуски</div>
                <div class="col-lg-10">
                    <div class="row grid">
                        @foreach($journals as $journal)
                            <div class="col grid-item">
                                <a href="{{route('journal.show',$journal->id)}}" class="link-dark text-decoration-none">
                                    <div class="card">
                                        <img src="{{asset('/storage/'.$journal->photos()->first()->path)}}" class="img-fluid p-3"
                                        style="max-height: 200px;min-height: 200px;
                                            max-width: 150px;min-width: 150px"/>
                                        <h3 class="card-title">{{$journal->name}}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-3">  {{$journals->links()}}</div>
                </div>
            </div>

        </div>
    </div>

@endsection
