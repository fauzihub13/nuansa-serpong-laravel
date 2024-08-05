<header>
    <!-- Header Start -->
    <div class="header-area header-sticky">
        <div class="main-header ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{ route('general.home') }}"><img src="assets/img/ns/icon-x.jpg" alt="" width="50" height="50"></a>
                        </div>
                    </div>
                <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ route('general.home') }}">Home</a></li>
                                    <li><a href="{{ route('general.about') }}">About</a></li>
                                    <li><a href="{{ route('general.service') }}">Service</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('general.blog') }}">Blog</a></li>
                                            <li><a href="{{ route('general.blog_detail') }}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('general.page_rooms') }}">Rooms</a>
                                            <li><a href="{{ route('general.page_element') }}">Element</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('general.contact') }}">Contact</a></li>
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
