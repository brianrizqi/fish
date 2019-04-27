@extends('layouts.home')
@section('title','Transaksi')
@section('content')
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1">Nama Produk</th>
                            <th class="column-2">Jumlah</th>
                            <th class="column-3">Harga</th>
                            <th class="column-4">Total Harga</th>
                        </tr>
                        @foreach($detail as $item)
                            <tr class="table-row">
                                <td class="column-1">
                                    {{$item->nama_produk}}
                                </td>
                                <td class="column-2">
                                    {{$item->jumlah}}
                                </td>
                                <td class="column-3">
                                    {{$item->harga_jual}}
                                </td>
                                <td class="column-4">
                                    {{$item->total_harga}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
