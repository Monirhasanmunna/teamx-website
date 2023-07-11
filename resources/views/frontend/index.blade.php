@extends('layouts.frontend')

@section('menu_home') active @endsection

@section('frontend_content')


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Banner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Banner">

    <div class="banner_img">
        <img src="{{ asset(home_content('banner_img')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-10 col-sm-12 col-md-12 m-auto">

                <div class="banner_content">

                    <div class="countDown_part">
                        @if($home[1]->status == true)
                            <div id="countdown" data-time={{ home_content('countdown') }}>
                                <ul>
                                <li><span id="days"></span>days</li>
                                <li><span id="hours"></span>Hours</li>
                                <li><span id="minutes"></span>Minutes</li>
                                <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                        @endif
                        
                        <div id="content" class="emoji">
                            <span>🥳</span>
                            <span>🎉</span>
                            <span>🎂</span>
                        </div>
                    </div>

                    <h2>{{ home_content('exam_time') }}</h3>
                    <h3>{{ home_content('lets_build') }}</h3>
                    <h1>{{ home_content('together') }}</h1>
                    {{-- <h1>BETTER <span>TOMORROW</span> TOGETHER</h1> --}}
                    <p>{{ home_content('description') }}</p>

                </div>

            </div>

        </div>

    </div>

</section>


<div class="section_gaps"></div>


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START About PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="About" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">

    <div class="container">

        <div class="row d_flex">

            <div class="col-lg-7">

                <div class="AboutLeft">

                    <h4>{{ home_content('title') }}</h3>
                    <h2>{{ home_content('header') }}</h2>
                    <p>{{ home_content('about_description') }}</p>

                    <a href="{{ home_content('know_more') }}" class="bg">Know More</a>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="AboutRight">

                    <div class="row">

                        <div class="col-lg-6 col-sm-6">

                            <div class="AboutRightItem bg1">
                                <h3>{{ home_content('advisors') }}</h3>
                                <p>advisors</p>
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-6">

                            <div class="AboutRightItem bg2">
                                <h3>{{ home_content('mentor') }}</h3>
                                <p>Mentors</p>
                            </div>

                        </div>

                        <div class="col-lg-12 col-sm-6">

                            <div class="AboutRightItem">
                                <h3>{{ home_content('participants') }}</h3>
                                <p>PARTICIPANTS</p>
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-6">

                            <div class="AboutRightItem bg3">
                                <h3>{{ home_content('institution') }}</h3>
                                <p>Institutions</p>
                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-6">

                            <div class="AboutRightItem bg4">
                                <h3>{{ home_content('upozila') }}</h3>
                                <p>Upazila</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<div class="section_gaps"></div>


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START WhatYouGet PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="WhatYouGet" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">

    <div class="container">

        <div class="row d_flex">

            <div class="col-lg-6">

                <div class="WhatYouGetContent">

                    <h4>WHAT YOU WILL GET WITH THE</h4>
                    <h2>REGISTRATION</h2>

                    <ul>

                        @foreach ($what_you_gets as $what_you_get)

                            <li>{{ $what_you_get->description }}</li>

                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="WhatYouGetImg">
                    <img src="{{ asset(home_content('what_you_will_get_img')) }}" alt="">
                </div>

            </div>

        </div>

    </div>

</section>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START SixGroup PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="SixGroup" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">

                    <h4>SIX GROUPS FOR</h4>
                    <h2>SIX CATEGORIES</h2>

                </div>

            </div>

        </div>

        <div class="SixGroupContent">

            <div class="row">

                <div class="col-lg-4">

                    <div class="SixGroupLeft">

                        <h3>{{ home_content('six_desktop_title_1') }}</h3>
                        <h5>{{ home_content('six_desktop_age_1') }}</h5>
                        <p>{{ home_content('six_desktop_description_1') }}</p>

                    </div>

                    <div class="SixGroupLeft">

                        <h3>{{ home_content('six_desktop_title_2') }}</h3>
                        <h5>{{ home_content('six_desktop_age_2') }}</h5>
                        <p>{{ home_content('six_desktop_description_2') }}</p>

                    </div>

                    <div class="SixGroupLeft">

                        <h3>{{ home_content('six_desktop_title_3') }}</h3>
                        <h5>{{ home_content('six_desktop_age_3') }}</h5>
                        <p>{{ home_content('six_desktop_description_3') }}</p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="SixGroupMiddle">

                        <img class="desktop" src="{{ asset(home_content('six_desktop_img')) }}" alt="">
                        <img class="Mobile" src="{{ asset(home_content('six_mobile_img')) }}" alt="">

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="SixGroupLeft Right">

                        <h3>{{ home_content('six_desktop_title_4') }}</h3>
                        <h5>{{ home_content('six_desktop_age_4') }}</h5>
                        <p>{{ home_content('six_desktop_description_4') }}</p>

                    </div>

                    <div class="SixGroupLeft Right">

                        <h3>{{ home_content('six_desktop_title_5') }}</h3>
                        <h5>{{ home_content('six_desktop_age_5') }}</h5>
                        <p>{{ home_content('six_desktop_description_5') }}</p>

                    </div>

                    <div class="SixGroupLeft Right">

                        <h3>{{ home_content('six_desktop_title_6') }}</h3>
                        <h5>{{ home_content('six_desktop_age_6') }}</h5>
                        <p>{{ home_content('six_desktop_description_6') }}</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START TenSegment PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="TenSegment" data-aos="fade-up" data-aos-duration="1000">

    <div class="left_bg">
        <img src="{{ asset('frontend_asset') }}/images/left_BG.jpg" alt="">
    </div>
    <div class="right_bg">
        <img src="{{ asset('frontend_asset') }}/images/Right_BG.jpg" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">

                    <h4>THERE WILL BE</h4>
                    <h2>10 SEGMENTS</h2>

                </div>

            </div>

        </div>

        <div class="TenSegmentSlider">

            <div class="row">

                <div class="col-lg-12">

                    <div class="owl-carousel owl-theme SegmentSlider">

                        @foreach ($ten_segments as $ten_segment)
                        
                            <div class="item">

                                <div class="TenSegmentItem">

                                    <div class="img">
                                        <img src="{{ asset($ten_segment->photo) }}" alt="">
                                    </div>

                                    <div class="text">
                                        <h3>{{ $ten_segment->title }}</h3>
                                        <p>{{ $ten_segment->description }}</p>
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Round PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Round" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">
                    <h4>THERE WILL BE</h4>
                    <h2>4 ROUNDS</h2>
                </div>

            </div>

        </div>

        <div class="RoundContent">

            <div class="row">

                <div class="col-lg-6">

                    <div class="RoundContentItem d_flex">

                        <div class="img">
                            <img src="{{ asset('frontend_asset') }}/images/round-1.png" alt="">
                            <div class="overlay">
                                <h5>Round</h5>
                                <h6>01</h6>
                            </div>
                        </div>

                        <div class="text">

                            <h3>{{ home_content('Round_1_title') }}</h3>
                            <p>{{ home_content('Round_1_description') }}</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="RoundContentItem d_flex">

                        <div class="img">
                            <img src="{{ asset('frontend_asset') }}/images/round-1.png" alt="">
                            <div class="overlay">
                                <h5>Round</h5>
                                <h6>02</h6>
                            </div>
                        </div>

                        <div class="text">

                            <h3>{{ home_content('Round_2_title') }}</h3>
                            <p>{{ home_content('Round_2_description') }}</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="RoundContentItem d_flex">

                        <div class="img">
                            <img src="{{ asset('frontend_asset') }}/images/round-1.png" alt="">
                            <div class="overlay">
                                <h5>Round</h5>
                                <h6>03</h6>
                            </div>
                        </div>

                        <div class="text">

                            <h3>{{ home_content('Round_3_title') }}</h3>
                            <p>{{ home_content('Round_3_description') }}</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="RoundContentItem d_flex">

                        <div class="img">
                            <img src="{{ asset('frontend_asset') }}/images/round-1.png" alt="">
                            <div class="overlay">
                                <h5>Round</h5>
                                <h6>04</h6>
                            </div>
                        </div>

                        <div class="text">

                            <h3>{{ home_content('Round_4_title') }}</h3>
                            <p>{{ home_content('Round_4_description') }}</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START RoadMap PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="RoadMap" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">

                    <h4>ICT OLYMPIAD</h4>
                    <h2>RoadMap</h2>

                </div>

            </div>

        </div>

        <div class="RoadMapImg">

            <div class="row">

                <div class="col-lg-12">

                    <div class="img">
                        <img src="{{ asset(home_content('road_map_img')) }}" alt="">
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Advisore PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Advisore" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">

                    <h4>CAMBRIAN SSC QUIZ CONTEST 2022</h4>
                    <h2>Advisores</h2>

                </div>

            </div>

        </div>

        <div class="AdvisoreContent">

            <div class="row">

                <div class="col-lg-12">

                    <div class="AdvisoreContentFlex d_flex d_justify">

                        @foreach ($advisors as $advisor)
                       
                            <div class="AdvisoreItem">

                                <div class="img">

                                    <img src="{{ asset($advisor->photo) }}" alt="">

                                    <div class="overlay">

                                        <div class="div">
                                            <h5>{{ $advisor->name }}</h5>
                                            <p>{{ $advisor->title }}</p>

                                            <div class="SocialIcon d_flex"> 

                                                <a href="{{ $advisor->fb_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a> 

                                                <a href="{{ $advisor->youtube_link }}" target="_blank"><i class="fab fa-youtube"></i></a> 

                                                <a href="{{ $advisor->linkdin_link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a> 

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

                <!-- ViewAll -->
                <div class="col-lg-6 m-auto">
                    <div class="text-center">
                        <a href="{{ route('frontend.advisore') }}" class="bg">View All</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>



<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START WhyAn PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="WhyAn" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-sm-6">

                <div class="WhyAnRight">

                    <div class="header">

                        <h4>{{ home_content('why_an_title') }}</h4>
                        <h2>{{ home_content('why_an_header') }}</h2>

                        <div class="WhyAntabs">

                            <div class="accordion" id="accordionExample">

                                @foreach ($why_ans  as $why_an)

                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{ $why_an->id }}" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $why_an->title }}
                                        </button>
                                    </h2>

                                    <div id="collapseOne_{{ $why_an->id }}" class="accordion-collapse collapse @if ($loop->first) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p> {{ $why_an->description }}</p>
                                        </div>
                                    </div>

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-sm-6">

                <div class="WhyAnLeft">

                    <div class="WhyAnItem ImgPart">

                        <div class="img">
                            <img src="{{ asset('frontend_asset') }}/images/WhyAn.png" alt="">
                        </div>

                        <h3>STUDENT</h3>
                        <h4>ENGAGEMENT</h5>

                    </div>

                    <div class="WhyAnItem Total">

                        <h3>{{ home_content('student_in_total') }}</h3>
                        <h4>STUDENTS IN TOTAL</h5>

                    </div>

                    <div class="TwoPart d_flex d_justify">

                        <div class="WhyAnItem Reach">

                            <h3>{{ home_content('student_reach') }}</h3>
                            <h4>STUDENTS REACH</h5>

                        </div>

                        <div class="WhyAnItem Registration">

                            <h3>{{ home_content('student_registration') }}</h3>
                            <h4>STUDENTS REGISTRATION</h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
