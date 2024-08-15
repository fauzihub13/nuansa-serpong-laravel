@extends('layouts.app')

@section('title', 'Nuansa Serpong - Hotel Terbaik di Gading Serpong')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('assets/img/ns/hero-1.jpg') }}" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">NUANSA SERPONG</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Nuansa Serpong Hotel Terbaik di Gading Serpong Tangerang</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('assets/img/ns/hero-1.jpg') }}" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">NUANSA SERPONG</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Jaminan Harga Terbaik</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{ asset('assets/img/ns/hero-1.jpg') }}" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">NUANSA SERPONG</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Fasilitas Lengkap, Aman dan Nyaman</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="{{ asset('assets/img/ns/building.png') }}" class="customar-img1" alt="">
                            <img src="{{ asset('assets/img/customer/customar2.png') }}" class="customar-img2" alt="">
                            <div class="service-experience heartbeat">
                                <h3>Harga Terbaik</h3>
                            </div>
                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <span>Tentang Nuansa Serpong</span>
                            <h2>Hotel Mewah dan Eksklusif</h2>
                            <div class="caption-details text-justify">
                                <p>Dengan lokasi yang strategis di pusat kota dan pemandangan yang indah dari kamar-kamar kami, hotel kami adalah pilihan sempurna bagi mereka yang mencari akomodasi berkualitas tinggi dengan fasilitas yang lengkap.</p>
                                <a href="{{ route('general.about') }}" class="btn more-btn1">Selengkapnya <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->

        <!-- Room Start -->
        <section class="room-area">
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
                <div class="row d-flex justify-content-center">

                    @foreach ($rooms as $room)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <!-- Single Room -->
                            <div class="single-room mb-50">
                                <div class="room-img">
                                    <a href="{{ route('general.detail_room', $room->slug) }}"><img src="{{ config('app.url') }}/storage/{{$room->first_image }}" alt=""></a>
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

                    {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="{{ route('general.detail_room') }}"><img src="{{ asset('assets/img/ns/room/room-industrial-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="{{ route('general.detail_room') }}">Room Skandinavian</a></h3>
                                <div class="per-night">
                                    <span><u>Rp,</u>363.000 <span>/ per night</span></span>
                                    <hr>
                                    <ul>
                                        <li><p>- Luas 29m²</p></li>
                                        <li><p>- Pool view​</p></li>
                                        <li><p>- Non-smoking</p></li>
                                        <li><p>- Swimming Pool​</p></li>
                                        <li><p>- Air conditioned​</p></li>
                                        <li><p>- Mini Fridge​​</p></li>
                                        <li><p>- dan lainnya.</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="{{ route('general.detail_room') }}"> <img src="{{ asset('assets/img/ns/room/room-skandinavian-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="{{ route('general.detail_room') }}">Room Industrial​</a></h3>
                                <div class="per-night">
                                    <span><u>Rp,</u>363.000 <span>/ per night</span></span>
                                    <hr>
                                    <ul>
                                        <li><p>- Luas 29m²</p></li>
                                        <li><p>- Pool view​</p></li>
                                        <li><p>- Non-smoking</p></li>
                                        <li><p>- Swimming Pool​</p></li>
                                        <li><p>- Air conditioned​</p></li>
                                        <li><p>- Mini Fridge​​</p></li>
                                        <li><p>- dan lainnya.</p></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="{{route('general.rooms')}}" class="btn view-btn1">Selengkapnya <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->

        <!-- Dining Start -->
        <div class="dining-area dining-padding-top">
            <!-- Single Left img -->
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Our resturent</span>
                                <h3>Dining & Drinks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single Right img -->
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Our Pool</span>
                                <h3>Swimming Pool</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dining End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="{{ asset('assets/img/logo/testimonial.png') }}" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="{{ asset('assets/img/logo/testimonial.png') }}" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <div class="testimonial-ratting">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Blog Start -->
       <div class="blog-area blog-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!-- Seciton Tittle  -->
                        <div class="font-back-tittle mb-50">
                            <div class="archivment-front">
                                <h3>Our Blog</h3>
                            </div>
                            <h3 class="archivment-back">Recent News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="#"><img src="{{ asset('assets/img/our_blog/blog-img1.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="#">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                               <a href="#"> <img src="{{ asset('assets/img/our_blog/blog-img2.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="#">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="#"><img src="{{ asset('assets/img/our_blog/blog-img3.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="#">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Blog End -->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('assets/img/gallery/gallery1.jpg') }}" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('assets/img/gallery/gallery2.jpg') }}" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="{{ asset('assets/img/gallery/gallery3.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>

@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->


@endpush
