@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="display: inline">Tabel Solusi Awal</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <th>Pemotongan</th>
                                <th>Penggilingan</th>
                                <th>Pencampuran</th>
                                <th>Pemasakan</th>
                                <th>Penggorengan</th>
                                </thead>
                                <tbody>
                                <tr>
                                    @for($i = 0; $i<count($solusiawal);$i++)
                                        <td>Karyawan {{$solusiawal[$i] + 1}}</td>
                                    @endfor
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
                        <h5 style="display: inline">Tabel Solusi Terbaik</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <th>Pemotongan</th>
                                <th>Penggilingan</th>
                                <th>Pencampuran</th>
                                <th>Pemasakan</th>
                                <th>Penggorengan</th>
                                </thead>
                                <tbody>
                                <tr>
                                    @for($i = 0; $i<count($solusiterbaik);$i++)
                                        <td>Karyawan {{$solusiterbaik[$i]+1}}</td>
                                    @endfor
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
    </div>
@endsection
