@extends('layouts.admin')

@section('others_banner') active @endsection


@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            {{-- About Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">About Banner</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_others_banner') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- about_banner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> About Banner Image <span class="text-red">(Size Must be: width-1600px; height-500px)</span></label>
                                    <input type="file" class="dropify" name="about_banner" data-bs-height="180" data-default-file="{{ asset(others_banner('about_banner')) }}"/>
                                    <input type="hidden" name="types[]" value="about_banner">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- advisor_banner Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Advisor Banner</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_others_banner') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- advisor_banner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Advisor Banner Image <span class="text-red">(Size Must be: width-1600px; height-500px)</span></label>
                                    <input type="file" class="dropify" name="advisor_banner" data-bs-height="180" data-default-file="{{ asset(others_banner('advisor_banner')) }}"/>
                                    <input type="hidden" name="types[]" value="advisor_banner">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- our_team_banner Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Our Team Banner</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_others_banner') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- our_team_banner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Our Team Banner Image <span class="text-red">(Size Must be: width-1600px; height-500px)</span></label>
                                    <input type="file" class="dropify" name="our_team_banner" data-bs-height="180" data-default-file="{{ asset(others_banner('our_team_banner')) }}"/>
                                    <input type="hidden" name="types[]" value="our_team_banner">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- gallery_banner Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Gallery Banner</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_others_banner') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- gallery_banner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Gallery Banner Image <span class="text-red">(Size Must be: width-1600px; height-500px)</span></label>
                                    <input type="file" class="dropify" name="gallery_banner" data-bs-height="180" data-default-file="{{ asset(others_banner('gallery_banner')) }}"/>
                                    <input type="hidden" name="types[]" value="gallery_banner">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- event_banner Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Event Banner</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_others_banner') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- event_banner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Event Banner Image <span class="text-red">(Size Must be: width-1600px; height-500px)</span></label>
                                    <input type="file" class="dropify" name="event_banner" data-bs-height="180" data-default-file="{{ asset(others_banner('event_banner')) }}"/>
                                    <input type="hidden" name="types[]" value="event_banner">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- faq_banner Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Faq Banner</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_others_banner') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- faq_banner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Faq Banner Image <span class="text-red">(Size Must be: width-1600px; height-500px)</span></label>
                                    <input type="file" class="dropify" name="faq_banner" data-bs-height="180" data-default-file="{{ asset(others_banner('faq_banner')) }}"/>
                                    <input type="hidden" name="types[]" value="faq_banner">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

            {{-- contact_banner Banner--}}
            <div class="card col-lg-10 mx-auto mb-6">
                <div class="card-header">
                    <h3 class="card-title text-primary">Contact Banner</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_others_banner') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- contact_banner --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Contact Banner Image <span class="text-red">(Size Must be: width-1600px; height-500px)</span></label>
                                    <input type="file" class="dropify" name="contact_banner" data-bs-height="180" data-default-file="{{ asset(others_banner('contact_banner')) }}"/>
                                    <input type="hidden" name="types[]" value="contact_banner">
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
