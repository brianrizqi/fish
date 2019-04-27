@extends('layouts.home')
@section('title','Transaksi')
@section('content')
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1">Tanggal</th>
                            <th class="column-2">Total Harga</th>
                            <th class="column-3">Status</th>
                            <th class="column-4">Aksi</th>
                        </tr>
                        @foreach($penjualan as $item)
                            <tr class="table-row">
                                <td class="column-1">
                                    {{$item->tanggal}}
                                </td>
                                <td class="column-2">
                                    {{$item->total_harga}}
                                </td>
                                <td class="column-3">
                                    @if($item->status == 0)
                                        Belum Di Verifikasi
                                    @else
                                        Sudah Di Verifikasi
                                    @endif
                                </td>
                                <td class="column-4">
                                    <a href="/penjualan/{{$item->id_penjualan}}" class="btn btn-primary">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
