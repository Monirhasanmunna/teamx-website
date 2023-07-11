<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Footer PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<footer id="Footer">

    <div class="Footer_img">
        <img src="{{ asset('frontend_asset') }}/images/footer.png" alt="">
    </div>

    <div class="container">

        <div class="row">

            <!-- Logo -->
            <div class="col-lg-3">

                <div class="LogoPart">

                    <div class="logo">
                        <img src="{{ asset(general_setting('app_logo')) }}" alt="">
                    </div>
    
                    <p>{{ general_setting('app_description') }}</p>

                    <div class="SocialIcon d_flex"> 

                        <a href="{{ general_setting('app_fb') }}" target="_blank"><i class="fab fa-facebook-f"></i></a> 

                        <a href="{{ general_setting('app_youtube') }}" target="_blank"><i class="fab fa-youtube"></i></a> 

                        <a href="{{ general_setting('app_instagram') }}" target="_blank"><i class="fab fa-linkedin-in"></i></a> 

                    </div>
    

                </div>

            </div>

            <!-- Content -->
            <div class="col-lg-9">

                <div class="FooterContent">

                    <div class="row">

                        <div class="col-lg-2 col-sm-2">

                            <div class="FooterItem Menu">

                                <h3>Menus</h3>

                                <ul>

                                    <li>
                                        <a aria-current="page" href="{{ route('frontend.home') }}">{{ general_setting('menu_home') }}</a>
                                    </li>
            
                                    <li>
                                        <a href="{{ route('frontend.about') }}">{{ general_setting('menu_about_us') }}</a>
                                    </li>
            
                                    <li>
                                        <a href="{{ route('frontend.advisore') }}">{{ general_setting('menu_advisor') }}</a>
                                    </li>
            
                                    <li>
                                        <a href="{{ route('frontend.team') }}">{{ general_setting('menu_our_team') }}</a>
                                    </li>
            
                                    <li>
                                        <a href="{{ route('frontend.gallery') }}">{{ general_setting('menu_gallery') }}</a>
                                    </li>
            
                                    <li>
                                        <a href="{{ route('frontend.event') }}">{{ general_setting('menu_event') }}</a>
                                    </li>

                                </ul>

                            </div>
                            
                        </div>

                        <div class="col-lg-5 col-sm-5">

                            <div class="FooterItem">

                                <h3>Gallery</h3>

                                <div class="FooterGallery">

                                    <div class="row">

                                        @foreach ($gallerys_items as $gallerys_item)
                                            
                                        
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                <div class="img">
                                                    <img src="{{ asset($gallerys_item->photo) }}" alt="">
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-5 col-sm-5">

                            <div class="FooterItem">

                                <h3>Contact</h3>

                                <ul>

                                    <li class="d_flex">
                                        <span><i class="fas fa-home"></i></span>
                                        {{ general_setting('app_address') }}
                                    </li>

                                    <li class="d_flex">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                        <a href="tel:{{ general_setting('app_phone') }}">{{ general_setting('app_phone') }}</a>
                                    </li>

                                    <li class="d_flex">
                                        <span><i class="fas fa-envelope"></i></span>
                                        <a href="mailto:{{ general_setting('app_email') }}">{{ general_setting('app_email') }}</a>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Support -->
        <div class="row">

            <div class="col-lg-12">
                <div class="SupportHotline">
                    <p>CAMBRIAN SSC QUIZ CONTEST 2022 HOTLINE<a href="tel: +8801301393735"> +8801301393735</a></p>
                </div>
            </div>

        </div>

    </div>

</footer>

<!-- <div class="section_gaps"></div> -->

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START TinyFooter PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<Footer id="TinyFooter">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 m-auto">

                <p class="text-center">©SSC Quiz Contest 2022. <a href="">Developed By Lambda Technologies</a></p>

            </div>

        </div>

    </div>

</Footer>