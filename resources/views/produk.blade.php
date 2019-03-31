@extends('layouts.home')
@section('title','Produk')
@section('content')
    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            {{--Categories--}}
                        </h4>

                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="#" class="s-text13 active1">
                                    {{--All--}}
                                </a>
                            </li>

                            <li class="p-t-4">
                                <a href="#" class="s-text13">
                                    {{--Women--}}
                                </a>
                            </li>

                            <li class="p-t-4">
                                <a href="#" class="s-text13">
                                    {{--Men--}}
                                </a>
                            </li>

                            <li class="p-t-4">
                                <a href="#" class="s-text13">
                                    {{--Kids--}}
                                </a>
                            </li>

                            <li class="p-t-4">
                                <a href="#" class="s-text13">
                                    {{--Accesories--}}
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="search-product pos-relative bo4 of-hidden">
                            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product"
                                   placeholder="Search Products...">

                            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                        <span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
                    </div>

                    <!-- Product -->
                    <div class="row">
                        @foreach($produk as $item)
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="{{url('storage/gambar/'.$item->gambar)}}" alt="IMG-PRODUCT" style="width: 228px; height: 250px;">
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="/detail_produk/{{$item->id_produk}}" class="block2-name dis-block s-text3 p-b-5">
                                            {{$item->nama_produk}}
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
										Rp. {{number_format($item->harga_jual,0,".",".")}}
									</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
