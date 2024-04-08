<style>
    div#allTabsContent div.card-body {
        padding-top: 20px !important;
    }

    div#allTabsContent span,
    div#allTabsContent input,
    div#allTabsContent textarea,
    div#allTabsContent p,
    div#allTabsContent label,
    div#allTabsContent button,#allTabsContent a,#allTabsContent select,#allTabsContent option,#allTabsContent .invalid-feedback,#allTabsContent legend {
        border-radius: 0;
        font-size: 0.6rem;
    }
</style>

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
        <div class="row" id="allTabsContent">

            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        @include('admin.alert')
                        <h5 class="card-title">Proposal Summary</h5>

                        <!-- Profile Edit Form -->
                        <form method="post" action="{{ route('admin.proposals.store') }}" autocomplete="off"
                            autocapitalize="off">
                            @csrf
                            <div class="row mb-3">
                                <label for="client_name" class="col-md-4 col-lg-3 col-form-label">Client Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="client_name" type="text"
                                        class="form-control @error('client_name') is-invalid @enderror" id="client_name"
                                        value="{{ old('client_name') }}" placeholder="Client Name">
                                    @error('client_name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="proposal_title" class="col-md-4 col-lg-3 col-form-label">Proposal Title</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="proposal_title" type="text"
                                        class="form-control @error('proposal_title') is-invalid @enderror"
                                        id="proposal_title" value="{{ old('proposal_title') }}"
                                        placeholder="7 NIghts, Hotel Protur Alicia, Majorca, Spain">
                                    @error('proposal_title')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="proposal_summary" class="col-md-4 col-lg-3 col-form-label">Proposal
                                    Summary</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea class="form-control @error('proposal_summary') is-invalid @enderror" name="proposal_summary"
                                        id="proposal_summary" rows="5">{{ old('proposal_summary') }}</textarea>
                                    @error('proposal_summary')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Travel Dates</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" value="{{ old('from_date', now()->format('Y-m-d')) }}"
                                                    class="form-control @error('from_date') is-invalid @enderror"
                                                    name="from_date" id="from_date" placeholder="From Date">
                                                <label for="from_date">From Date</label>
                                            </div>
                                            @error('from_date')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" value="{{ old('to_date', now()->format('Y-m-d')) }}"
                                                    class="form-control @error('to_date') is-invalid @enderror"
                                                    name="to_date" id="to_date" placeholder="To Date">
                                                <label for="to_date">To Date</label>
                                            </div>
                                            @error('to_date')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Created on</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="form-floating">
                                        <input type="date" class="form-control @error('created_on') is-invalid @enderror"
                                            name="created_on" id="created_on" placeholder="Quote creation date"
                                            value="{{ old('created_on', now()->format('Y-m-d')) }}">
                                        <label for="created_on">Quote creation date</label>
                                    </div>
                                    @error('created_on')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="proposal_type_id" class="col-md-4 col-lg-3 col-form-label">Select Proposal
                                    Type</label>
                                <div class="col-md-8 col-lg-9">
                                    <select name="proposal_type_id"
                                        class="form-control @error('proposal_type_id') is-invalid @enderror"
                                        id="proposal_type_id">
                                        <option value="" selected>Select Proposal Type</option>
                                        @if ($proposal_types->isNotEmpty())
                                            @foreach ($proposal_types as $type)
                                                <option {{ old('proposal_type_id') == $type->id ? 'selected' : '' }}
                                                    value="{{ $type->id }}">{{ $type->type }}</option>
                                            @endforeach
                                        @else
                                        @endif
                                    </select>
                                    @error('proposal_type_id')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row" id="purposal_summary_form">

                            </div>

                            {{-- @if ($proposal_types->isNotEmpty())
                                @foreach ($proposal_types as $proposal_type)
                                    <div class="row mb-3 d-none proposal_type_rows"
                                        id="proposal_type_{{ $proposal_type->id }}">
                                        <label for="proposal_type{{ $proposal_type->id }}"
                                            class="col-md-4 col-lg-3 col-form-label">(proposal type
                                            {{ $proposal_type->id }})</label>
                                        <div class="col-md-8 col-lg-9">
                                            <fieldset class="row mb-3">

                                                @if ($proposal_type->input_type == 'radio')
                                                    <legend class="col-form-label col-sm-12 pt-0">
                                                        {{ $proposal_type->type }}
                                                    </legend>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" name="options[{{ $proposal_type->id }}]"
                                                            value="0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="options[{{ $proposal_type->id }}]"
                                                                {{ old("options.$proposal_type->id") == '1' ? 'checked' : '' }}
                                                                id="gridRadiosOutbound{{ $proposal_type->id }}"
                                                                value="1">
                                                            <label class="form-check-label"
                                                                for="gridRadiosOutbound{{ $proposal_type->id }}">
                                                                Outbound (ONLY)
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="options[{{ $proposal_type->id }}]"
                                                                {{ old("options.$proposal_type->id") == '2' ? 'checked' : '' }}
                                                                id="gridRadiosReturn{{ $proposal_type->id }}"
                                                                value="2">
                                                            <label class="form-check-label"
                                                                for="gridRadiosReturn{{ $proposal_type->id }}">
                                                                Return
                                                            </label>
                                                        </div>
                                                    </div>
                                                @elseif($proposal_type->input_type == 'select')
                                                    <legend class="col-form-label col-12 pt-0">
                                                        <select name="options[{{ $proposal_type->id }}]"
                                                            class="form-control" id="">
                                                            <option
                                                                {{ old("options.$proposal_type->id") == '1' ? 'selected' : '' }}
                                                                value="1">{{ $proposal_type->type }}</option>
                                                        </select>
                                                    </legend>
                                                @endif
                                            </fieldset>
                                        </div>
                                    </div>
                                @endforeach
                            @endif --}}

                            {{-- <div class="row" id="purposal_summary_form">
                            </div> --}}

                            <div class="">
                                <button type="submit" class="btn btn-success">Submit Purposal</button>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script>
        $('#proposal_type_id').change(function() {
            let id = $(this).val();
            $('#purposal_summary_form').html('');
            if(id!=''){
                $.ajax({
                    url : "{{ route('admin.proposals.getForm') }}",
                    type : "POST",
                    data : { type_id : id },
                    dataType : "html",
                    success : function(response){
                        $('#purposal_summary_form').html(response);
                    },
                    error : function(jqXHR,error){
                        console.log("Something went wrong");
                    }
                });
            }

        });
    </script>
@endpush
