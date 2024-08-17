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
                            <img class="detail-blog" src="{{ asset('storage/'.$article->image) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $article->title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> Nuansa Serpong</a></li>
                            </ul>
                            <p class="excert text-justify">
                                {!! $article->description !!}
                            </p>

                        </div>
                    </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">

                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>

                                @foreach ($other_articles as $other_article)
                                    <div class="media post_item ">
                                        <img class="rounded image widget-little-image" src="{{asset('storage/'.$other_article->image)}}" alt="post">
                                        <div class="media-body">
                                            <a href="{{ route('general.blog_detail', $other_article->slug) }}">
                                                <h3>{{ $other_article->title }}</h3>
                                            </a>
                                            <p>{{ $other_article->date_formatted->format('d M Y')}}</p>

                                        </div>
                                    </div>
                                @endforeach

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
