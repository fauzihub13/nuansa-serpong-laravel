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

                            <p class="excert text-justify">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower. <br> <br>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually.
                            </p>

                            <ul class="detail-room">
                                <li><a href="#"><i class="fa fa-user mb-2"></i> Nuansa Serpong</a></li>
                                <li><a href="#"><i class="fa fa-user mb-2"></i> Nuansa Serpong</a></li>
                                <li><a href="#"><i class="fa fa-user mb-2"></i> Nuansa Serpong</a></li>
                                <li><a href="#"><i class="fa fa-user mb-2"></i> Nuansa Serpong</a></li>
                                <li><a href="#"><i class="fa fa-user mb-2"></i> Nuansa Serpong</a></li>
                            </ul>



                        </div>
                    </div>

                    </div>

                    {{-- <div class="col-lg-4"> --}}

                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                <a href="#">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/post/post_2.png') }}" alt="post">
                                <div class="media-body">
                                <a href="#">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/post/post_3.png') }}" alt="post">
                                <div class="media-body">
                                <a href="#">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/post/post_4.png') }}" alt="post">
                                <div class="media-body">
                                <a href="#">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
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
