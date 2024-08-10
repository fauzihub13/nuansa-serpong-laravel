@extends('layouts.app')

@section('title', 'About')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/aboutpage_hero.jpg') }}" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>About</span>
                                <h2>About</h2>
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
                            <img src="{{ asset('assets/img/customer/customar1.png') }}" class="customar-img1" alt="">
                            <img src="{{ asset('assets/img/customer/customar2.png') }}" class="customar-img2" alt="">

                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            {{-- <span>Tentang Nuansa Serpong</span> --}}
                            <h2>Nuansa Serpong</h2>
                            <div class="caption-details text-justify">
                                <p>Dengan lokasi yang strategis di pusat kota dan pemandangan yang indah dari kamar-kamar kami, hotel kami adalah pilihan sempurna bagi mereka yang mencari akomodasi berkualitas tinggi dengan fasilitas yang lengkap. <br>
                                Didukung dengan Team yang profesional di Bidangnya telah berpengalaman Lebih dari 10 tahun. Jangan ragu untuk menghubungi staf kami yang ramah dan profesional jika Anda membutuhkan bantuan dalam merencanakan kegiatan atau menjelajahi kota. Kami siap memberikan rekomendasi dan informasi yang diperlukan untuk membuat perjalanan Anda menjadi lebih baik.</p>
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
                                <h3>Our Team</h3>
                            </div>
                            <h3 class="archivment-back">Our Team</h3>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-6 rounded ">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img rounded">
                              <img src="{{ asset('assets/img/ns/teams/Fivi.jpg') }}" alt="">
                            </div>
                            <div class="room-caption about-caption">
                                <h3 class="text-center font-display-1">Fivi</h3>
                                <div class="per-night text-center">
                                    <span class="font-display-2">General Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 rounded">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img rounded">
                               <img src="{{ asset('assets/img/ns/teams/Paula.jpg') }}" alt="">
                            </div>
                            <div class="room-caption about-caption">
                                <h3 class="text-center font-display-1">Paula</h3>
                                <div class="per-night text-center">
                                    <span class="font-display-2">General Affair</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 rounded">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img rounded">
                               <img src="{{ asset('assets/img/ns/teams/Veve.jpg') }}" alt="">
                            </div>
                            <div class="room-caption about-caption">
                                <h3 class="text-center font-display-1">Veve</h3>
                                <div class="per-night text-center">
                                    <span class="font-display-2">Finance Controller</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 rounded">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img rounded">
                               <img src="{{ asset('assets/img/ns/teams/Erwin.jpg') }}" alt="">
                            </div>
                            <div class="room-caption about-caption">
                                <h3 class="text-center font-display-1">Erwin</h3>
                                <div class="per-night text-center">
                                    <span class="font-display-2">Marketing Affairs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 rounded">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img rounded">
                               <img src="{{ asset('assets/img/ns/teams/Mayang.jpg') }}" alt="">
                            </div>
                            <div class="room-caption about-caption">
                                <h3 class="text-center font-display-1">Mayang</h3>
                                <div class="per-night text-center">
                                    <span class="font-display-2">Hotel Supervisor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 rounded">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img rounded">
                               <img src="{{ asset('assets/img/ns/teams/Helmi.jpg') }}" alt="">
                            </div>
                            <div class="room-caption about-caption">
                                <h3 class="text-center font-display-1">Helmi</h3>
                                <div class="per-night text-center">
                                    <span class="font-display-2">Front Desk</span>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </section>
        <!-- Room End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area t-padding">
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
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

    </main>

@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->


@endpush
