@extends('layouts.admin')

@section('about_page') active @endsection


@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            {{-- Know About--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Know About Section</h3>
                </div>

                <div class="card-body">

                    <form action="{{ route('update_about_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- know_about_img --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Know About Image  <span class="text-red">(Size: Width-650px, Height-500px)</span></label>
                                    <input type="file" class="dropify" name="know_about_img" data-bs-height="180" data-default-file="{{ asset(about_us_content('know_about_img')) }}"/>
                                    <input type="hidden" name="types[]" value="know_about_img">
                                </div>
                            </div>

                            {{-- know_about_header --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Header<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="know_about_header" placeholder="Header" value="{{ about_us_content('know_about_header') }}">
                                    <input type="hidden" name="types[]" value="know_about_header">
                                </div>
                            </div>

                            {{-- know_about_title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="know_about_title" placeholder="Lets Build" value="{{ about_us_content('know_about_title') }}">
                                    <input type="hidden" name="types[]" value="know_about_title">
                                </div>
                            </div>

                            {{-- know_about_description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="know_about_description" placeholder="know_about_description" rows="5">{{ about_us_content('know_about_description') }}</textarea>
                                    <input type="hidden" name="types[]" value="know_about_description">
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- About Mission Vission--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Mission Vission Section</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_about_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Mission_img --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Mission Image <span class="text-red">(Size: Width-320px, Height-220px)</span></label>
                                    <input type="file" class="dropify" name="mission_img" data-bs-height="180" data-default-file="{{ asset(about_us_content('mission_img')) }}"/>
                                    <input type="hidden" name="types[]" value="mission_img">
                                </div>
                            </div>

                            {{-- Mission description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Mission Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="mission_description" placeholder="mission_description" rows="5">{{ about_us_content('mission_description') }}</textarea>
                                    <input type="hidden" name="types[]" value="mission_description">
                                </div>
                            </div>

                            {{-- Vission_img --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Vission Image <span class="text-red">(Size: Width-320px, Height-220px)</span></label>
                                    <input type="file" class="dropify" name="vission_img" data-bs-height="180" data-default-file="{{ asset(about_us_content('vission_img')) }}"/>
                                    <input type="hidden" name="types[]" value="vission_img">
                                </div>
                            </div>

                            {{-- Vission description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Vission Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="vission_description" placeholder="vission_description" rows="5">{{ about_us_content('vission_description') }}</textarea>
                                    <input type="hidden" name="types[]" value="vission_description">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- About mission_vission_programm --}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Programm Details Section</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_about_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Program Title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Program Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="program_title" placeholder="Header" value="{{ about_us_content('program_title') }}">
                                    <input type="hidden" name="types[]" value="program_title">
                                </div>
                            </div>

                            {{-- Program Type --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Program Type<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="program_type" placeholder="Header" value="{{ about_us_content('program_type') }}">
                                    <input type="hidden" name="types[]" value="program_type">
                                </div>
                            </div>

                            {{-- Program Participation --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Program Participation<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="program_participation" placeholder="program_participation" rows="5">{{ about_us_content('program_participation') }}</textarea>
                                    <input type="hidden" name="types[]" value="program_participation">
                                </div>
                            </div>

                            {{-- Program Encourages --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Program Encourages<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="program_encourages" placeholder="program_encourages" rows="5">{{ about_us_content('program_encourages') }}</textarea>
                                    <input type="hidden" name="types[]" value="program_encourages">
                                </div>
                            </div>

                            {{-- Program Campaign --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Program Campaign<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="program_campaign" placeholder="program_campaign" rows="5">{{ about_us_content('program_campaign') }}</textarea>
                                    <input type="hidden" name="types[]" value="program_campaign">
                                </div>
                            </div>

                            {{-- Program Telecast --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Program Telecast<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="program_telecast" placeholder="program_telecast" rows="5">{{ about_us_content('program_telecast') }}</textarea>
                                    <input type="hidden" name="types[]" value="program_telecast">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- About KEY OBJECTIVES--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Key Objective Section</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_about_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Key Objective --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Key Objective Video Link <span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="key_objective_video_link" placeholder="Header" value="{{ about_us_content('key_objective_video_link') }}">
                                    <input type="hidden" name="types[]" value="key_objective_video_link">
                                </div>
                            </div>

                            {{-- Vission description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Add Key Objective Description<span class="text-red">*</span></label>
                                    <a href="{{ route('key_objective.index') }}" class="btn bg-success" style="color: #FFF; width: 100%"> Add Data </a>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- About POINT TO FOCUS--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Point Of Focus Section</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_about_page') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- point_focus_1 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Number 1 <span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="point_focus_1" placeholder="point_focus" value="{{ about_us_content('point_focus_1') }}">
                                    <input type="hidden" name="types[]" value="point_focus_1">
                                </div>
                            </div>

                            {{-- point_focus_2 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Number 2 <span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="point_focus_2" placeholder="point_focus" value="{{ about_us_content('point_focus_2') }}">
                                    <input type="hidden" name="types[]" value="point_focus_2">
                                </div>
                            </div>

                            {{-- point_focus_3 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Number 3 <span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="point_focus_3" placeholder="point_focus" value="{{ about_us_content('point_focus_3') }}">
                                    <input type="hidden" name="types[]" value="point_focus_3">
                                </div>
                            </div>

                            {{-- point_focus_4 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Number 4 <span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="point_focus_4" placeholder="point_focus" value="{{ about_us_content('point_focus_4') }}">
                                    <input type="hidden" name="types[]" value="point_focus_4">
                                </div>
                            </div>

                            {{-- point_focus_5 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Number 5 <span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="point_focus_5" placeholder="point_focus" value="{{ about_us_content('point_focus_5') }}">
                                    <input type="hidden" name="types[]" value="point_focus_5">
                                </div>
                            </div>

                            {{-- point_focus_6 --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Number 6 <span class="text-red"></span></label>
                                    <input type="text" class="form-control" name="point_focus_6" placeholder="point_focus" value="{{ about_us_content('point_focus_6') }}">
                                    <input type="hidden" name="types[]" value="point_focus_6">
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
