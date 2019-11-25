@extends('layouts.home')
@section('title','About')
@section('content')
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->

    <!-- About Us -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-content">
                        <div class="about-section">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="about-work">
                                        <h2> Selamat Datang di Fresh Fish</h2>
                                        <p>Indonesia adalah negara yang memiliki keanekaragaman ikan siap pangan. Fresh Fish adalah toko online pertama di Indonesia yang menyediakan berbagai ikan segar siap pangan fresh by order. Terdapat berbagai hidangan ikan segar yang bisa dibeli mulai dari ikan nila, kakap, cumi - cumi, lobster, dan lain - lain. Selain itu, kita juga menyediakan ikan dalam jumlah besar, Happy Shopping!</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="vision-image">
                                        <img src="images/vision.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-content">
                            <img src="images/ad1.jpg" alt="image">
                        </div>
                        <div class="about-team">
                            <h3>Our Team</h3>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="team-item">
                                        <div class="team-image">
                                            <img src="https://avatars2.githubusercontent.com/u/30972350?s=460&v=4" alt="image">
                                        </div>
                                        <div class="team-outer">
                                            <div class="team-content">
                                                <h4>Brian Rizqi P D</h4>
                                            </div>
                                            <div class="team-social-links">
                                                <ul class="header-social-links">
                                                    <li><a href="https://www.facebook.com/brian.rizqi"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="https://www.instagram.com/brianrizqi"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-info">
                                                <h5>162410101007</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="team-item">
                                        <div class="team-image">
                                            <img src="images/team2.jpg" alt="image">
                                        </div>
                                        <div class="team-outer">
                                            <div class="team-content">
                                                <h4>Eva Wati Asri M</h4>
                                            </div>
                                            <div class="team-social-links">
                                                <ul class="header-social-links">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-info">
                                                <h5>162410101024</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="team-item">
                                        <div class="team-image">
                                            <img src="images/team1.jpg" alt="image">
                                        </div>
                                        <div class="team-outer">
                                            <div class="team-content">
                                                <h4>Sarah Tyas P</h4>
                                            </div>
                                            <div class="team-social-links">
                                                <ul class="header-social-links">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-info">
                                                <h5>162410101025</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="team-item">
                                        <div class="team-image">
                                            <img src="images/team1.jpg" alt="image">
                                        </div>
                                        <div class="team-outer">
                                            <div class="team-content">
                                                <h4>Fouriska Mukti N S</h4>
                                            </div>
                                            <div class="team-social-links">
                                                <ul class="header-social-links">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-info">
                                                <h5>162410101030</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
