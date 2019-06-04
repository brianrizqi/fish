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
                                <tr>
                                    <td>1</td>
                                    <td>Mesin Pencuci</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Separator</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Oven</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pengemasan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Pengukus</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Penggorengan</td>
                                    <td>1</td>
                                </tr>
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
                                    <th>Jumlah</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Abon</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sarden</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nugget</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Bakso</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sosis</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Sambal</td>
                                    <td>1</td>
                                </tr>
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
                                <tr>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>4</td>
                                </tr>
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
                                <tr>
                                    <td>1</td>
                                    <td>36 Menit</td>
                                    <td>6 Menit</td>
                                    <td>3 Menit</td>
                                    <td>15 Menit</td>
                                    <td>12 Menit</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>23 Menit</td>
                                    <td>6 Menit</td>
                                    <td>3 Menit</td>
                                    <td>4 Menit</td>
                                    <td>10 Menit</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>63 Menit</td>
                                    <td>6 Menit</td>
                                    <td>3 Menit</td>
                                    <td>45 Menit</td>
                                    <td>9 Menit</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>35 Menit</td>
                                    <td>6 Menit</td>
                                    <td>3 Menit</td>
                                    <td>19 Menit</td>
                                    <td>7 Menit</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>69 Menit</td>
                                    <td>6 Menit</td>
                                    <td>3 Menit</td>
                                    <td>30 Menit</td>
                                    <td>30 Menit</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>39 Menit</td>
                                    <td>6 Menit</td>
                                    <td>3 Menit</td>
                                    <td>15 Menit</td>
                                    <td>15 Menit</td>
                                </tr>
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
