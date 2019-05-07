@extends('layouts.home')
@section('title','Penjualan')
@section('content')
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Penjualan</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->

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
                                <th class="product-name">Tanggal</th>
                                <th class="product-price">Total Harga</th>
                                <th class="product-quantity">Status</th>
                                <th class="product-total">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no = 1 @endphp
                            @foreach($penjualan as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        {{$item->tanggal}}
                                    </td>
                                    <td>
                                        <span class="rt-Price-amount"><span>Rp.</span>{{number_format($item->total_harga,0,".",".")}}</span>
                                    </td>
                                    <td>
                                        @if($item->status == 0)
                                            Belum Di Verifikasi
                                        @else
                                            Sudah Di Verifikasi
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('detail_penjualan',['id'=>$item->id_penjualan])}}"
                                           class="btn btn-primary">
                                            Detail
                                        </a>
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
