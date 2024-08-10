<header>
    <!-- Header Start -->
    <div class="header-area header-sticky">
        <div class="main-header ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{ route('general.home') }}"><img src="{{ asset('assets/img/ns/icon-x.jpg') }}" alt="" width="50" height="50"></a>
                        </div>
                    </div>
                <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ route('general.home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                                    <li><a href="{{ route('general.rooms') }}"  class="{{ Request::is('page*') ? 'active' : '' }}">Rooms</a>
                                    <li><a href="{{ route('general.service') }}" class="{{ Request::is('service') ? 'active' : '' }}" >Service</a></li>
                                    <li><a href="{{ route('general.about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                                    <li><a href="{{ route('general.blog') }}" class="{{ Request::is('blog*') ? 'active' : '' }}">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('general.blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a></li>
                                            <li><a href="{{ route('general.blog_detail') }}" class="{{ Request::is('blog/detail') ? 'active' : '' }}">Blog Details</a></li>
                                        </ul>
                                    </li>

                                    </li>
                                    <li><a href="{{ route('general.contact') }}"  class="{{ Request::is('contact*') ? 'active' : '' }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <!-- header-btn -->
                        <div class="header-btn">
                            <a href="{{ url('https://book-directonline.com/properties/nuansaserpongdirect') }}" class="btn btn1 d-none d-lg-block ">Book Online</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
