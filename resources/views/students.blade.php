@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="separator">Студенты</div>
            <div class="col-lg-10 ">
                <div class="row">
                    <div
                    @foreach($students as $student)

                        <div class="col-lg-2 d-flex justify-content-center text-center border mt-3">
                        <a href="{{route('student.show',$student->id)}}" class="link-dark text-decoration-none">
                            <div class=" card w-100">
                                <img src="{{asset('/storage/'.$student->photos()->first()->path)}}"
                                     class="card-img "
                                     style="max-height: 200px;min-height: 200px"/>

                                <h3 class="card-title">{{$student->name}}</h3>
                            </div>
                        </a>
                        </div>
                    @endforeach



                </div>
                <div class="mt-3">  {{$students->links()}}</div>

            </div>

        </div>
    </div>
@endsection
