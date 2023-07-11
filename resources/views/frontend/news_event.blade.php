@extends('layouts.frontend')

@section('menu_event') active @endsection

@section('frontend_content')



<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OtherBanner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="OtherBanner">

    <div class="about_img">
        <img src="{{ asset(others_banner('event_banner')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="OtherBannerContent">
                    <h1>NEWS & EVENTS</h1>
                </div>

            </div>

        </div>

    </div>

</section>



<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START NewsEvent PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="NewsEvent">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">
                    <h4>CAMBRIAN SSC QUIZ CONTEST 2022</h3>
                    <h2>NEWS & EVENTS</h2>
                </div>

            </div>

        </div>

    </div>

</section>




@endsection