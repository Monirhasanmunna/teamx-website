@extends('layouts.frontend')


@section('menu_contact') active @endsection

@section('frontend_content')



<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OtherBanner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="OtherBanner">

    <div class="about_img">
        <img src="{{ asset(others_banner('contact_banner')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="OtherBannerContent">
                    <h1>CONTACT US</h1>
                </div>

            </div>

        </div>

    </div>

</section>



<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Contact PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Contact">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">
                    <h4>CAMBRIAN SSC QUIZ CONTEST 2022</h3>
                    <h2>STAY CONNECTED</h2>
                </div>

            </div>

        </div>

        <div class="ContactConent">

            <div class="row">

                <div class="col-lg-5">

                    <div class="ContactAddress">

                        <ul>

                            <li class="d_flex">

                                <div class="svg">
                                    <i class="fas fa-phone-alt"></i>
                                </div>

                                <div class="text">
                                    <h6>Contact Us</h6>
                                    <a href="tel:{{ general_setting('app_phone') }}">{{ general_setting('app_phone') }}</a>
                                </div>

                            </li>

                            <li class="d_flex">

                                <div class="svg">
                                    <i class="fas fa-envelope"></i>
                                </div>

                                <div class="text">
                                    <h6>Email Us</h6>
                                    <a href="mailto:{{ general_setting('app_email') }}">{{ general_setting('app_email') }}</a>
                                </div>

                            </li>

                            <li class="d_flex">

                                <div class="svg">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>

                                <div class="text">
                                    <h6>Address</h6>
                                    <p>{{ general_setting('app_address') }}</p>
                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="FaqForm">

                        <form action="{{ route('any_question.store') }}" method="POST">

                            @csrf
  
                              <div class="custome_input">
                                  <input type="text" name="name" placeholder="Full Name">
                              </div>
  
                              <div class="custome_input">
                                  <input type="text" name="email" placeholder="Enter Your Email">
                              </div>
  
                              <div class="custome_input">
                                  <textarea name="msg" rows="5" placeholder="Write your message"></textarea>
                              </div>
  
                              <div class="custome_input">
                                  <button type="submit" class="bg">SEND QUESTION</button>
                              </div>
  
                          </form>

                    </div>

                </div>

            </div>
            
        </div>
        

    </div>

</section>


@endsection