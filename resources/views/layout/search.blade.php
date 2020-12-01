@extends('layout.app')

@section('title', 'You search for \''.$keyword.'\'')

@section('body')
    <body class="page woocommerce-account woocommerce-page">
        @include('header.header')

        <div class="listings-title">
			<div class="container">
				<div class="wrap-title">
					<h1>
                        @if (count($games) == 0)
                            No
                        @endif
                        Result from Keyword: {{ $keyword }}
                    </h1>
					{{-- <div class="bread">
						<div class="breadcrumbs theme-clearfix">
							<div class="container">
								<ul class="breadcrumb">
									<li>
										<a href="{{ url('/') }}">Home</a>
										<span class="go-page"></span>
									</li>

									<li class="active">
										<span>My account</span>
									</li>
								</ul>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>

        <div class="container">
            <div class="row">
                <div id="contents" class="content col-md-12" role="main">
                    {{-- <div class="listing-top">
                        <div class="widget-1 widget-first widget rev-slider-widget-2 widget_revslider">
                            <div class="widget-inner">
                                <!-- OWL SLIDER -->
                                <div class="wpb_revslider_element wpb_content_element no-margin">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_revslider_element wpb_content_element">
                                                <div id="main-slider" class="fullwidthbanner-container" style="position:relative; width:100%; height:auto; margin-top:0px; margin-bottom:0px">
                                                    <div class="module slideshow no-margin">
                                                        <div class="item">
                                                            <a href="simple_product.html"><img src="images/1903/slider-shop.jpg" alt="slider1" class="img-responsive" height="559"></a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="simple_product.html"><img src="images/1903/slider-shop.jpg" alt="slider2" class="img-responsive" height="559"></a>
                                                        </div>
                                                    </div>
                                                    <div class="loadeding"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- OWL LIGHT SLIDER -->
                            </div>
                        </div>

                        <div class="widget-2 widget-last widget sw_brand-2 sw_brand">
                            <div class="widget-inner">
                                <div id="sw_brand_01" class="responsive-slider sw-brand-container-slider clearfix" data-lg="5" data-md="4" data-sm="3" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                    <div class="resp-slider-container">
                                        <div class="slider responsive">
                                            <div class="item item-brand-cat">
                                                <div class="item-image">
                                                    <a href="shop.html"><img width="173" height="88" src="images/1903/Brand_1.jpg" class="attachment-173x91 size-173x91" alt=""></a>
                                                </div>
                                            </div>

                                            <div class="item item-brand-cat">
                                                <div class="item-image">
                                                    <a href="shop-2.html"><img width="173" height="91" src="images/1903/br1.jpg" class="attachment-173x91 size-173x91" alt=""></a>
                                                </div>
                                            </div>

                                            <div class="item item-brand-cat">
                                                <div class="item-image">
                                                    <a href="shop.html"><img width="173" height="91" src="images/1903/br2.jpg" class="attachment-173x91 size-173x91" alt=""></a>
                                                </div>
                                            </div>

                                            <div class="item item-brand-cat">
                                                <div class="item-image">
                                                    <a href="shop.html"><img width="173" height="88" src="images/1903/Brand_1.jpg" class="attachment-173x91 size-173x91" alt=""></a>
                                                </div>
                                            </div>

                                            <div class="item item-brand-cat">
                                                <div class="item-image">
                                                    <a href="shop.html"><img width="173" height="88" src="images/1903/Brand_10.jpg" class="attachment-173x91 size-173x91" alt=""></a>
                                                </div>
                                            </div>

                                            <div class="item item-brand-cat">
                                                <div class="item-image">
                                                    <a href="shop.html"><img width="173" height="88" src="images/1903/Brand_1.jpg" class="attachment-173x91 size-173x91" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div id="container">
                        <div id="content" role="main">
                            <!--  Shop Title -->
                            <div class="products-wrapper">
                                {{-- <div class="row-fix clearfix">
                                    <li class="product-category product first product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c7.jpg" alt="Accessories" width="300" height="300">
                                            <h3>
                                                Accessories <mark class="count">(1)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c10.jpg" alt="Appliances" width="300" height="300">
                                            <h3>
                                                Appliances <mark class="count">(6)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c5.jpg" alt="Cameras &amp; Accessories" width="300" height="300">
                                            <h3>
                                                Cameras &amp; Accessories <mark class="count">(3)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product last product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c3.jpg" alt="Computers &amp; Laptops" width="300" height="300">
                                            <h3>
                                                Computers &amp; Laptops <mark class="count">(6)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product first product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c4.jpg" alt="Computers &amp; Networking" width="300" height="300">
                                            <h3>
                                                Computers &amp; Networking <mark class="count">(1)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c2.jpg" alt="Electronics" width="300" height="300">
                                            <h3>
                                                Electronics <mark class="count">(8)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c8.jpg" alt="Home Appliances" width="300" height="300">
                                            <h3>
                                                Home Appliances <mark class="count">(1)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product last product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c9.jpg" alt="Home Furniture" width="300" height="300">
                                            <h3>
                                                Home Furniture <mark class="count">(1)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product first product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c1.jpg" alt="Smartphones &amp; Tablet" width="300" height="300">
                                            <h3>
                                                Smartphones &amp; Tablet <mark class="count">(2)</mark>
                                            </h3>
                                        </a>
                                    </li>

                                    <li class="product-category product product-col-5 col-md-3 col-sm-6 col-xs-6 col-mb-12">
                                        <a href="shop.html">
                                            <img src="images/1903/c6.jpg" alt="Televisions" width="300" height="300">
                                            <h3>
                                                Televisions <mark class="count">(2)</mark>
                                            </h3>
                                        </a>
                                    </li>
                                </div> --}}

                                {{-- <div class="products-nav clearfix">
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

                                            <div class="product-number pull-left clearfix">
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
                                            </div>
                                        </div>
                                    </div>

                                    <nav class="woocommerce-pagination pull-right">
                                        <span class="note">Page:</span>
                                        <ul class="page-numbers">
                                            <li><span class="page-numbers current">1</span></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><a class="next page-numbers" href="#">?</a></li>
                                        </ul>
                                    </nav>
                                </div> --}}

                                {{-- <div class="clear"></div> --}}

                                <ul class="products-loop row grid clearfix">
                                    @yield('content')
                                </ul>

                                {{-- <div class="clear"></div> --}}

                                {{-- <div class="products-nav clearfix">
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

                                            <div class="product-number pull-left clearfix">
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
                                            </div>
                                        </div>
                                    </div>

                                    <nav class="woocommerce-pagination pull-right">
                                        <span class="note">Page:</span>
                                        <ul class="page-numbers">
                                            <li><span class="page-numbers current">1</span></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><a class="next page-numbers" href="#">?</a></li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
