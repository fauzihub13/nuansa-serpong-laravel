@extends('layouts.app')

@section('title', 'Rooms')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/roomspage_hero.jpg') }}" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Rooms</span>
                                <h2>Our Rooms</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Room Start -->
        <section class="room-area r-padding1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Rooms</h3>
                            </div>
                            <h3 class="archivment-back">Our Rooms</h3>
                        </div>
                    </div>
                </div>
                <div class="row">


                        @foreach ($rooms as $room)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <!-- Single Room -->
                                <div class="single-room mb-50">
                                    <div class="room-img">
                                        <a href="{{ route('general.detail_room', $room->slug) }}"><img src="{{asset('storage/'.$room->first_image)}}" alt=""></a>
                                    </div>
                                    <div class="room-caption">
                                        <h3 class="font-title-card"><a href="{{ route('general.detail_room', $room->slug) }}">{{ $room->name }}</a></h3>
                                        <div class="per-night">
                                            <span>@currency($room->price) <span>/ per night</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                </div>

            </div>

        </section>
        <!-- Room End -->

    </main>

@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->


@endpush
