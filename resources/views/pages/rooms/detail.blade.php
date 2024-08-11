@extends('layouts.app')

@section('title', 'Detail Room')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/contact_hero.jpg') }}" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>Room</span>
                            <h2>Detail Room</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">

                    <div class="single-post">
                        <div class="feature-img">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="Fourth slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="Fifth slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="blog_details">
                            <h2>Room Industrial
                            </h2>

                            <ul class="blog-info-link mt-3 mb-4 pr-3 text-right">
                                <h4>Rp. 353.000</h4>
                            </ul>

                            <div class="room-badge mb-4">
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1em; height: 1em;">
                                            <path pid="0" d="M6.622 12.049a1 1 0 10-1.379 1.449l3.89 3.7a1 1 0 00.689.277l.033-.001c.268-.01.521-.125.704-.322l12.08-12.998A1 1 0 0021.166 2.8L9.773 15.049l-3.151-3zm16.982-3.124a1.001 1.001 0 00-1.933.514 9.928 9.928 0 01.27 3.648 9.93 9.93 0 01-3.68 6.71 9.906 9.906 0 01-7.347 2.143 9.932 9.932 0 01-6.71-3.681A9.929 9.929 0 012.06 10.91 9.936 9.936 0 015.74 4.2a9.926 9.926 0 017.348-2.142c.902.098 1.784.317 2.62.649a.999.999 0 10.74-1.857A12 12 0 0013.306.07C6.733-.64.793 4.116.072 10.695a11.928 11.928 0 002.571 8.817 11.924 11.924 0 008.054 4.416c.445.049.888.072 1.328.072 2.718 0 5.338-.916 7.49-2.643a11.924 11.924 0 004.415-8.052 11.938 11.938 0 00-.326-4.38z" fill="#28a745" fill-rule="evenodd"></path>
                                        </svg>
                                        <span class=" text-green">Free cancellation!</span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1em; height: 1em;">
                                            <path pid="0" d="M6.622 12.049a1 1 0 10-1.379 1.449l3.89 3.7a1 1 0 00.689.277l.033-.001c.268-.01.521-.125.704-.322l12.08-12.998A1 1 0 0021.166 2.8L9.773 15.049l-3.151-3zm16.982-3.124a1.001 1.001 0 00-1.933.514 9.928 9.928 0 01.27 3.648 9.93 9.93 0 01-3.68 6.71 9.906 9.906 0 01-7.347 2.143 9.932 9.932 0 01-6.71-3.681A9.929 9.929 0 012.06 10.91 9.936 9.936 0 015.74 4.2a9.926 9.926 0 017.348-2.142c.902.098 1.784.317 2.62.649a.999.999 0 10.74-1.857A12 12 0 0013.306.07C6.733-.64.793 4.116.072 10.695a11.928 11.928 0 002.571 8.817 11.924 11.924 0 008.054 4.416c.445.049.888.072 1.328.072 2.718 0 5.338-.916 7.49-2.643a11.924 11.924 0 004.415-8.052 11.938 11.938 0 00-.326-4.38z" fill="#28a745" fill-rule="evenodd"></path>
                                        </svg>
                                        <span class=" text-green">Book now, pay later</span>
                                    </div>
                                </div>
                            </div>



                            <h5 class="font-weight-bold">Property’s cancellation policy</h5>
                            <p class="excert text-justify">
                                Please Update
                            </p>

                            <h5 class="font-weight-bold">Room Features</h5>
                            <p class="excert text-justify">
                                Include Water Heater, Air Conditioner, Refrigerator, TV, Free Parking
                            </p>
                            <div class="room-features mb-4">
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1rem; height: 1rem;"><path pid="0" d="M15.707 10H8.293A4.294 4.294 0 004 14.293v8.64h3.023v-8.282h.5v8.282h8.955v-8.282h.5v8.282H20v-8.64A4.293 4.293 0 0015.707 10M12 9A4 4 0 1012 1.001a4 4 0 000 8" _fill="#333" fill-rule="evenodd"></path></svg>
                                        <span class="font-weight-bold text-grey">Max occupancy</span>
                                    </div>
                                    <div class="col-6 text-right text-grey">Sleeps 2</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1rem; height: 1rem;"><path pid="0" d="M13.2 10h6V6.4h-6V10zm-8.4 0h6V6.4h-6V10zm16.8 0V6.4c0-1.32-1.08-2.4-2.4-2.4H4.8C3.48 4 2.4 5.08 2.4 6.4V10C1.08 10 0 11.08 0 12.4v6h1.596l.804 2.4h1.2l.804-2.4h15.204l.792 2.4h1.2l.804-2.4H24v-6c0-1.32-1.08-2.4-2.4-2.4z" _fill="#717171" fill-rule="evenodd"></path></svg>
                                        <span class="font-weight-bold text-grey">Bed configuration
                                    </div>
                                    <div class="col-6 text-right text-grey">1 Double bed</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1rem; height: 1rem;"><path pid="0" d="M7 16a1 1 0 011 1v3h8v-3a1 1 0 011-1h3V8h-3a1 1 0 01-1-1V4H8v3a1 1 0 01-1 1H4v8h3zm1 7a1 1 0 01-1 1H1a1 1 0 01-1-1v-6a1 1 0 011-1h1V8H1a1 1 0 01-1-1V1a1 1 0 011-1h6a1 1 0 011 1v1h8V1a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1h-1v8h1a1 1 0 011 1v6a1 1 0 01-1 1h-6a1 1 0 01-1-1v-1H8v1z" _fill="#717171" fill-rule="evenodd"></path></svg>
                                         <span class="font-weight-bold text-grey">Room size</span>
                                    </div>
                                    <div class="col-6 text-right text-grey">29 m</div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1rem; height: 1rem;"><path pid="0" d="M13.2 10h6V6.4h-6V10zm-8.4 0h6V6.4h-6V10zm16.8 0V6.4c0-1.32-1.08-2.4-2.4-2.4H4.8C3.48 4 2.4 5.08 2.4 6.4V10C1.08 10 0 11.08 0 12.4v6h1.596l.804 2.4h1.2l.804-2.4h15.204l.792 2.4h1.2l.804-2.4H24v-6c0-1.32-1.08-2.4-2.4-2.4z" _fill="#717171" fill-rule="evenodd"></path></svg>
                                         <span class="font-weight-bold text-grey">Number of bathrooms</span>
                                    </div>
                                    <div class="col-6 text-right text-grey">1</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1rem; height: 1rem;"><path pid="0" d="M21.731 9.84l-3.402.7V4.203l3.402-1.373v7.01zm0 11.33l-3.402-1.372v-6.926l3.402-.7v8.998zM7.937 19.428h8.123V4.571H7.937v14.857zM5.669 10.54l-3.402-.7V2.83l3.402 1.373v6.337zm0 9.258L2.267 21.17v-8.998l3.402.7v6.926zM23.5.198a1.125 1.125 0 00-1.056-.116l-5.47 2.204H7.022L1.554.082A1.138 1.138 0 00.498.197 1.146 1.146 0 000 1.143v21.715c0 .378.186.732.498.946a1.123 1.123 0 001.056.114l5.468-2.204h9.953l5.47 2.204a1.13 1.13 0 001.056-.114c.31-.214.498-.568.498-.946V1.143c0-.378-.187-.732-.498-.946z" _fill="#717171" fill-rule="evenodd"></path></svg>
                                         <span class="font-weight-bold text-grey">Room view</span>
                                    </div>
                                    <div class="col-6 text-right text-grey">Pool view</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">
                                        <svg version="1.1" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img" style="width: 1rem; height: 1rem;"><path pid="0" d="M10 0c0 .605-.043 1.825.418 3.082.462 1.256 1.529 2.52 3.328 3.042 1.152.335 2.35.656 3.144 1.108.796.452 1.11.79 1.11 1.614h2c0-1.706-1.055-2.933-2.195-3.581-1.14-.648-2.444-.958-3.551-1.281-1.282-.372-1.714-1.003-1.983-1.734-.268-.731-.272-1.592-.272-2.25h-2zm5 0v2.212c.9 0 1.988.169 2.756.56.767.393 1.18.834 1.247 1.744.044.572.477 1.012.997 1.012.666 0 1.06.297 1.418.89.358.594.582 1.506.582 2.428h2c0-1.29-.276-2.59-.919-3.655-.517-.857-1.383-1.427-2.378-1.665-.37-1.268-1.142-2.268-2.11-2.761C17.412.162 16.101 0 15 0zM3.707 2.535L2.293 4.099 7.585 9.95H0v6.634h13.585L20.293 24l1.414-1.563-5.293-5.852h.009l-2-2.212-2-2.211-2-2.211h-.008L3.707 2.535zm9.54 7.416l2 2.21 2 2.212.753.832V9.95h-4.752zM20 16.585h4V9.95h-4v6.634z" _fill="#333" fill-rule="evenodd"></path></svg>
                                         <span class="font-weight-bold text-grey">Smoking policy</span>
                                    </div>
                                    <div class="col-6 text-right text-grey">Non-smoking</div>
                                </div>
                            </div>
                            <h5 class="font-weight-bold">Amenities</h5>
                            <p class="excert text-justify">
                                Internet Access, Air conditioned, Swimming Pool, Smart TV, Lift/Elevator Access, Linen and Towels Provided, Tea/Coffee Maker, Mini Fridge, 24hr Security, Free Toiletries
                            </p>





                        </div>
                    </div>

                    </div>

                    {{-- <div class="col-lg-4"> --}}

                    <div class="blog_right_sidebar col-lg-4">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Kamar Lainnya</h3>
                            <div class="media post_item">
                                <img class="rounded" src="{{ asset('assets/img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Skandinavian</h3>
                                    </a>
                                    <p>  </p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img class="rounded" src="{{ asset('assets/img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Skandinavian</h3>
                                    </a>
                                    <p>  </p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img class="rounded" src="{{ asset('assets/img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Skandinavian</h3>
                                    </a>
                                    <p>  </p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img class="rounded" src="{{ asset('assets/img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Skandinavian</h3>
                                    </a>
                                    <p>  </p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img class="rounded" src="{{ asset('assets/img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="#">
                                        <h3>Skandinavian</h3>
                                    </a>
                                    <p>  </p>
                                </div>
                            </div>

                        </aside>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->

@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->


@endpush
