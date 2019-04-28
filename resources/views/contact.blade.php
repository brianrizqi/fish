@extends('layouts.home')
@section('title','Contact')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->

    <!-- Contact Us -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form>
                            <h3>Contact Us</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="Name">Name:</label>
                                    <input type="email" class="form-control" id="Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="website">Website:</label>
                                    <input type="email" class="form-control" id="website">
                                </div>
                                <div class="textarea col-sm-12">
                                    <label for="Name">Your Message:</label>
                                    <textarea></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <div class="comment-btn">
                                        <a href="#" class="btn-white btn-red">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="magazine-info">
                        <h3>Contact Info</h3>
                        <div class="magazine-detail">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> Address</li>
                                <li><i class="fa fa-envelope-open"></i> info@blogmag.com</li>
                                <li><i class="fa fa-phone"></i> +123-45-6789</li>
                                <li><i class="fa fa-fax"></i> +123-456-789</li>
                                <li><i class="fa fa-star"></i> www.blogmag.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Ends -->

    <!-- Contact Us Map -->
    <div class="map">
        <div id="map" style="height: 350px; width: 100%;"></div>
    </div>
@endsection
