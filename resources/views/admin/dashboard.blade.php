@extends('layouts.master')
@section('content')
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="container fill-height">
                            <div class="row">
                             <div class="col-lg-1"></div>
                               <div id="hello" class="col-lg-10">

                               </div>
                             <div class="col-lg-1"></div>
                           </div>
                         </div>
                    </div>
                </div>
                <!-- End Left side columns -->
            </div>
        </section>
@endsection
