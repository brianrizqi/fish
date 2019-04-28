@extends('layouts.home')
@section('title','Cart')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->

    <!-- cart -->
    <section id="cart-main" class="cart-main">
        <div class="container">
            <div class="cart-inner">
                <div class="cart-table-list">
                    <div class="order-list">
                        <table class="shop_table rt-checkout-review-order-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no = 1 @endphp
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>

                                    <td class="cart_item">
                                       <span class="product-thumbnail">
                                            <img src="images/gallery/thumb1-1.jpg" alt="">
                                        </span>
                                        <span class="product-name">{{$item->name}}&nbsp;</span>
                                    </td>

                                    <td><span class="rt-Price-amount"><span>Rp.</span>{{number_format($item->price,0,".",".")}}</span>
                                    </td>

                                    <td>
                                        <span class="quantity-buttons">
                                            <input type="number" class="quantity-input" name="quantity" min="1" max="50"
                                                   placeholder="No." value="{{$item->quantity}}">
                                        </span>
                                    </td>

                                    <td class="cart-subtotal">
                                        <span class="rt-Price-amount"><span>Rp.</span>{{number_format($item->quantity*$item->price,0,".",".")}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="checkout-order">
                    <div class="section-title">
                        <h3 class="mar-bottom-20">Cart Totals</h3>
                    </div>
                    <div class="order-list">
                        <table class="shop_table rt-checkout-review-order-table">
                            <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $total = 0; @endphp
                            @foreach($data as $item)
                                <tr class="cart_item">
                                    <td class="product-name">
                                        {{$item->name}}&nbsp; <strong
                                                class="product-quantity">× {{$item->quantity}}</strong></td>
                                    <td class="product-total">
                                        <span class="rt-Price-amount"><span>Rp.</span>{{number_format($item->price * $item->quantity,0,".",".")}}</span>
                                    </td>
                                </tr>
                                @php $total += ($item->price * $item->quantity) @endphp
                            @endforeach
                            </tbody>
                            <tfoot>

                            <tr class="order-total">
                                <th>Total</th>
                                <td>
                                    <span class="rt-Price-amount"><span>Rp.</span>{{number_format($total,0,".",".")}}</span>
                                </td>
                            </tr>

                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="checkout-place-order">
                    <p>Your personal data will be used to process your order, support your experience throughout this
                        website, and for other purposes described in our <a href="#">privacy policy</a>.
                    </p>
                    <a href="/beli">
                        <button type="submit" class="btn-red">Proceed to Checkout</button>
                    </a>
                    <a href="/cart/clear" style="margin-left: 20px;">
                        <button type="submit" class="btn-dark" style="font-style: bold">Cancel</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
