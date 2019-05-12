@extends('layouts.home')
@section('title','Produk')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('produk')}}">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->

    <!--store detail -->
    <section id="store-detail" class="store-detail">
        <div class="container">
            <div class="single-product-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail-images">
                            <div class="slider slider-store">
                                <div>
                                    <img src="{{url('storage/gambar/'.$produk->gambar)}}" alt="1">
                                </div>
                            </div>
                            <div class="slider slider-thumbs">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-product-summary">
                            <div class="entry-summary">
                                <h2 class="single-product-title">{{$produk->nama_produk}}</h2>
                                <div class="rt-product-meta-wrapper">
                                    <span class="price">
                                        <ins>
                                            <span class="rt-price-amount">
                                                <span>Rp.</span>{{number_format($produk->harga_jual,0,".",".")}}
                                            </span>
                                        </ins>
                                    </span>
                                </div>
                                <div class="product-details_short-description mar-top-30">
                                    <p>{{$produk->deskripsi}}</p>
                                </div>

                                <form method="POST" action="{{route('store_cart',['id'=>$produk->id_produk])}}">

                                    <div class="quantity-buttons">
                                        <label class="screen-reader-text">Quantity</label>
                                        <input type="number" class="quantity-input" name="jumlah"
                                               min="1" max="{{$produk->stok}}" placeholder="No.">
                                    </div>

                                    <button type="submit" name="add-to-cart" value="1605" class="btn-white btn-red">Add
                                        to cart
                                    </button>
                                    @csrf
                                </form>

                                <div class="product_meta mar-top-30">

                                    <span class="sku_wrapper">Jumlah: <span
                                                class="sku">{{$produk->stok}}</span></span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
@endsection
