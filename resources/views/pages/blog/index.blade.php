@extends('layouts.app')

@section('title', 'Blog')

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
                            <h2>Our Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        @foreach ($articles as $article)
                            <article class="blog_item">
                                <div class="blog_item_img ">
                                    <img class="card-img rounded-0 object-fit-cover thumbnail-blog" src="{{ asset('storage/'.$article->image) }}" alt="">
                                    <a href="{{ route('general.blog_detail', $article->slug) }}" class="blog_item_date">
                                        <h3>{{ $article->date_formatted->format('d') }}</h3>
                                        <p>{{ $article->date_formatted->format('M') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('general.blog_detail', $article->slug) }}">
                                        <h2>{{ $article->title }}</h2>
                                    </a>
                                    {{-- <p>{!! Str::limit($article->description, 5) !!}</p> --}}
                                    <ul class="blog-info-link">
                                        <li><a href="{{ route('general.blog_detail', $article->slug) }}"><i class="fa fa-user"></i> Nuansa Serpong</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach


                        {{-- <article class="blog_item">
                            <div class="blog_item_img thumbnail-blog ">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/blog/single_blog_5.png') }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>Google inks pact for new 35-storey office</h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                </ul>
                            </div>
                        </article> --}}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach ($articles as $article)
                                <div class="media post_item ">
                                    <img class="rounded image widget-little-image" src="{{asset('storage/'.$article->image)}}" alt="post">
                                    <div class="media-body">
                                        <a href="{{ route('general.blog_detail', $article->slug) }}">
                                            <h3>{{ $article->title }}</h3>
                                        </a>
                                        <p>{{ $article->date_formatted->format('d M Y')}}</p>

                                    </div>
                                </div>
                            @endforeach

                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->


@endpush
