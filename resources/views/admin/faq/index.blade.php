@extends('layouts.admin')

@section('bestpartner') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Faq</h3>
                </div>
                <div class="card-body">
                    {{-- Add New --}}
                    <div class="text-end">
                        <a href="{{ route('faq.create') }}" class="btn btn-primary mb-4"> Add New</a>
                    </div>

                    {{-- Table Part --}}
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom table-striped" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">SL</th>
                                    <th class="wd-10p border-bottom-0">Title</th>
                                    <th class="wd-5p border-bottom-0">Description</th>
                                    <th class="wd-10p border-bottom-0">Created At</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($faqs as $faq)

                                    <tr>

                                        <td>{{ $loop->index+1 }}</td>

                                        <td>{{ $faq->title }} </td>
                                        <td>{{ $faq->description }} </td>

                                        <td>{{ $faq->created_at->diffForHumans() }}</td>

                                        <td>
                                            <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-sm btn-primary p-2 ms-2">
                                                <span class="fe fe-edit"> </span>
                                            </a>
                                            <a href="{{ route('faq.delete', $faq->id) }}" class="btn btn-sm btn-danger p-2 ms-2">
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
