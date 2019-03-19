@extends('layouts.home')
@section('title','Fish')
@section('content')
    {{--    @if(Route::has('signin'))--}}
    <!-- Slide1 -->
    <section class="slide1 rs1-slick1">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/master-slide-08.jpg);">
                    <div class="wrap-content-slide1 size24 flex-col-c-m p-l-15 p-r-15 p-t-120 p-b-170">
                        <h2 class="caption1-slide1 xl-text3 t-center bo15 p-b-3 animated visible-false m-b-25"
                            data-appear="fadeInUp">
                            Flash Sale
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item1-slick1" style="background-image: url(images/master-slide-08.jpg);">
                    <div class="wrap-content-slide1 size24 flex-col-c-m p-l-15 p-r-15 p-t-120 p-b-170">
                        <h2 class="caption1-slide1 xl-text3 t-center bo15 p-b-3 animated visible-false m-b-25"
                            data-appear="rotateInDownLeft">
                            Flash Sale
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top noti -->
    <div class="pos-relative">
        <div class="flex-c-m size22 bg0 s-text21 ab-b-l op-0-9">
            20% off everything!
            <a href="product.html" class="s-text22 hov6 p-l-5">
                Shop Now
            </a>

            <button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
                <i class="fa fa-remove fs-13" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <!-- New Product -->
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Our Products
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2 rs1-slick2">
                <div class="slick2">

                    @foreach($produk as $item)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                    <img src="images/item-02.jpg" alt="IMG-PRODUCT">
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="#" class="block2-name dis-block s-text3 p-b-5">
                                        {{$item->nama_produk}}
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
                    Rp. {{number_format($item->harga_jual,0,".",".")}}
                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>


    <!-- Instagram -->
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                @ follow us on Instagram
            </h3>
        </div>

        <div class="flex-w rs1-block4">
            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="images/gallery-03.jpg" alt="IMG-INSTAGRAM">

                <a href="https://www.instagram.com/brianrizqi/" class="block4-overlay sizefull ab-t-l trans-0-4">
                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Brian Rizqi 162410101007
                        </p>

                        <span class="s-text9">
							Photo by @brianrizqi
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="images/gallery-07.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Eva Wati Asri M 162410101024
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="images/gallery-09.jpg" alt="IMG-INSTAGRAM">

                <a href="https://www.instagram.com/saralzena/" class="block4-overlay sizefull ab-t-l trans-0-4">

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Sarah Tyas Pradipta 162410101025
                        </p>

                        <span class="s-text9">
							Photo by @saralzena
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="images/gallery-13.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Fouriska Mukti Nuryasinta Sari 162410101030
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="images/gallery-15.jpg" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex
                            nulla
                            in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                            metus elit.
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{--@endif--}}
@endsection

