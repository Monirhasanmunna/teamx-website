@extends('layouts.admin')

@section('home_page') active @endsection
@push('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<style>
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
    .toggle.ios .toggle-handle { border-radius: 20px; }
  </style>
@endpush

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            {{-- Home Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Home Banner</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            {{-- Bannner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Banner Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="banner_img" data-bs-height="180" data-default-file="{{ asset(home_content('banner_img')) }}"/>
                                    <input type="hidden" name="types[]" value="banner_img">
                                </div>
                            </div>
                            
                            {{-- Countdown --}}
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-10 col-9">
                                        <div class="form-group">
                                            <label class="form-label">Countdown<span class="text-red">*</span></label>
                                            <input type="datetime-local" class="form-control" name="countdown" value="{{ home_content('countdown') }}" placeholder="Countdown">
                                            <input type="hidden" name="types[]" value="countdown">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-3">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <input type="checkbox" {{$home_pages[1]->status == true ? 'checked' : ''}} name="status" value="1" data-toggle="toggle" data-style="ios">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- header --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Header<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="exam_time" placeholder="Header" value="{{ home_content('exam_time') }}">
                                    <input type="hidden" name="types[]" value="exam_time">
                                </div>
                            </div>

                            {{-- lets build --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Lets Build<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="lets_build" placeholder="Lets Build" value="{{ home_content('lets_build') }}">
                                    <input type="hidden" name="types[]" value="lets_build">
                                </div>
                            </div>

                            {{-- Together --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Together<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="together" placeholder="Together" value="{{ home_content('together') }}">
                                    <input type="hidden" name="types[]" value="together">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="5">{{ home_content('description') }}</textarea>
                                    <input type="hidden" name="types[]" value="description">
                                </div>
                            </div>


                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            {{-- Home About --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Home About</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" value="{{ home_content('title') }}" placeholder="Title">
                                    <input type="hidden" name="types[]" value="title">
                                </div>
                            </div>

                            {{-- header --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Header<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="header" placeholder="Header" value="{{ home_content('header') }}">
                                    <input type="hidden" name="types[]" value="header">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="about_description" placeholder="Description" rows="5">{{ home_content('about_description') }}</textarea>
                                    <input type="hidden" name="types[]" value="about_description">
                                </div>
                            </div>

                            {{-- Know More Link --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Know More<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="know_more" placeholder="Link" value="{{ home_content('know_more') }}">
                                    <input type="hidden" name="types[]" value="know_more">
                                </div>
                            </div>

                            {{-- Advisors --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Advisors<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="advisors" placeholder="Advisors" value="{{ home_content('advisors') }}">
                                    <input type="hidden" name="types[]" value="advisors">
                                </div>
                            </div>

                            {{-- Mentor --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Mentors<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="mentor" placeholder="Mentors" value="{{ home_content('mentor') }}">
                                    <input type="hidden" name="types[]" value="mentor">
                                </div>
                            </div>

                            {{-- Participants --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Participants<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="participants" placeholder="Participants" value="{{ home_content('participants') }}">
                                    <input type="hidden" name="types[]" value="participants">
                                </div>
                            </div>

                            {{-- Institution --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Institution<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="institution" placeholder="Institution" value="{{ home_content('institution') }}">
                                    <input type="hidden" name="types[]" value="institution">
                                </div>
                            </div>

                            {{-- Upozila --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Upozila<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="upozila" placeholder="Upozila" value="{{ home_content('upozila') }}">
                                    <input type="hidden" name="types[]" value="upozila">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- Home WHAT YOU WILL GET --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">WHAT YOU WILL GET</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{--  WHAT YOU WILL --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">  What You Will Get Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="what_you_will_get_img" data-bs-height="180" data-default-file="{{ asset(home_content('what_you_will_get_img')) }}"/>
                                    <input type="hidden" name="types[]" value="what_you_will_get_img">
                                </div>
                            </div>

                            {{-- header --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Header<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="registration_header" placeholder="Header" value="{{ home_content('registration_header') }}">
                                    <input type="hidden" name="types[]" value="registration_header">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <a href="{{ route('what_you_get.index') }}" class="btn bg-success" style="color: #FFF; width: 100%"> Add Description </a>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- Home SIX CATEGORIES --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Six Categories Image</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{--  Desktop Image --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">  Desktop Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="six_desktop_img" data-bs-height="180" data-default-file="{{ asset(home_content('six_desktop_img')) }}"/>
                                    <input type="hidden" name="types[]" value="six_desktop_img">
                                </div>
                            </div>

                            {{--  Mobile Image --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">  Mobile Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="six_mobile_img" data-bs-height="180" data-default-file="{{ asset(home_content('six_mobile_img')) }}"/>
                                    <input type="hidden" name="types[]" value="six_mobile_img">
                                </div>
                            </div>

                            {{-- Title 1 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 1<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_title_1" placeholder="Header" value="{{ home_content('six_desktop_title_1') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_title_1">
                                </div>
                            </div>

                            {{-- Age 1 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Age 1<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_age_1" placeholder="Header" value="{{ home_content('six_desktop_age_1') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_age_1">
                                </div>
                            </div>

                            {{-- Description 1 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description 1<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_description_1" placeholder="Header" value="{{ home_content('six_desktop_description_1') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_description_1">
                                </div>
                            </div>

                            {{-- Title 2 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 2<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_title_2" placeholder="Header" value="{{ home_content('six_desktop_title_2') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_title_2">
                                </div>
                            </div>

                            {{-- Age 2 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Age 2<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_age_2" placeholder="Header" value="{{ home_content('six_desktop_age_2') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_age_2">
                                </div>
                            </div>

                            {{-- Description 2 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description 2<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_description_2" placeholder="Header" value="{{ home_content('six_desktop_description_2') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_description_2">
                                </div>
                            </div>

                            {{-- Title 3 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 3<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_title_3" placeholder="Header" value="{{ home_content('six_desktop_title_3') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_title_3">
                                </div>
                            </div>

                            {{-- Age 3 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Age 3<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_age_3" placeholder="Header" value="{{ home_content('six_desktop_age_3') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_age_3">
                                </div>
                            </div>

                            {{-- Description 3 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description 3<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_description_3" placeholder="Header" value="{{ home_content('six_desktop_description_3') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_description_3">
                                </div>
                            </div>

                            {{-- Title 4 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 4<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_title_4" placeholder="Header" value="{{ home_content('six_desktop_title_4') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_title_4">
                                </div>
                            </div>

                            {{-- Age 4 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Age 4<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_age_4" placeholder="Header" value="{{ home_content('six_desktop_age_4') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_age_4">
                                </div>
                            </div>

                            {{-- Description 4 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description 4<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_description_4" placeholder="Header" value="{{ home_content('six_desktop_description_4') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_description_4">
                                </div>
                            </div>

                            {{-- Title 5 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 5<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_title_5" placeholder="Header" value="{{ home_content('six_desktop_title_5') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_title_5">
                                </div>
                            </div>

                            {{-- Age 5 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Age 5<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_age_5" placeholder="Header" value="{{ home_content('six_desktop_age_5') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_age_5">
                                </div>
                            </div>

                            {{-- Description 5 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description 5<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_description_5" placeholder="Header" value="{{ home_content('six_desktop_description_5') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_description_5">
                                </div>
                            </div>

                            {{-- Title 6 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title 6<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_title_6" placeholder="Header" value="{{ home_content('six_desktop_title_6') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_title_6">
                                </div>
                            </div>

                            {{-- Age 6 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Age 6<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_age_6" placeholder="Header" value="{{ home_content('six_desktop_age_6') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_age_6">
                                </div>
                            </div>

                            {{-- Description 6 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description 6<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="six_desktop_description_6" placeholder="Header" value="{{ home_content('six_desktop_description_6') }}">
                                    <input type="hidden" name="types[]" value="six_desktop_description_6">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- Home Ten Segment --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">10 Segments</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Add Data --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Add Data 10 Segment<span class="text-red">*</span></label>
                                    <a href="{{ route('ten_segment.index') }}" class="btn bg-success" style="color: #FFF; width: 100%"> Add Data </a>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- Home Four Round --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Four Round</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Round 1 Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 1 Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_1_title" value="{{ home_content('Round_1_title') }}" placeholder="Title">
                                    <input type="hidden" name="types[]" value="Round_1_title">
                                </div>
                            </div>

                            {{-- Round 1 Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 1 Description<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_1_description" placeholder="description" value="{{ home_content('Round_1_description') }}">
                                    <input type="hidden" name="types[]" value="Round_1_description">
                                </div>
                            </div>

                            {{-- Round 2 Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 2 Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_2_title" value="{{ home_content('Round_2_title') }}" placeholder="Title">
                                    <input type="hidden" name="types[]" value="Round_2_title">
                                </div>
                            </div>

                            {{-- Round 2 Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 2 Description<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_2_description" placeholder="description" value="{{ home_content('Round_2_description') }}">
                                    <input type="hidden" name="types[]" value="Round_2_description">
                                </div>
                            </div>

                            {{-- Round 3 Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 3 Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_3_title" value="{{ home_content('Round_3_title') }}" placeholder="Title">
                                    <input type="hidden" name="types[]" value="Round_3_title">
                                </div>
                            </div>

                            {{-- Round 3 Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 3 Description<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_3_description" placeholder="description" value="{{ home_content('Round_3_description') }}">
                                    <input type="hidden" name="types[]" value="Round_3_description">
                                </div>
                            </div>

                            {{-- Round 4 Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 4 Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_4_title" value="{{ home_content('Round_4_title') }}" placeholder="Title">
                                    <input type="hidden" name="types[]" value="Round_3_title">
                                </div>
                            </div>

                            {{-- Round 4 Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Round 4 Description<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="Round_4_description" placeholder="description" value="{{ home_content('Round_4_description') }}">
                                    <input type="hidden" name="types[]" value="Round_4_description">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- Home ROADMAP --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Road Map Image</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{--  Road Map Image --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="road_map_img" data-bs-height="180" data-default-file="{{ asset(home_content('road_map_img')) }}"/>
                                    <input type="hidden" name="types[]" value="road_map_img">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- Home WHY AN --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Why AN</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_home_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="why_an_title" value="{{ home_content('why_an_title') }}" placeholder="Title">
                                    <input type="hidden" name="types[]" value="why_an_title">
                                </div>
                            </div>

                            {{-- header --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Header<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="why_an_header" placeholder="Header" value="{{ home_content('why_an_header') }}">
                                    <input type="hidden" name="types[]" value="why_an_header">
                                </div>
                            </div>

                            {{-- STUDENTS IN TOTAL --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Student In Total<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="student_in_total" placeholder="Header" value="{{ home_content('student_in_total') }}">
                                    <input type="hidden" name="types[]" value="student_in_total">
                                </div>
                            </div>

                            {{-- STUDENTS REACH --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Student Reach<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="student_reach" placeholder="Header" value="{{ home_content('student_reach') }}">
                                    <input type="hidden" name="types[]" value="student_reach">
                                </div>
                            </div>

                            {{-- STUDENTS REGISTRATION --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Student Registration<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="student_registration" placeholder="Header" value="{{ home_content('student_registration') }}">
                                    <input type="hidden" name="types[]" value="student_registration">
                                </div>
                            </div>

                            {{-- Add Data --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Add Data Why An<span class="text-red">*</span></label>
                                    <a href="{{ route('why_an.index') }}" class="btn bg-success" style="color: #FFF; width: 100%"> Add Data </a>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </section>

    </div>
@endsection
@push('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush