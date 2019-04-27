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
                        <h5 style="display: inline">Tabel Supplier</h5>
                        <a href="/pembelian/tambah" class="btn btn-primary float-right">Verif</a>
                        <a href="/pembelian/clear" class="btn btn-danger float-right"
                           style="margin-right: 10px;">Cancel</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Kode Penjualan</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($detail as $item)
                                    <tr>
                                        <td>{{$item->id_penjualan}}</td>
                                        <td>{{$item->nama_produk}}</td>
                                        <td>{{$item->jumlah}}</td>
                                        <td>Rp. {{number_format($item->total_harga,0,".",".")}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end data table rowgroup  -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection
