<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Navbar PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<nav class="navbar navbar-expand-lg">

    <div class="container">

        <div class="row d_flex d_justify">

            <div class="col-lg-2 col-sm-3">
                <a class="navbar-brand" href="{{ route('frontend.home') }}">
                    <img src="{{ asset(general_setting('app_logo')) }}" alt="logo">
                </a>
            </div>

            <div class="col-lg-10 col-sm-7">

                <!-- Mobile Start -->

                <div class="Mobile_menu">

                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <img src="{{ asset('frontend_asset') }}/images/menu.png" alt="">
                    </button>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                        <div class="offcanvas-body">

                            <div class="dropdown">

                                <ul class="navbar-nav ms-auto">

                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_home')" aria-current="page" href="{{ route('frontend.home') }}">{{ general_setting('menu_home') }}</a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_about_us')" href="{{ route('frontend.about') }}">{{ general_setting('menu_about_us') }}</a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_advisor')" href="{{ route('frontend.advisore') }}">{{ general_setting('menu_advisor') }}</a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_our_team')" href="{{ route('frontend.team') }}">{{ general_setting('menu_our_team') }}</a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_gallery')" href="{{ route('frontend.gallery') }}">{{ general_setting('menu_gallery') }}</a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_event')" href="{{ route('frontend.event') }}">{{ general_setting('menu_event') }}</a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_faq')" href="{{ route('frontend.faq') }}">{{ general_setting('menu_faq') }}</a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link @yield('menu_contact')" href="{{ route('frontend.contact') }}">{{ general_setting('menu_contact') }}</a>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Mobile End -->

                <div class="collapse navbar-collapse desktop" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_home')" aria-current="page" href="{{ route('frontend.home') }}">{{ general_setting('menu_home') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_about_us')" href="{{ route('frontend.about') }}">{{ general_setting('menu_about_us') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_advisor')" href="{{ route('frontend.advisore') }}">{{ general_setting('menu_advisor') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_our_team')" href="{{ route('frontend.team') }}">{{ general_setting('menu_our_team') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_gallery')" href="{{ route('frontend.gallery') }}">{{ general_setting('menu_gallery') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_event')" href="{{ route('frontend.event') }}">{{ general_setting('menu_event') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_faq')" href="{{ route('frontend.faq') }}">{{ general_setting('menu_faq') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('menu_contact')" href="{{ route('frontend.contact') }}">{{ general_setting('menu_contact') }}</a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</nav>
