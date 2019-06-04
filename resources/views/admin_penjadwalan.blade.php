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
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="display: inline">Tabel Mesin</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mesin</th>
                                    <th>Jumlah</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0;?>
                                @foreach($mesin as $item)
                                    <?php $no++;?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$item->mesin}}</td>
                                        <td>{{$item->jumlah}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="display: inline">Tabel Produk</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Job (Produk)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0?>
                                @foreach($job as $item)
                                    <?php $no++?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$item->job}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end data table rowgroup  -->
            <!-- ============================================================== -->
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="display: inline">Tabel Urutan Proses</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Total</th>
                                    <th colspan="4">Urutan Proses</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($urutan as $item)
                                    <tr>
                                        <td>{{$item->job}}</td>
                                        <td>{{$item->total_proses}}</td>
                                        <td>{{$item->mesin1}}</td>
                                        <td>{{$item->mesin2}}</td>
                                        <td>{{$item->mesin3}}</td>
                                        <td>{{$item->mesin4}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end data table rowgroup  -->
            <!-- ============================================================== -->
        </div>
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="display: inline">Tabel Waktu Proses</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Total Waktu</th>
                                    <th colspan="4">Waktu Proses</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($waktu as $item)
                                    <tr>
                                        <td>{{$item->job}}</td>
                                        <td>{{$item->total_waktu}} Menit</td>
                                        <td>{{$item->waktu1}} Menit</td>
                                        <td>{{$item->waktu2}} Menit</td>
                                        <td>{{$item->waktu3}} Menit</td>
                                        <td>{{$item->waktu4}} Menit</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end data table rowgroup  -->
            <!-- ============================================================== -->
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <a href="{{route('hasil_penjadwalan')}}">
                    <button class="btn btn-primary float-right">
                        Input Jadwal
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
