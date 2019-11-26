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
                        <h5 style="display: inline">Tabel Pembelian</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Tanggal</th>
                                    <th>Total Harga</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pembelian as $item)
                                    <tr>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->tanggal}}</td>
                                        <td>Rp. {{number_format($item->total,0,".",".")}}</td>
                                        <td>
                                            <form action="{{route('detail_pembelian',['id'=>$item->id_pembelian])}}"
                                                  style="display: inline">
                                                <button class="btn btn-primary">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </form>
{{--                                            <form action="{{route('pembelian.destroy',['id'=>$item->id_pembelian])}}" method="POST"--}}
{{--                                                  style="display: inline">--}}
{{--                                                <button >--}}
{{--                                                    <a href="{{route('pembelian.destroy',['id'=>$item->id_pembelian])}}" class="btn btn-danger">--}}
{{--                                                    <i class="fa fa-trash" style="color: white"></i>--}}
{{--                                                    </a>--}}
{{--                                                </button>--}}
{{--                                                {{csrf_field()}}--}}
{{--                                                <input type="hidden" name="_method" value="DELETE">--}}
{{--                                            </form>--}}
                                        </td>
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
