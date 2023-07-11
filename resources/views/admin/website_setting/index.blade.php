@extends('layouts.admin')

@section('setting') active @endsection

@section('admin_content')
    <div class="main-container container-fluid">
        <section id="GeneralSettings">
            {{-- Menu --}}
            <div class="card col-lg-6 mx-auto mb-5">
                <div class="card-header">
                    <h3 class="card-title text-primary">Menu</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_setting') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- menu_home --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_home" placeholder="Home" value="{{ general_setting('menu_home') }}">
                                    <input type="hidden" name="types[]" value="menu_home">
                                </div>
                            </div>

                            {{-- About Us --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_about_us" placeholder="About Us" value="{{ general_setting('menu_about_us') }}">
                                    <input type="hidden" name="types[]" value="menu_about_us">
                                </div>
                            </div>

                            {{-- Advisors --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_advisor" placeholder="Advisors" value="{{ general_setting('menu_advisor') }}">
                                    <input type="hidden" name="types[]" value="menu_advisor">
                                </div>
                            </div>

                            {{-- Our Team --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_our_team" placeholder="Our Team" value="{{ general_setting('menu_our_team') }}">
                                    <input type="hidden" name="types[]" value="menu_our_team">
                                </div>
                            </div>

                            {{-- Gallery --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_gallery" placeholder="Gallery" value="{{ general_setting('menu_gallery') }}">
                                    <input type="hidden" name="types[]" value="menu_gallery">
                                </div>
                            </div>

                            {{-- Events --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_event" placeholder="Events" value="{{ general_setting('menu_event') }}">
                                    <input type="hidden" name="types[]" value="menu_event">
                                </div>
                            </div>

                            {{-- Faq --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_faq" placeholder="Faq" value="{{ general_setting('menu_faq') }}">
                                    <input type="hidden" name="types[]" value="menu_faq">
                                </div>
                            </div>

                            {{-- Contact --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="menu_contact" placeholder="Contact" value="{{ general_setting('menu_contact') }}">
                                    <input type="hidden" name="types[]" value="menu_contact">
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
