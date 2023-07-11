@extends('layouts.admin')

@section('bestpartner') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings" class="mb-5">

            <div class="card col-lg-10 m-auto m-5">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <div class="card-body">

                <form action="{{ route('advisor.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{ $advisor->id }}">
                        <input type="hidden" name="old_photo" value="{{ $advisor->photo }}">

                        <div class="row">

                            {{--  photo --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="photo" data-bs-height="180" data-default-file="{{ asset($advisor->photo) }}"/>
                                </div>
                            </div>

                            {{-- Name --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Name<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $advisor->name }}">
                                </div>
                            </div>

                            {{-- title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $advisor->title }}">
                                </div>
                            </div>

                            {{-- fb link --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">FB Link<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="fb_link" placeholder="FB Link" value="{{ $advisor->fb_link }}">
                                </div>
                            </div>

                            {{-- youtube link --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Youtube Link<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="youtube_link" placeholder="Youtube Link" value="{{ $advisor->youtube_link }}">
                                </div>
                            </div>

                            {{-- instagram Link --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Linkdin Link<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="linkdin_link" placeholder="Linkdin Link" value="{{ $advisor->linkdin_link }}">
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
