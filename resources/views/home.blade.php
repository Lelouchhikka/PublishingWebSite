@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="separator">Лучшие учителя</div>

        <div class="container">
            <div class="row">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        @foreach($teachers as $teacher)
                            <div class="item">
                                <div class="border  w-75 h-100">
                                    <img src="{{asset('/storage/'.$teacher->photos()->first()->path)}}" class="card-img "/>
                                    <p>{{$teacher->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>


        <div class="separator">Лучшие ученики</div>
        <div class="container">
            <div class="row">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        @foreach($students as $student)
                            <div class="item">
                                <div class="border  w-75 h-100">
                                    <img src="{{asset('/storage/'.$student->photos()->first()->path)}}" class="card-img "
                                         style="height: auto;width: 100%"/>
                                    <p>{{$student->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>


        <div class="separator">Выпуски</div>
        <div class="container">
            <div class="row">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        @foreach($journals as $journal)
                            <div class="item">
                                <div class="border ">
                                    <img src="{{asset('/storage/'.$journal->photos()->first()->path)}}" class="card-img "
                                         style="max-height: 200px;min-height: 200px"/>
                                    <p>{{$journal->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-primary leftLst"><</button>
                    <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>


    </div>
</div>


@endsection
{{--        <div class="col-lg-12">--}}
{{--                <h1>hello</h1>--}}
{{--                <div id="productSlider" class="carousel slide" data-ride="carousel">--}}
{{--                    <div class="row">--}}
{{--                        @foreach($students as $student)--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="img-thumbnail" >--}}
{{--                            <img src="{{asset('/storage/'.$student->photos()->first()->path)}}"--}}
{{--                                 class="card-img-top"/>--}}
{{--                            <div class="card-body">--}}
{{--                                 <h6 class="card-title">{{ $student->name }}</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--        @endforeach--}}
