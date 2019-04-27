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
                        <h5 style="display: inline">Tabel Detail Pembelian</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Ikan</th>
                                    <th>Jumlah</th>
                                    <th>Harga Beli</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($detail as $item)
                                    <tr>
                                        <td>{{$item->ikan}}</td>
                                        <td>{{$item->jumlah}}</td>
                                        <td>{{$item->harga_beli}}</td>
                                        <td>{{$item->harga_beli * $item->jumlah}}</td>
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
