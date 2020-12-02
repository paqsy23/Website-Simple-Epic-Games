@extends('layout.search')

@section('content')
    @foreach ($games as $game)
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

                    <div class="item-content products-content">
                        <div class="reviews-content">
                            <div class="star"><span style="width: @if ($game->rating == null) 0px @else {{ $game->rating/100*67 }}px @endif"></span></div>
                        </div>

                        <h4><a href="{{ url('game/'.$game->id) }}" title="{{ $game->name }}">{{ $game->name }}</a></h4>

                        <span class="item-price"><ins><span class="woocommerce-Price-amount amount">${{ number_format($game->price, 2) }}</span></ins></span>

                        <div class="item-description">{{ $game->description }}</div>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
@endsection
