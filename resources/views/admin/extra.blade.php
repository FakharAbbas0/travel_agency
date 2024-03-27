@extends('layouts.master')
@section('content')
    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Extra Page</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Get an extra 7 days free. Create and send your first travel quote.</h5>
              <div class="text-box">
                  <textarea class="form-control" name="extra_quote" rows="8" placeholder="Create a new travel quote"></textarea>
              </div>
                <div class="button_rows mt-3">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                            <button type="button" class="btn btn-primary btn-sm">Get Started</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                            <button type="button" class="btn btn-default btn-sm">Skip</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>


      </div>
    </section>

  @endsection
