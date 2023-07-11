@extends('layouts.admin')

@section('bestpartner') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings" class="mb-5">

            <div class="card col-lg-10 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Store Data</h3>
                </div>
                <div class="card-body m-5">

                <form action="{{ route('our_team.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{--  photo --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Image <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="photo" data-bs-height="180" data-default-file=""/>
                                </div>
                            </div>

                            {{-- Name --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Name<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="">
                                </div>
                            </div>

                            {{-- title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Title<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" value="">
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
