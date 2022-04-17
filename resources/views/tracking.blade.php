@extends('layouts.frontend')
@section('main')
<header class="page-header" data-background="images/slide01.jpg">
    <div class="container">
      <h1>Tracking</h1>
      <p>Take the complexity out of customs Freight Solutions<br> with customs brokerage services</p>
    </div>
    <!-- end container --> 
  </header>
    <div class="section-note">

        <!-- end container -->
    </div>
    <div class="section-note">
        <div class="container mt-10">
            <h6>FSGL, Inc. <strong>Track your shipment
                </strong>
            </h6>
        </div>
        <!-- end container -->
    </div>
    <!-- end section-note -->
    <section class="content-section no-top-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <figure class="video-thumb"> <img src="{{ asset('public/images/video-thumb.jpg') }}" alt="Image"> <a href="{{ asset('public/videos/video01.mp4') }}" data-fancybox>Play Button</a> </figure>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <div class="track-shipping-form">
                        <div class="inner">
                            <h3>Track your shipment</h3>
                            <div class="form-group half">
                                <input type="radio" checked name="track">
                                Shipping number
                            </div>

                            <form action="{{ route('tracker') }}" method="post">
                                @csrf
                                <!-- end form-group -->
                                <div class="form-group">
                                    <input type="text" placeholder="Shipping Number" name="tracking_id" required>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button type="submit"><i class="lni lni-search-alt"></i> SEARCH</button>
                                </div>
                                <!-- end form-group -->
                            </form>
                        </div>
                        <!-- end inner -->
                    </div>
                    <!-- end track-shipping-form -->

                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
