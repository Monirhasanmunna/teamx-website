@extends('layouts.frontend')

@section('menu_gallery') active @endsection

@section('frontend_content')



<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OtherBanner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="OtherBanner">

    <div class="about_img">
        <img src="{{ asset(others_banner('gallery_banner')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="OtherBannerContent">
                    <h1>Gallery</h1>
                </div>

            </div>

        </div>

    </div>

</section>



<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Gallery PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Gallery">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">
                    <h4>CAMBRIAN SSC QUIZ CONTEST 2022</h4>
                    <h2>GALLERY</h2>
                </div>

            </div>

        </div>

        <div class="GalleryContent">

            <div class="row">

                @foreach ( $gallerys as $gallery)

                    <div class="col-lg-3 col-sm-6">

                        <div class="GalleryImg">

                            <img src="{{ asset($gallery->photo) }}" alt="">

                            <div class="overlay">
                                <a class="my-image-links" data-gall="gallery01" href="{{ asset($gallery->photo) }}">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>

                        </div>

                    </div>
                    
                @endforeach

            </div>

        </div>

    </div>

</section>



@endsection
