@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="separator">Учителя</div>
            <div class="col-lg-10 ">
                <div class="row">

                            @foreach($teachers as $teacher)
                        <div class="col-lg-2 d-flex justify-content-center text-center mt-3">
                            <a href="{{route('teacher.show',$teacher->id)}}" class="link-dark text-decoration-none">
                                <div class="card w-100">
                                        <img src="{{asset('/storage/'.$teacher->photos()->first()->path)}}"
                                             class="img-fluid p-3"
                                        style="max-height: 200px;min-height: 200px"/>

                                    <h3 class="card-title">{{$teacher->name}}</h3>
                                </div>
                            </a>
                        </div>
                            @endforeach



                </div>
                <div class="mt-3">  {{$teachers->links()}}</div>

            </div>

        </div>
    </div>

@endsection
