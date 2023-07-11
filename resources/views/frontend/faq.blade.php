@extends('layouts.frontend')

@section('menu_faq') active @endsection

@section('frontend_content')



<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OtherBanner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="OtherBanner">

    <div class="about_img">
        <img src="{{ asset(others_banner('faq_banner')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="OtherBannerContent">
                    <h1>Faq</h1>
                </div>

            </div>

        </div>

    </div>

</section>

<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START NewsEvent PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Faq">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">
                    <h4>SSC QUIZ CONTEST</h3>
                    <h2>FAQ</h2>
                </div>

            </div>

        </div>

        <div class="FaqContent">

            <div class="row">

                <div class="col-lg-7">

                    <div class="WhyAntabs">

                        <div class="accordion" id="accordionExample">

                          @foreach ($faqs as $faq)

                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_{{ $faq->id }}" aria-expanded="true" aria-controls="collapseOne">
                                        {{ $faq->title }}
                                    </button>
                                </h2>

                                <div id="collapseOne_{{ $faq->id }}" class="accordion-collapse collapse  @if ($loop->first) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> {{ $faq->description }}</p>
                                    </div>
                                </div>

                              </div>

                          @endforeach

                        </div>

                    </div>

                    <!-- <div class="FaqQuestion">

                        <div class="WhyAntabs">

                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Accordion Item 
                                    </button>
                                  </h2>

                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <p>Bangladesh's new economic growth engine is the ICT sector. Since Digital Bangladesh is an important part of the current government's vision, the country is committed to making significant development in the ICT industry in order to realize Digital Bangladesh.</p>
                                    </div>
                                  </div>

                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Accordion Item #2
                                    </button>
                                  </h2>

                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>

                                  </div>

                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Accordion Item #3
                                    </button>
                                  </h2>

                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                  </div>

                                </div>

                            </div>

                        </div>

                    </div> -->

                </div>

                <div class="col-lg-5">

                    <div class="FaqForm">

                        <h3>Do you have any other questions?</h3>

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