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

                        <!-- add to cart, wishlist, compare -->
                        {{-- <div class="item-bottom clearfix">
                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                            <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                <div class="yith-wcwl-add-button show" style="display:block">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                    <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                </div>

                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                    <span class="feedback">Product added!</span>
                                    <a href="#" rel="nofollow">Browse Wishlist</a>
                                </div>

                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                    <span class="feedback">The product is already in the wishlist!</span>
                                    <a href="#" rel="nofollow">Browse Wishlist</a>
                                </div>

                                <div style="clear:both"></div>
                                <div class="yith-wcwl-wishlistaddresponse"></div>
                            </div>

                            <div class="clear"></div>
                            <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                        </div> --}}
                    </div>

                    <div class="item-content products-content">
                        <div class="reviews-content">
                            <div class="star"><span style="width: @if ($game->rating == null) 0px @else {{ $game->rating/100*67 }}px @endif"></span></div>
                        </div>

                        <h4><a href="{{ url('game/'.$game->id) }}" title="{{ $game->name }}">{{ $game->name }}</a></h4>

                        <span class="item-price"><ins><span class="woocommerce-Price-amount amount">${{ number_format($game->price, 2) }}</span></ins></span>

                        <div class="item-description">{{ $game->description }}</div>

                        <!-- add to cart, wishlist, compare -->
                        {{-- <div class="item-bottom clearfix">
                            <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                            <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                <div class="yith-wcwl-add-button show" style="display:block">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                    <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                </div>

                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                    <span class="feedback">Product added!</span>
                                    <a href="#" rel="nofollow">Browse Wishlist</a>
                                </div>

                                <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                    <span class="feedback">The product is already in the wishlist!</span>
                                    <a href="#" rel="nofollow">Browse Wishlist</a>
                                </div>

                                <div style="clear:both"></div>
                                <div class="yith-wcwl-wishlistaddresponse"></div>
                            </div>

                            <div class="clear"></div>
                            <a href="ajax/fancybox/example.html" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </li>
    @endforeach
@endsection
