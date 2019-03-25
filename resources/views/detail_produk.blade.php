@extends('layouts.home')
@section('title','Produk')
@section('content')
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="item-slick3">
                        <div class="wrap-pic-w">
                            <img src="{{url('images/product-detail-01.jpg')}}" alt="IMG-PRODUCT">
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    {{$produk->nama_produk}}
                </h4>

                <span class="m-text17">
					Rp. {{number_format($produk->harga_jual,0,".",".")}}
				</span>

                <!--  -->
                <div class="p-t-33 p-b-60">

                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <form method="POST" action="/cart/{{$produk->id_produk}}">
                                <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>

                                    <input class="size8 m-text18 t-center num-product" type="number" name="jumlah"
                                           value="1">

                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>

                                <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                    <!-- Button -->
                                    @guest
                                        <a href="/login" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                            Add to Cart
                                        </a>
                                    @elseguest
                                        <button type="submit"
                                                class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                            Add to Cart
                                        </button>
                                    @endguest
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Description
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            {{$produk->deskripsi}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
