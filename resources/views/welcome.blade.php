@extends('layouts.home')
@section('title','Fish')
@section('content')
    <!-- Banner -->
    <section id="home_banner_paradise">
        <!-- Paradise Slider -->
        <div id="in_th_021" class="carousel slide in_th_below_021 thumb_scroll_x swipe_x ps_easeOutInCubic"
             data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">


            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <!-- Slide Background -->
                    <img src="images/tech/slider1.jpg" alt="in_th_021_01"/>
                    <!-- Slide Text Layer -->
                    <div class="in_th_021_slide in_th_021_slide_center" data-animation="animated fadeInRight">
                        <div class="home_banner_text">
                            <h2><a href="detail.html">VR and playable on a console makes it a great</a></h2>
                            <div class="author-detail author-detail-btn">
                                <a href="#" class="btn-white">Read More</a>
                            </div>
                        </div>
                    </div> <!-- /in_th_021_slide -->
                </div>
                @foreach($top as $item)
                    <div class="item">
                        <!-- Slide Background -->
                        <img src="{{url('storage/gambar/'.$item->gambar)}}" alt="in_th_021_01"/>
                        <!-- Slide Text Layer -->
                        <div class="in_th_021_slide in_th_021_slide_center" data-animation="animated fadeInRight">
                            <div class="home_banner_text">
                                <h2><a href="detail.html">{{$item->deskripsi}}</a></h2>
                                <div class="author-detail author-detail-btn">
                                    <a href="#" class="btn-white">Read More</a>
                                </div>
                            </div>
                        </div> <!-- /in_th_021_slide -->
                    </div>
            @endforeach
            <!-- End of Slide -->

            </div> <!-- End of Wrapper For Slides -->
            <!-- Indicators -->
            {{--            <ol class="carousel-indicators">--}}
            {{--                <!-- 1st Indicator -->--}}
            {{--                <li data-target="#in_th_021" data-slide-to="0" class="active">--}}
            {{--                    <!-- 1st Indicator Image -->--}}
            {{--                    <img src="images/tech/slider1-icon.jpg" alt="in_th_021_01_sm"/>--}}
            {{--                </li>--}}
            {{--                <!-- 2nd Indicator -->--}}
            {{--                <li data-target="#in_th_021" data-slide-to="1">--}}
            {{--                    <!-- 2nd Indicator Image -->--}}
            {{--                    <img src="images/tech/slider2-icon.jpg" alt="in_th_021_02_sm"/>--}}
            {{--                </li>--}}
            {{--                <!-- 3rd Indicator -->--}}
            {{--                <li data-target="#in_th_021" data-slide-to="2">--}}
            {{--                    <!-- 3rd Indicator Image -->--}}
            {{--                    <img src="images/tech/slider3-icon.jpg" alt="in_th_021_03_sm"/>--}}
            {{--                </li>--}}
            {{--            </ol>--}}
        </div> <!-- End Paradise Slider -->
    </section>
    <!-- Banner Ends -->

    <!-- Most Viewed -->
    <section class="most-viewed">
        <div class="container">
            <div class="section-title">
                <h2>Product</h2>
            </div>
            <div class="row">
                @foreach($produk as $item)
                    <div class="col-md-3 col-xs-6">
                        <div class="item-medium">
                            <div class="item-medium-image">
                                <img alt="Image" src="{{url('storage/gambar/'.$item->gambar)}}"
                                     style="width: 100%; height: 400px;">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="item-medium-content">
                                <h3>
                                    <a href="{{route('detail_produk',['id'=>$item->id_produk])}}">{{$item->nama_produk}}</a>
                                </h3>
                                <div class="author-detail">
                                    <p><i class="icon-pricetags"></i> Rp. {{number_format($item->harga_jual,0,".",".")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <!-- Most Viewed Ends -->


@endsection

