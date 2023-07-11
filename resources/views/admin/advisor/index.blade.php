@extends('layouts.admin')

@section('advisor') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings" class="mb-5">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Advisore</h3>
                </div>
                <div class="card-body">
                    {{-- Add New --}}
                    <div class="text-end">
                        <a href="{{ route('advisor.create') }}" class="btn btn-primary mb-4"> Add New</a>
                    </div>

                    {{-- Table Part --}}
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom table-striped" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">SL</th>
                                    <th class="wd-20p border-bottom-0">Photo</th>
                                    <th class="wd-10p border-bottom-0">Name</th>
                                    <th class="wd-10p border-bottom-0">Title</th>
                                    <th class="wd-10p border-bottom-0">FB Link</th>
                                    <th class="wd-10p border-bottom-0">Youtube Link</th>
                                    <th class="wd-5p border-bottom-0">Linkdin Link</th>
                                    <th class="wd-10p border-bottom-0">Created At</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($advisors as $advisor)

                                    <tr>

                                        <td>{{ $loop->index+1 }}</td>

                                        <td>
                                            <img src="{{ asset($advisor->photo) }}" alt="" style="height: 150px; width: 100%">
                                        </td>

                                        <td>{{ $advisor->name }} </td>
                                        <td>{{ $advisor->title }} </td>
                                        <td>{{ $advisor->fb_link }} </td>
                                        <td>{{ $advisor->youtube_link }} </td>
                                        <td>{{ $advisor->linkdin_link }} </td>

                                        <td>{{ $advisor->created_at->diffForHumans() }}</td>

                                        <td>
                                            <a href="{{ route('advisor.edit', $advisor->id) }}" class="btn btn-sm btn-primary p-2 ms-2">
                                                <span class="fe fe-edit"> </span>
                                            </a>
                                            <a href="{{ route('advisor.delete', $advisor->id) }}" class="btn btn-sm btn-danger p-2 ms-2">
                                                <span class="fe fe-trash-2"> </span>
                                            </a>
                                        </td>

                                    </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </section>

    </div>


@endsection
