@extends('layouts.frontend')

@section('menu_advisor') active @endsection

@section('frontend_content')



<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OtherBanner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="OtherBanner">

    <div class="about_img">
        <img src="{{ asset(others_banner('advisor_banner')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="OtherBannerContent">
                    <h1>ADVISORS</h1>
                </div>

            </div>

        </div>

    </div>

</section>


<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Advisore PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Advisore">

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

            </div>
            
        </div>

    </div>

</section>


@endsection