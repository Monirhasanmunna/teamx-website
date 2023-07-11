@extends('layouts.frontend')


@section('menu_our_team') active @endsection

@section('frontend_content')


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OtherBanner PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="OtherBanner">

    <div class="about_img">
        <img src="{{ asset(others_banner('our_team_banner')) }}" alt="">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="OtherBannerContent">
                    <h1>Team</h1>
                </div>

            </div>

        </div>

    </div>

</section>


<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START TeamMamber PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="TeamMamber">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">
                
                <div class="header text-center">
                    <h2>Our TEAM Members</h2>
                </div>

            </div>

        </div>

        <div class="TeamMamberContent">

            <div class="row">

                <div class="col lg-12">

                    <div class="TeamMamberTabs">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-BoardDirector-tab" data-bs-toggle="pill" data-bs-target="#pills-BoardDirector" type="button" role="tab" aria-controls="pills-BoardDirector" aria-selected="true">Advisores</button>
                            </li>

                            <!-- <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-AdminHR-tab" data-bs-toggle="pill" data-bs-target="#pills-AdminHR" type="button" role="tab" aria-controls="pills-AdminHR" aria-selected="false">Admin & HR</button>
                            </li>

                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-Marketing-tab" data-bs-toggle="pill" data-bs-target="#pills-Marketing" type="button" role="tab" aria-controls="pills-Marketing" aria-selected="false">Marketing</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Development-tab" data-bs-toggle="pill" data-bs-target="#pills-Development" type="button" role="tab" aria-controls="pills-Development" aria-selected="false">Development</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Partners-tab" data-bs-toggle="pill" data-bs-target="#pills-Partners" type="button" role="tab" aria-controls="pills-Partners" aria-selected="false">Partners</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-OfficeStaff-tab" data-bs-toggle="pill" data-bs-target="#pills-OfficeStaff" type="button" role="tab" aria-controls="pills-OfficeStaff" aria-selected="false">Office Staff</button>
                            </li> -->

                        </ul>

                    </div>

                    <div class="TeamMamberTabsContent">

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-BoardDirector" role="tabpanel" aria-labelledby="pills-BoardDirector-tab">

                                <div class="row">

                                    @foreach ($our_teams as $our_team)

                                        <div class="col-lg-3 col-sm-6">

                                            <div class="TeamTabsItem">

                                                <div class="img">
                                                    <img src="{{ asset($our_team->photo) }}" alt="">
                                                </div>
            
                                                <div class="text">
                                                    <h3>{{ $our_team->name }}</h3>
                                                    <p>{{ $our_team->title }}</p>
                                                </div>
            
                                            </div>

                                        </div>

                                    @endforeach

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-AdminHR" role="tabpanel" aria-labelledby="pills-AdminHR-tab">

                                <div class="row">

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- <div class="tab-pane fade" id="pills-Marketing" role="tabpanel" aria-labelledby="pills-Marketing-tab">

                                <div class="row">

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-Development" role="tabpanel" aria-labelledby="pills-Development-tab">

                                <div class="row">

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-Partners" role="tabpanel" aria-labelledby="pills-Partners-tab">

                                <div class="row">

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-OfficeStaff" role="tabpanel" aria-labelledby="pills-OfficeStaff-tab">

                                <div class="row">

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-1.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-sm-6">

                                        <div class="TeamTabsItem">

                                            <div class="img">
                                                <img src="frontend_asset/images/gal-2.jpg" alt="">
                                            </div>
        
                                            <div class="text">
                                                <h3>Name</h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                            </div>
        
                                        </div>

                                    </div>

                                </div>

                            </div> -->

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Team PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
<section id="Team">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 m-auto">
                
                <div class="header text-center">
                    <h2>Our Partners</h2>
                </div>

            </div>

        </div>

        <div class="TeamContent">

            <div class="row">

                <div class="col-lg-12">

                    <div class="TeamItem">

                        <div class="selectItem d_flex">

                            <div class="customeInout">
    
                                <label>Select Division</label>
                                <select name="">
                                    <option value="">Dhaka</option>
                                    <option value="">Feni</option>
                                </select>
    
                            </div>
    
                            <div class="customeInout">
    
                                <label>Select Division</label>
                                <select name="">
                                    <option value="">Dhaka</option>
                                    <option value="">Feni</option>
                                </select>
    
                            </div>
    
                        </div>

                        <h3>DIVISION TEAM MEMBERS</h3>

                        <div class="table">

                            <table class="table">

                                <tr>
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Division</th>
                                    <th>Phone</th>
                                </tr>
    
                                <tr>
                                    <td>01</td>
                                    <td>Masud</td>
                                    <td>Dhaka</td>
                                    <td>00000000000</td>
                                </tr>
    
                                <tr>
                                    <td colspan="4" class="Reset">
                                        <button class="bg">RESET</button>
                                    </td>
                                </tr>
    
                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection