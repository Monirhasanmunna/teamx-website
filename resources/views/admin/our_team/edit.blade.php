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

                <form action="{{ route('our_team.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{ $our_team->id }}">
                        <input type="hidden" name="old_photo" value="{{ $our_team->photo }}">

                        <div class="row">

                            {{--  photo --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="photo" data-bs-height="180" data-default-file="{{ asset($our_team->photo) }}"/>
                                </div>
                            </div>

                            {{-- Name --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Name<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $our_team->name }}">
                                </div>
                            </div>

                            {{-- title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $our_team->title }}">
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
