@extends('layout.app')

@section('body')
    <div class="body-wrapper theme-clearfix">
        @include('header.header')

        <div class="listings-title">
            <div class="container">
                <div class="wrap-title">
                    <h1>Products</h1>

                    <div class="bread">
                        <div class="breadcrumbs theme-clearfix">
                            <div class="container">
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                        <span class="go-page"></span>
                                    </li>

                                    <li class="active">
                                        <span>Products</span>
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
                <div id="contents" class="content col-lg-9 col-md-8 col-sm-8" role="main">
                    <div id="container">
                        <div id="content" role="main">
                            <!--  Shop Title -->
                            <div class="products-wrapper">
                                <div class="products-nav clearfix">
                                    <div class="view-mode-wrap pull-left clearfix">
                                        <div class="view-mode">
                                            <a href="javascript:void(0)" class="grid-view active" title="Grid view"><span>Grid view</span></a>
                                            <a href="javascript:void(0)" class="list-view" title="List view"><span>List view</span></a>
                                        </div>
                                    </div>

                                    <div class="catalog-ordering">
                                        <div class="orderby-order-container clearfix">
                                            <ul class="orderby order-dropdown pull-left">
                                                <li>
                                                    <span class="current-li"><span class="current-li-content"><a>Sort by Default</a></span></span>
                                                    <ul>
                                                        <li class="current"><a href="#">Sort by Default</a></li>
                                                        <li class=""><a href="#">Sort by Popularity</a></li>
                                                        <li class=""><a href="#">Sort by Rating</a></li>
                                                        <li class=""><a href="#">Sort by Date</a></li>
                                                        <li class=""><a href="#">Sort by Price</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <ul class="order pull-left">
                                                <li class="asc"><a href="#"><i class="fa fa-long-arrow-down"></i></a></li>
                                            </ul>

                                            {{-- <div class="product-number pull-left clearfix">
                                                <span class="show-product pull-left">Show </span>
                                                <ul class="sort-count order-dropdown pull-left">
                                                    <li>
                                                        <span class="current-li"><a>12</a></span>
                                                        <ul>
                                                            <li class="current"><a href="#">12</a></li>
                                                            <li class=""><a href="#">24</a></li>
                                                            <li class=""><a href="#">36</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <nav class="woocommerce-pagination pull-right">
                                        <ul class="page-numbers">
                                            @if ($current != 1)
                                                <li><a class="prev page-numbers" href="{{ url($current-1) }}">?</a></li>
                                            @endif
                                            @for ($i = 1; $i <= $totalPage; $i++)
                                                <li>
                                                    @if ($current == $i)
                                                        <span class="page-numbers current">{{ $i }}</span>
                                                    @else
                                                        <li><a class="page-numbers" href="{{ url($i) }}">{{ $i }}</a></li>
                                                    @endif
                                                </li>
                                            @endfor
                                            @if ($current != $totalPage)
                                                <li><a class="next page-numbers" href="{{ url($current+1) }}">?</a></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>

                                <div class="clear"></div>

                                <ul class="products-loop row grid clearfix">
                                    @yield('content')
                                </ul>

                                <div class="clear"></div>

                                <div class="products-nav clearfix">
                                    <div class="view-mode-wrap pull-left clearfix">
                                        <div class="view-mode">
                                            <a href="javascript:void(0)" class="grid-view active" title="Grid view"><span>Grid view</span></a>
                                            <a href="javascript:void(0)" class="list-view" title="List view"><span>List view</span></a>
                                        </div>
                                    </div>

                                    <div class="catalog-ordering">
                                        <div class="orderby-order-container clearfix">
                                            <ul class="orderby order-dropdown pull-left">
                                                <li>
                                                    <span class="current-li"><span class="current-li-content"><a>Sort by Default</a></span></span>
                                                    <ul>
                                                        <li class="current"><a href="#">Sort by Default</a></li>
                                                        <li class=""><a href="#">Sort by Popularity</a></li>
                                                        <li class=""><a href="#">Sort by Rating</a></li>
                                                        <li class=""><a href="#">Sort by Date</a></li>
                                                        <li class=""><a href="#">Sort by Price</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <ul class="order pull-left">
                                                <li class="asc"><a href="#"><i class="fa fa-long-arrow-down"></i></a></li>
                                            </ul>

                                            {{-- <div class="product-number pull-left clearfix">
                                                <span class="show-product pull-left">Show </span>
                                                <ul class="sort-count order-dropdown pull-left">
                                                    <li>
                                                        <span class="current-li"><a>12</a></span>
                                                        <ul>
                                                            <li class="current"><a href="#">12</a></li>
                                                            <li class=""><a href="#">24</a></li>
                                                            <li class=""><a href="#">36</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>

                                    <nav class="woocommerce-pagination pull-right">
                                        <ul class="page-numbers">
                                            @if ($current != 1)
                                                <li><a class="prev page-numbers" href="{{ url($current-1) }}">?</a></li>
                                            @endif
                                            @for ($i = 1; $i <= $totalPage; $i++)
                                                <li>
                                                    @if ($current == $i)
                                                        <span class="page-numbers current">{{ $i }}</span>
                                                    @else
                                                        <li><a class="page-numbers" href="{{ url($i) }}">{{ $i }}</a></li>
                                                    @endif
                                                </li>
                                            @endfor
                                            @if ($current != $totalPage)
                                                <li><a class="next page-numbers" href="{{ url($current+1) }}">?</a></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <aside id="right" class="sidebar col-lg-3 col-md-4 col-sm-4">
                    <div class="widget-1 widget-first widget woocommerce_product_categories-3 woocommerce widget_product_categories">
                        <div class="widget-inner">
                            <div class="block-title-widget">
                                <h2><span>Categories</span></h2>
                            </div>

                            <ul class="product-categories">
                                @foreach ($tags as $tag)
                                    <li class="cat-item"><a href="shop.html">{{ $tag->name }}</a> <span class="count">({{ count($tag->games) }})</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="widget-5 widget etrostore_best_seller_product-3 etrostore_best_seller_product">
                        <div class="widget-inner">
                            <div class="block-title-widget">
                                <h2><span>Best Sellers</span></h2>
                            </div>

                            <div id="best-seller-01" class="sw-best-seller-product">
                                <ul class="list-unstyled">
                                    <li class="clearfix">
                                        <div class="item-img">
                                            <a href="simple_product.html" title="corned beef enim">
                                                <img width="180" height="180" src="images/1903/65-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="images/1903/65-180x180.jpg 180w, images/1903/65-150x150.jpg 150w, images/1903/65-300x300.jpg 300w, images/1903/65.jpg 600w" sizes="(max-width: 180px) 100vw, 180px">
                                            </a>
                                        </div>

                                        <div class="item-content">
                                            <div class="reviews-content">
                                                <div class="star"></div>
                                                <div class="item-number-rating">
                                                    0 Review(s)
                                                </div>
                                            </div>

                                            <h4><a href="simple_product.html" title="corned beef enim">Corned beef enim</a></h4>

                                            <div class="price"><span class="woocommerce-Price-amount amount">$400.00</span></div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="item-img">
                                            <a href="simple_product.html" title="philips stand">
                                                <img width="180" height="180" src="images/1903/62-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="images/1903/62-180x180.jpg 180w, images/1903/62-150x150.jpg 150w, images/1903/62-300x300.jpg 300w, images/1903/62.jpg 600w" sizes="(max-width: 180px) 100vw, 180px">
                                            </a>
                                        </div>

                                        <div class="item-content">
                                            <div class="reviews-content">
                                                <div class="star"></div>
                                                <div class="item-number-rating">
                                                    0 Review(s)
                                                </div>
                                            </div>

                                            <h4><a href="simple_product.html" title="philips stand">Philips stand</a></h4>

                                            <div class="price"><del><span class="woocommerce-Price-amount amount">$300.00</span></del> <ins><span class="woocommerce-Price-amount amount">$250.00</span></ins></div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="item-img">
                                            <a href="simple_product.html" title="Vacuum cleaner">
                                                <img width="180" height="180" src="images/1903/26-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="images/1903/26-180x180.jpg 180w, images/1903/26-150x150.jpg 150w, images/1903/26-300x300.jpg 300w, images/1903/26.jpg 600w" sizes="(max-width: 180px) 100vw, 180px">
                                            </a>
                                        </div>

                                        <div class="item-content">
                                            <div class="reviews-content">
                                                <div class="star"><span style="width:52.5px"></span></div>
                                                <div class="item-number-rating">
                                                    4 Review(s)
                                                </div>
                                            </div>

                                            <h4><a href="simple_product.html" title="Vacuum cleaner">Vacuum cleaner</a></h4>

                                            <div class="price"><del><span class="woocommerce-Price-amount amount">$350.00</span></del> <ins><span class="woocommerce-Price-amount amount">$260.00</span></ins></div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="item-img">
                                            <a href="simple_product.html" title="veniam dolore">
                                                <img width="180" height="180" src="images/1903/45-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="images/1903/45-180x180.jpg 180w, images/1903/45-150x150.jpg 150w, images/1903/45-300x300.jpg 300w, images/1903/45.jpg 600w" sizes="(max-width: 180px) 100vw, 180px">
                                            </a>
                                        </div>

                                        <div class="item-content">
                                            <div class="reviews-content">
                                                <div class="star"><span style="width:35px"></span></div>
                                                <div class="item-number-rating">
                                                    2 Review(s)
                                                </div>
                                            </div>

                                            <h4><a href="simple_product.html" title="veniam dolore">Veniam dolore</a></h4>

                                            <div class="price"><del><span class="woocommerce-Price-amount amount">$250.00</span></del> <ins><span class="woocommerce-Price-amount amount">$190.00</span></ins></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

