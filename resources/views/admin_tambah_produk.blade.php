@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Form Produk</h5>
                <div class="card-body">
                    <form method="POST" action="{{route('store_produk')}}" id="basicform" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputUserName">Nama Produk</label>
                            <input type="text" name="nama_produk" data-parsley-trigger="change"
                                   required=""
                                   placeholder="Nama Produk" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputUserName">Ikan</label>
                            <select name="ikan" class="form-control">
                                <option value="0" disabled selected>--Pilih Ikan--</option>
                                @foreach($ikan as $item)
                                    <option value="{{$item->id_ikan}}">{{$item->ikan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Harga Jual</label>
                            <input type="number" placeholder="Harga Jual" required=""
                                   name="harga_jual"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputRepeatPassword">Jumlah Ikan yang Dipakai</label>
                            <input placeholder="Jumlah" type="number" class="form-control" name="jumlah_ikan">
                        </div>
                        <div class="form-group">
                            <label for="inputRepeatPassword">Jumlah Produk</label>
                            <input name="jumlah" placeholder="Jumlah" type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputRepeatPassword">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            </div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                </p>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
