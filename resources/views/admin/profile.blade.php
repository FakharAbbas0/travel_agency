@extends('layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">

            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Profile Edit Form -->
                        <form method="post" enctype="multipart/form-data" autocomplete="off" autocapitalize="off">
                            @csrf
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                    Image</label>
                                <div class="col-md-8 col-lg-9">
                                    @if (!empty($profile->image))
                                        <img src="{{ asset('uploads/images/profile/' . $profile->image) }}"
                                            style="width: 100px;height:100px;" alt="Profile">
                                    @endif
                                    <div class="pt-2">
                                        <input type="file" name="image" accept="image/*" id="image">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="first_name" type="text" class="form-control" id="first_name"
                                        value="{{ $profile->first_name ?? '' }}" placeholder="First Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="last_name" type="text" class="form-control" id="last_name"
                                        value="{{ $profile->last_name ?? '' }}" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Title</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="title" type="text" class="form-control" id="title"
                                        value="{{ $profile->title ?? '' }}" placeholder="Title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Contact Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="contact_email" type="email" class="form-control" id="contact_email"
                                        value="{{ $profile->contact_email ?? '' }}" placeholder="Contact Email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Contact Number</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="contact_number" type="text" class="form-control" id="contact_number"
                                        value="{{ $profile->contact_number ?? '' }}" placeholder="Contact Number">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Company Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="company_name" type="text" class="form-control" id="company_name"
                                        value="{{ $profile->company_name ?? '' }}" placeholder="Company Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Website</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="website_url" type="text" class="form-control" id="website_url"
                                        value="{{ $profile->website_url ?? '' }}" placeholder="Website">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Company Logo</label>
                                <div class="col-md-8 col-lg-9">
                                    @if (!empty($profile->company_logo))
                                        <img src="{{ asset('uploads/images/company_logo/' . $profile->company_logo) }}"
                                            style="width: 100px;height:100px;" alt="Profile">
                                    @endif
                                    <div class="pt-2">
                                        <input type="file" name="company_logo" accept="image/*" id="company_logo">
                                    </div>
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
