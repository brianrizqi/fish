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
                        <a href="{{route('tambah_ikan')}}" class="btn btn-primary float-right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ikan as $item)
                                    <tr>
                                        <td>{{$item->ikan}}</td>
                                        <td>{{$item->stok}}</td>
                                        <td>
                                            <form action="{{route('edit_ikan',['id'=>$item->id_ikan])}}"
                                                  style="display: inline">
                                                <button class="btn btn-primary">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </button>
                                            </form>
                                            <form action="{{route('hapus_ikan',['id'=>$item->id_ikan])}}" method="POST"
                                                  style="display: inline">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
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
