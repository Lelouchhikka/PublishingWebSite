@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="separator">Выпуски</div>
            <div class="col-lg-10 ">
                <div class="row">
                        <div
                            @foreach($journals as $journal)
                        <div class="col-lg-2 d-flex justify-content-center text-center mt-3 ">
                                <div class="card w-100">
                                        <img src="{{asset('/storage/'.$journal->photos()->first()->path)}}"
                                             class="img-fluid p-3"
                                        style="max-height: 200px;min-height: 200px"/>

                                    <h3 class="card-title">{{$journal->name}}</h3>
                                </div>
                        </div>
                            @endforeach



                </div>
                <div class="mt-3">  {{$journals->links()}}</div>

            </div>

        </div>
    </div>

@endsection
