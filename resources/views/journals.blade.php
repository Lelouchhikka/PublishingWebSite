@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="separator">Выпуски</div>
            <div class="col-lg-10 ">
                <div class="row">
                        <div
                            @foreach($journals as $journal)
                        <div class="col-lg-2 d-flex justify-content-center text-center mt-3 " style="flex-shrink: 0;">
                        <a href="{{route('journal.show',$journal->id)}}" class="link-dark text-decoration-none">
                                <div class="card w-100">
                                        <img src="{{asset('/storage/'.$journal->photos()->first()->path)}}"
                                             class="img-fluid p-3"
                                        style="max-height: 200px;min-height: 200px;
                                            min-width: 150px"/>

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

@endsection
