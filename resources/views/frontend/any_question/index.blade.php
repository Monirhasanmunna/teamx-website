@extends('layouts.admin')

@section('faq_submit') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">any_question</h3>
                </div>
                <div class="card-body">
                    {{-- Add New --}}
                    {{-- <div class="text-end">
                        <a href="{{ route('any_question.create') }}" class="btn btn-primary mb-4"> Add New</a>
                    </div> --}}

                    {{-- Table Part --}}
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom table-striped" id="responsive-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">SL</th>
                                    <th class="wd-10p border-bottom-0">Name</th>
                                    <th class="wd-5p border-bottom-0">Email</th>
                                    <th class="wd-5p border-bottom-0">Message</th>
                                    <th class="wd-10p border-bottom-0">Created At</th>
                                    <th class="wd-15p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($any_questions as $any_question)

                                    <tr>

                                        <td>{{ $loop->index+1 }}</td>

                                        <td>{{ $any_question->name }} </td>
                                        <td>{{ $any_question->email }} </td>
                                        <td>{{ $any_question->msg }} </td>

                                        <td>{{ $any_question->created_at->diffForHumans() }}</td>

                                        <td>
                                            <a href="{{ route('any_question.edit', $any_question->id) }}" class="btn btn-sm btn-primary p-2 ms-2">
                                                view
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
