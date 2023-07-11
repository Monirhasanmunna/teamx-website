<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('home') }}">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset(general_setting('app_logo')) }}" class="header-brand-img light-logo1"
                    alt="logo" style="width: 100%; height: 50px;">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">

                <li class="sub-category">
                    <h3>Main</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('home') }}"><i class="side-menu__icon fe fe-home"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <li class="sub-category">
                    <h3>UI Kit</h3>
                </li>

                {{-- General Settings --}}
                <li class="slide">

                    <a class="side-menu__item @yield('setting')" data-bs-toggle="slide" href="{{ route('general_setting') }}">
                        <i class="side-menu__icon fe fe-settings"></i>
                        <span class="side-menu__label">General Settings</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>

                </li>

                {{-- Home Page --}}
                <li class="slide">
                    <a class="side-menu__item @yield('home_page')" data-bs-toggle="slide" href="{{ route('home_page') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Home Page</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Others Banner Page --}}
                <li class="slide">
                    <a class="side-menu__item @yield('others_banner')" data-bs-toggle="slide" href="{{ route('others_banner') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Others Banner </span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- AboutUs Page --}}
                <li class="slide">
                    <a class="side-menu__item @yield('about_page')" data-bs-toggle="slide" href="{{ route('about_page') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">About Page</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Best Partner --}}
                <li class="slide">
                    <a class="side-menu__item @yield('bestpartner')" data-bs-toggle="slide" href="{{ route('bestpartner.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Best Partner</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Advisore --}}
                <li class="slide">
                    <a class="side-menu__item @yield('advisor')" data-bs-toggle="slide" href="{{ route('advisor.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Advisore</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- our team --}}
                <li class="slide">
                    <a class="side-menu__item @yield('our_team')" data-bs-toggle="slide" href="{{ route('our_team.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Our Team</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Gallery --}}
                <li class="slide">
                    <a class="side-menu__item @yield('gallery')" data-bs-toggle="slide" href="{{ route('gallery.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Gallery</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Faq --}}
                <li class="slide">
                    <a class="side-menu__item @yield('faq')" data-bs-toggle="slide" href="{{ route('faq.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Faq</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- Faq Submit --}}
                <li class="slide">
                    <a class="side-menu__item @yield('faq_submit')" data-bs-toggle="slide" href="{{ route('any_question.index') }}"><i
                        class="side-menu__icon fe fe-slack"></i><span
                        class="side-menu__label">Faq Submit</span><i
                        class="angle fe fe-chevron-right"></i>
                    </a>
                </li>

                {{-- <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span
                            class="side-menu__label">Apps</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                        <li><a href="cards.html" class="slide-item"> Cards design</a></li>
                    </ul>
                </li> --}}

            </ul>

            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>

        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
