@extends('layouts.app')

@section('title', 'Detail Blog')

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
                            <span>Blog</span>
                            <h2>Single Blog</h2>
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
                            <img class="img-fluid" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>Second divided from form fish beast made every of seas
                                all gathered us saying he our
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> Nuansa Serpong</a></li>
                            </ul>
                            <p class="excert text-justify">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p class="excert text-justify">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>

                            <p class="excert text-justify">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p class="excert text-justify">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>
                        </div>
                    </div>

                    </div>

                    <div class="col-lg-4">
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
        </div>
    </section>
    <!--================ Blog Area end =================-->

@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->


@endpush
