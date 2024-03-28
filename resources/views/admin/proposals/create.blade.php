@extends('layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Quotes & proposals</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Quotes & proposals</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">

            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="card-title">Proposal Summary</h5>
                        <!-- Profile Edit Form -->
                        <form method="post" enctype="multipart/form-data" autocomplete="off" autocapitalize="off">
                            @csrf
                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">Client Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="client_name" type="text" class="form-control" id="client_name"
                                        value="" placeholder="Client Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="proposal_title" class="col-md-4 col-lg-3 col-form-label">Proposal Title</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="proposal_title" type="text" class="form-control" id="proposal_title"
                                        value="" placeholder="7 NIghts, Hotel Protur Alicia, Majorca, Spain">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="proposal_summary" class="col-md-4 col-lg-3 col-form-label">Proposal
                                    Summary</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea class="form-control" name="proposal_summary" id="proposal_summary" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Travel Dates</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" value="{{ now()->format('Y-m-d') }}"
                                                    class="form-control" id="from_date" placeholder="From Date">
                                                <label for="from_date">From Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" value="{{ now()->format('Y-m-d') }}"
                                                    class="form-control" id="to_date" placeholder="To Date">
                                                <label for="to_date">To Date</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="proposal_type_id" class="col-md-4 col-lg-3 col-form-label">Select Proposal
                                    Type</label>
                                <div class="col-md-8 col-lg-9">
                                    <select name="proposal_type_id" class="form-control" id="proposal_type_id">
                                        <option value="" disabled selected>Select Proposal Type</option>
                                        @if ($proposal_types->isNotEmpty())
                                            @foreach ($proposal_types as $type)
                                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                                            @endforeach
                                        @else
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Created on</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="created_on"
                                            placeholder="Quote creation date" value="{{ now()->format('Y-m-d') }}">
                                        <label for="created_on">Quote creation date</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 1)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Flight (ONLY)</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Outbound (ONLY)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Return
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 2)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Accommodation (ONLY)</legend>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 3)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Itinerary (ONLY)</legend>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 4)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Cruise (ONLY)</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Outbound (ONLY)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Return
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 5)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Package: Flight & Accommodation (ONLY)</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Outbound (ONLY)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Return
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 6)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Package: Flight, Accommodation & Transfers (ONLY)</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Outbound (ONLY)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Return
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 7)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Package: Flight & Cruise (ONLY)</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Outbound (ONLY)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Return
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 8)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Package: Flight, Accommodation & Cruise (ONLY)</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Outbound (ONLY)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Return
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">(proposal type 9)</label>
                                <div class="col-md-8 col-lg-9">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-12 pt-0">Package: Flight, Accommodation, Transfers & Cruise (ONLY)</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Outbound (ONLY)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Return
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
