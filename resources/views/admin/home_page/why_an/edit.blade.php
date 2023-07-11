@extends('layouts.admin')

@section('bestpartner') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card col-lg-6 m-auto">
                <div class="card-header">
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <div class="card-body">

                <form action="{{ route('why_an.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{ $why_an->id }}">
                        <input type="hidden" name="old_photo" value="{{ $why_an->photo }}">

                        <div class="row">

                            {{-- title --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Header<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Header" value="{{ $why_an->title }}">
                                </div>
                            </div>

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Description<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="description" placeholder="description" rows="5">{{ $why_an->description }}</textarea>
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
