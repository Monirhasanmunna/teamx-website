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

                <form action="{{ route('what_you_get.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{ $what_you_get->id }}">

                        <div class="row">

                            {{-- description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Update Description <span class="text-red">*</span></label>
                                    <textarea class="form-control" name="description" placeholder="Address" rows="5">{{ $what_you_get->description }}</textarea>
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
