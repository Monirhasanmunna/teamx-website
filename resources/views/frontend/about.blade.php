@extends('layouts.frontend')

@section('menu_about_us') active @endsection

@section('frontend_content')


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OtherBanner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="OtherBanner">

    <div class="about_img">
        <img src="{{ asset(others_banner('about_banner')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="OtherBannerContent">
                    <h1>About Us</h1>
                </div>

            </div>

        </div>

    </div>

</section>



<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START AboutPart PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<div class="About AboutPages">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="AboutPagesContent">

                    <h4>{{ about_us_content('know_about_header') }}</h4>
                    <h2>{{ about_us_content('know_about_title') }}</h2>

                    <p>{{ about_us_content('know_about_description') }}</p>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="AboutPagesImg">

                    <div class="img">
                        <img src="{{ asset(about_us_content('know_about_img')) }}" alt="">
                        <div class="overlay">
                            <h5>HOW TO</h5>
                            <h2>PARTICIPATE</h2>
                        </div>
                    </div>

                   <a href="" class="bg">Registration</a>

                </div>

            </div>

        </div>

    </div>

</div>


<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Banner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->

<section id="MissionVission">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="MissionVissionLeft">

                    <div class="row">
                        
                        <div class="col-lg-6 col-sm-6">

                            <div class="MissionVissionLeftContent">

                                <div class="img">
                                    <img src="{{ asset(about_us_content('mission_img')) }}" alt="">
                                </div>

                                <div class="text">

                                    <h3>Mission</h3>
                                    <p>{{ about_us_content('mission_description') }}</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6 col-sm-6">

                            <div class="MissionVissionLeftContent">

                                <div class="img">
                                    <img src="{{ asset(about_us_content('vission_img')) }}" alt="">
                                </div>

                                <div class="text">

                                    <h3>Vission</h3>
                                    <p>{{ about_us_content('vission_description') }}</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="MissionVissionRight">

                    <h4>PROGRAM</h3>
                    <h2>DETAILS</h2>

                    <div class="MissionVissionItem">
                        <h5>Program Title</h3>
                        <p>{{ about_us_content('program_title') }}</p>
                    </div>

                    <div class="MissionVissionItem">
                        <h5>Program Type</h3>
                        <p>{{ about_us_content('program_type') }}</p>
                    </div>

                    <div class="MissionVissionItem">
                        <h5>Participation</h3>
                        <p>Student as follow:</p>
                        <p>{{ about_us_content('program_participation') }}</p>
                    </div>

                    <div class="MissionVissionItem">
                        <h5>Encourages</h3>
                        <p>{{ about_us_content('program_encourages') }}</p>
                    </div>

                    <div class="MissionVissionItem">
                        <h5>Campaign</h3>
                        <p>{{ about_us_content('program_encourages') }}</p>
                    </div>

                    <div class="MissionVissionItem">
                        <h5>Live Telecast</h3>
                        <p>{{ about_us_content('program_campaign') }}</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Banner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="KeyObject">

    <div class="container">

        <div class="row d_flex">

            <div class="col-lg-6">

                <div class="KeyObjectContent">

                    <h4>CAMBRIAN SSC QUIZ CONTEST 2022</h4>
                    <h2>KEY OBJECTIVES</h2>

                    <ul>
                        @foreach ($key_objectives as $key_objective)
                            <li>{{ $key_objective->description }}</li>
                        @endforeach
                    </ul>

                </div>

            </div>

            <div class="col-lg-6">
                <div class="KeyObjectVideo">
                    <iframe height="350" src="https://www.youtube.com/embed/Oa9aWdcCC4o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        </div>

    </div>

</section>

<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START PoingFocus PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="PoingFocus">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">
                    <h4>CAMBRIAN SSC QUIZ CONTEST</h4>
                    <h2>POINT TO FOCUS</h2>
                </div>

            </div>

        </div>

        <!-- PoingFocusContent -->
        <div class="PoingFocusContent">

            <div class="row">

                <div class="col-lg-4 col-sm-6">

                    <div class="PoingFocusItem">

                        <div class="Circle">
                            <span>01</span>
                        </div>

                        <p>{{ about_us_content('point_focus_1') }}</p>

                    </div>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <div class="PoingFocusItem secnd">

                        <div class="Circle">
                            <span>02</span>
                        </div>

                        <p>{{ about_us_content('point_focus_2') }}</p>

                    </div>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <div class="PoingFocusItem third">

                        <div class="Circle">
                            <span>3</span>
                        </div>

                        <p>{{ about_us_content('point_focus_3') }}</p>

                    </div>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <div class="PoingFocusItem third">

                        <div class="Circle">
                            <span>04</span>
                        </div>

                        <p>{{ about_us_content('point_focus_4') }}</p>

                    </div>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <div class="PoingFocusItem">

                        <div class="Circle">
                            <span>05</span>
                        </div>

                        <p>{{ about_us_content('point_focus_5') }}</p>

                    </div>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <div class="PoingFocusItem secnd">

                        <div class="Circle">
                            <span>06</span>
                        </div>

                        <p>{{ about_us_content('point_focus_6') }}</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



@endsection