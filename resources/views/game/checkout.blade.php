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
                    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="#">
                        <div class="col2-set" id="customer_details">
                            <div class="col-lg-12" style="margin-bottom:10%">
                                <div class="woocommerce-billing-fields">
                                    <h3>Billing Details <span style="float:right">Your Wallet : ${{$user->money}}</span> </h3>
                                    <hr>
                                    <div id="order_review" class="woocommerce-checkout-review-order">

                                    <div class="row">
                                        <div class="col-md-2">
                                            @foreach ($game->img as $image)
                                                @if (strpos($image->link, 'logo'))
                                                    <img width="180" height="180" src="{{ asset('storage/games/'.$image->link) }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" sizes="(max-width: 180px) 100vw, 180px">
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-md-10" style="margin-bottom:10px">
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
                                                        {{$game->name}}
                                                        </td>

                                                        <td class="product-total">
                                                            ${{$game->price}}
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tfoot>
                                                    <tr class="order-total">
                                                        <th>Total</th>

                                                        <td>
                                                            <strong>
                                                                ${{$game->price}}
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                            @if ($user->money-$game->price<0)
                                            <span class="text-danger">Your wallet is not enough to buy this game </span>
                                            <button type="button" class="btn btn-success" style="float:right" disabled>Checkout</button>
                                            @else
                                            <a href="{{url('account/done/'.$game->id)}}"><button type="button" class="btn btn-success" style="float:right">Checkout</button></a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
