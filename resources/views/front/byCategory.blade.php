<!-- /.col-lg-3 -->
@extends('front.layouts.master')
@section('con')
    <div class="col-lg-9 text-right">
        <div class="container" style="margin-top:25px">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox" style="height:300px">
                    <div class="carousel-icarousel-innertem active">
                        <img class="d-block img-fluid" width="100%"  src="{{URL::to('css/images.jpg')}}" alt="First slide">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
                @php
                    $img=$post->images->first();
                    $img_name=$img['image']
                @endphp
                <div class="col-lg-4 col-md-6 mb-4 text-right">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" height="150px" src="{{URL::to('/img/' . $img_name)}}"onerror="this.onerror=null;this.src='{{URL::to('css/236.bmp')}}';" ></a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="">{{$post->title }}</a>
                            </h5>
                            <h6>{{$post->price}}</h6>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

@endsection