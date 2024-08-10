@extends('layouts.app')

@section('title', 'Element')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/contact_hero.jpg') }}" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Element</span>
                                <h2>Our Element</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Start Sample Area -->
        <section class="sample-text-area">
            <div class="container box_1170">
                <h3 class="text-heading">Text Sample</h3>
                <p class="sample-text">
                    Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary,
                    or short
                    film to show off their creative prowess. Many have great ideas and want to “wow”
                    the<sup>Superscript</sup> scene,
                    or video renters with their big project. But once you have the<sub>Subscript</sub> “in the can” (no easy
                    feat), how
                    do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked
                    hand-written title
                    inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC
                    barcodes
                    and polywrap sitting on your doorstep? You need to create eye-popping artwork and have your project
                    replicated.
                    Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is
                    certainly a
                    helpful option to ensure a professional end result, but to help with your DVD replication project, here
                    are 4 easy
                    steps to follow for good DVD replication results:

                </p>
            </div>
        </section>
        <!-- End Sample Area -->
    </main>

@endsection

@push('scripts')
    <!-- JS Libraies -->


    <!-- Page Specific JS File -->


@endpush
