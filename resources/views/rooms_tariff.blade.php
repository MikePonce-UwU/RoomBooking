@extends('layouts.public')
@section('contenido')
    <div class="container">

        <h2>Rooms & Tariff</h2>
        <!-- form -->

        <div class="row">
            @foreach ($rooms as $room)
                <div class="col-sm-6 wowload fadeInUp">
                    <div class="rooms"><img src="{{ asset('images/photos/' . rand(1, 11) . '.jpg') }}" class="img-responsive">
                        <div class="info">
                            <h3>{{ $room->name }}</h3>
                            <p> {{ Str::limit($room->description, 50, '...') }} </p>
                            <a href="{{ route('public.tour', [$room]) }}" class="btn btn-default">Check Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center">
            {{ $rooms->links() }}
        </div>


    </div>
@endsection
