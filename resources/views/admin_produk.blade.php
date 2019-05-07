@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 style="display: inline">Produk</h5>
                            <a href="{{route('tambah_produk')}}" class="btn btn-primary float-right">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($produk as $item)
                                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="product-thumbnail">
                                            <div class="product-img-head">
                                                <div class="product-img">
                                                    <img src="{{url('storage/gambar/'.$item->gambar)}}" alt=""
                                                         class="img-fluid" style="width: 228px; height: 250px;">
                                                </div>
                                                <div class="">
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-content-head">
                                                    <h3 class="product-title">{{$item->nama_produk}}</h3>
                                                    <div class="product-price">
                                                        Rp. {{number_format($item->harga_jual,0,".",".")}}</div>
                                                </div>
                                                <div class="product-btn">
                                                    <a href="{{route('edit_produk',['id'=>$item->id_produk])}}"
                                                       class="btn btn-primary">Edit</a>
                                                    <a href="#" class="btn btn-outline-light">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
