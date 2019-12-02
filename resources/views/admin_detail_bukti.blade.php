@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="display: inline">Bukti Pembayaran dari {{$penjualan->name}}</h5>
                        {{--                        <a href="/tambah_supplier" class="btn btn-primary float-right">Tambah</a>--}}
                    </div>
                    <div class="card-body">
                        <div class="product-img-head">
                            <div class="product-img">
                                <img src="{{url('storage/bukti/'.$penjualan->img)}}" alt=""
                                     class="img-fluid" style="width: 228px; height: 250px;">
                            </div>
{{--                            <div class="product-content">--}}
{{--                                <div class="product-content-head">--}}
{{--                                    <h3 class="product-title">{{$produk->deskripsi}}</h3>--}}
{{--                                    <div class="product-price">--}}
{{--                                        <br>--}}
{{--                                        <p>Harga : Rp. {{number_format($produk->harga_jual,0,".",".")}}</p>--}}
{{--                                        <p>Stok : {{$produk->stok}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
