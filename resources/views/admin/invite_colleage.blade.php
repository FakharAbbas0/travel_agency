@extends('layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Invite Colleages</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">

            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <form class="row g-3" method="POST" autocapitalize="off" autocomplete="off">
                            @csrf
                            <div class="col-md-12">
                                <input type="text" name="emails[]" value="{{ old('emails.0') }}" class="form-control" placeholder="name@domain.com">
                                @error('emails.0')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="emails[]" value="{{ old('emails.1') }}" class="form-control" placeholder="name@domain.com">
                                @error('emails.1')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="emails[]" value="{{ old('emails.2') }}" class="form-control" placeholder="name@domain.com">
                                @error('emails.2')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                            @include('admin.alert')
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
