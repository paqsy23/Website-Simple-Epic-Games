@extends('layout.app')

@section('title')
    Checkout
@endsection

@section('body')
<body class="page woocommerce-checkout woocommerce-page">
	<div class="body-wrapper theme-clearfix">
        @include('header.header')

  {{-- Title + Breadcrumb --}}
<div class="listings-title">
    <div class="container">
        <div class="wrap-title">
            <h1>Checkout</h1>
            <div class="bread">
                <div class="breadcrumbs theme-clearfix">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="url(''">Home</a>
                                <span class="go-page"></span>
                            </li>

                            <li class="active">
                                <span>Checkout</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="row">
    <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page type-page status-publish hentry">
            <div class="entry-content">
                <div class="woocommerce">
                    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="#" enctype="multipart/form-data">
                        <div class="col2-set" id="customer_details">
                            <div class="col-1">
                                <div class="woocommerce-billing-fields">
                                    <h3>Billing Details</h3>

                                    <p class="form-row form-row-first validate-required" id="billing_first_name_field">
                                        <label for="billing_first_name" class="">
                                            Nama
                                        </label>
                                        <input type="text" class="input-text " name="name" id="name" value="{{ Session::get('user-login')->name }}" />
                                    </p>

                                    <p class="form-row form-row-last validate-required" id="billing_last_name_field">
                                        <label for="billing_last_name" class="">
                                            Username
                                        </label>
                                        <input type="text" class="input-text " name="username" id="username" value="{{ Session::get('user-login')->username }}" />
                                    </p>

                                    <div class="clear"></div>

                                    <p class="form-row form-row-first validate-required validate-email" id="billing_email_field">
                                        <label for="billing_email" class="">
                                            Email Address
                                        </label>
                                        <input type="email" class="input-text " name="email" id="email" value="{{ Session::get('user-login')->email }}" />
                                    </p>

                                    <div class="clear"></div>

                                    <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                        <label for="billing_address_1" class="">
                                            Walletku
                                        </label>
                                        <input type="text" class="input-text " name="wallet" id="wallet" value="{{$uang}}" />
                                    </p>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                        <h3 id="order_review_heading">Your order</h3>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{$game["name"]}}
                                        </td>

                                        <td class="product-total">
                                            <span class="woocommerce-Price-amount amount">${{$game["price"]}}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <form action="{{ url('account/done') }}" method="POST">
                        @csrf
                        <input name="game_name" type="hidden" value="{{$game["name"]}}">
                        <input name="game_price" type="hidden" value="{{$game["price"]}}">
                        <button class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Buy" data-value="Place order">
                        Buy</button>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
</div>@endsection
