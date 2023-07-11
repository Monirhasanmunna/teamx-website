<section id="OurPartnar">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">

                <div class="header text-center">
                    <h4>WE WORK WITH THE</h3>
                    <h2>BEST PARTNERS</h2>
                </div>

            </div>

        </div>

        <div class="OurPartnarContent">

            <div class="row">

                <div class="col-lg-12">

                    <div class="owl-carousel owl-theme our_partner">

                        @foreach ($best_partners as $best_partner)

                            <div class="item">
                                
                                <div class="OurPartnarItem">
                                    <div class="img">
                                        <img src="{{ $best_partner['photo'] }}" alt="">
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