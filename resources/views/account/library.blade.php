@extends('layout.app')

@section('title')
Library
@endsection

@section('body')
<body class="page woocommerce-checkout woocommerce-page">
    @include('header.header')

    {{-- Title + Breadcrumb --}}
    <div class="listings-title">
        <div class="container">
            <div class="wrap-title">
                <h1>My Library</h1>
                <div class="bread">
                    <div class="breadcrumbs theme-clearfix">
                        <div class="container">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                    <span class="go-page"></span>
                                </li>

                                <li class="active">
                                    <span>Library</span>
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
            <div id="contents" class="content col-md-12" role="main">
                <div id="container">
                    <div id="content" role="main">
                        <!--  Shop Title -->
                        <div class="products-wrapper">
                            <ul class="products-loop row grid clearfix">
                                @foreach ($library as $item)
                                    @foreach ($games as $game)
                                        @if ($item->game_id == $game->id)
                                            <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 post-255 product type-product status-publish has-post-thumbnail product_cat-electronics product_cat-home-appliances product_cat-vacuum-cleaner product_brand-apoteket first instock sale featured shipping-taxable purchasable product-type-simple">
                                                <div class="products-entry item-wrap clearfix">
                                                    <div class="item-detail">
                                                        <div class="item-img products-thumb">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="{{ url('game/'.$game->id) }}">
                                                                <div class="product-thumb-hover">
                                                                    @foreach ($game->img as $image)
                                                                        @if (strpos($image->link, 'logo'))
                                                                            <img width="300" height="300" src="{{ asset('storage/games/'.$image->link) }}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px">
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="item-content products-content" style="height: 10em;">
                                                            {{-- <div class="reviews-content">
                                                                <div class="star"><span style="width: @if ($game->rating == null) 0px @else {{ $game->rating/100*67 }}px @endif"></span></div>
                                                            </div> --}}

                                                            <h4><a href="{{ url('game/'.$game->id) }}" title="{{ $game->name }}">{{ $game->name }}</a></h4>
                                                            <h4>
                                                                {{$game->developer->name}}
                                                                @if ($game->developer != $game->publisher)
                                                                    | {{$game->publisher->name}}
                                                                @endif
                                                            </h4>

                                                            <span class="item-price"><ins><span class="woocommerce-Price-amount amount">Owned</span></ins></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
