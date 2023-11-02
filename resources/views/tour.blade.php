@extends('layouts.public')
@section('contenido')
    <div class="container">

        <h1 class="title">{{ $room->name }}</h1>



        <!-- RoomDetails -->
        <div id="RoomDetails" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active"><img src="{{ asset('images/photos/8.jpg') }}" class="img-responsive" alt="slide">
                </div>
                <div class="item  height-full"><img src="{{ asset('images/photos/9.jpg') }}" class="img-responsive"
                        alt="slide"></div>
                <div class="item  height-full"><img src="{{ asset('images/photos/10.jpg') }}" class="img-responsive"
                        alt="slide"></div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i
                    class="fa fa-angle-left"></i></a>
            <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i
                    class="fa fa-angle-right"></i></a>
        </div>
        <!-- RoomCarousel-->

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <p>{{ $room->description }}</p>
                </div>
                <div class="col-sm-6 col-md-3 amenitites">
                    <h3>Amenitites</h3>
                    <ul>
                        <li>Capacity: {{ $room->capacity }} sq</li>
                        {{-- <li>Price: $ {{ number_format($room->hourly_rate, 2) }}</li> --}}
                        <li>Category: {{ $room->category->name }}</li>
                    </ul>
                </div>
                {{-- <div class="col-sm-3 col-md-2">
                    <div class="size-price">Size<span>{{ $room->capacity }} sq</span></div>
                </div> --}}
                <div class="col-sm-3 col-md-2">
                    <div class="size-price">Price<span>$ {{ number_format($room->hourly_rate, 2) }}</span></div>
                </div>
                {{-- <div class="col-sm-3 col-md-2">
                    <div class="size-price">Category<span>{{ $room->category->name }}</span></div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
