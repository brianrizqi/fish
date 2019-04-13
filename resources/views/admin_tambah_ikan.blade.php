@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Form Ikan</h5>
                <div class="card-body">
                    <form method="POST" action="/ikan" id="basicform">
                        <div class="form-group">
                            <label for="inputUserName">Nama Ikan</label>
                            <input type="text" name="ikan" data-parsley-trigger="change"
                                   placeholder="Nama Ikan" autocomplete="off" class="form-control">
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
