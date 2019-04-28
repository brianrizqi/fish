@extends('layouts.home')
@section('title','Transaksi')
@section('content')
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/penjualan">Penjualan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Penjualan</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- cart -->
    <section id="cart-main" class="cart-main">
        <div class="container">
            <div class="cart-inner">
                <div class="cart-table-list">
                    <div class="order-list">
                        <table class="shop_table rt-checkout-review-order-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th class="product-name">Nama Produk</th>
                                <th class="product-quantity">Jumlah</th>
                                <th class="product-total">Harga</th>
                                <th class="product-price">Total Harga</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no = 1 @endphp
                            @foreach($detail as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        {{$item->nama_produk}}
                                    </td>
                                    <td>
                                        {{$item->jumlah}}
                                    </td>
                                    <td>
                                        <span class="rt-Price-amount"><span>Rp.</span>{{number_format($item->harga_jual,0,".",".")}}</span>
                                    </td>
                                    <td>
                                        <span class="rt-Price-amount"><span>Rp.</span>{{number_format($item->total_harga,0,".",".")}}</span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
