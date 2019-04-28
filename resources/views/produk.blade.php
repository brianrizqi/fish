@extends('layouts.home')
@section('title','Produk')
@section('content')
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->

    <!-- store -->
    <section id="our_store" class="our_store">
        <div class="container">

            <div class="row">
                @foreach($produk as $item)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="rt-product-wrapper">
                            <div class="product-thumbnail-wrapper">
                                <div class="product-image">
                                    <img src="{{url('storage/gambar/'.$item->gambar)}}" class="" alt="product-list"
                                    style="width: 100%; height: 250px;">
                                </div>
                                <div class="product-label"><span class="onsale">Sale</span></div>
                            </div>
                            <div class="rt-product-meta-wrapper">
                                <h3 class="product_title">
{{--                                    <a href="store-detail.html">--}}
                                        {{$item->nama_produk}}
{{--                                    </a>--}}
                                </h3>
                                <div class="rt-cartprice-wrapper">
                                <span class="price mar-bottom-20">
                                        <span class="rrt-price-amount">
                                            <ins>
                                                <span>Rp.</span>{{number_format($item->harga_jual,0,".",".")}}
                                            </ins>
                                        </span>
                                </span>
                                    <div class="button">
                                        <a href="/detail_produk/{{$item->id_produk}}" class="btn-white btn-red">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row"><!-- pagination -->
                <div class="col-md-12">
                    <div class="pagination-div text-center">
                        <ul class="pagination">
                            <li class="prev">
                                <a href="#"> <i class="fa fa-angle-double-left"></i> </a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li>
                                <a href="#">10</a>
                            </li>
                            <li class="next">
                                <a href="#"> <i class="fa fa-angle-double-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- End pagination -->
        </div>
    </section>
@endsection
