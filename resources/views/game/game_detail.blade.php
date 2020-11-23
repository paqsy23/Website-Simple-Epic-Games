@extends('layout.app')

@section('title')
    <title>{{$game->name}}</title>
@endsection

@section('body')
<body class="product-template-default single single-product woocommerce woocommerce-page">
	<div class="body-wrapper theme-clearfix">
		@include('header.header')

        {{-- Title + Breadcrumb --}}
		<div class="listings-title">
			<div class="container">
				<div class="wrap-title">
					<h1>{{$game->name}}</h1>
					<div class="bread">
						<div class="breadcrumbs theme-clearfix">
							<div class="container">
								<ul class="breadcrumb">
									<li><a href="home_page_3.html">Store</a><span class="go-page"></span></li>
									{{-- <li><a href="group_product.html">Group Product</a><span class="go-page"></span></li> --}}
									<li class="active"><span>{{$game->name}}</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        {{-- Content --}}
		<div class="container">
			<div class="row">
				<div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12" role="main">
					<div id="container">
						<div id="content" role="main">
							<div class="single-product clearfix">
								<div id="product-01" class="product type-product status-publish has-post-thumbnail product_cat-accessories product_brand-global-voices first outofstock featured shipping-taxable purchasable product-type-simple">
									<div class="product_detail row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
											<div class="slider_img_productd">
												<!-- woocommerce_show_product_images -->
												<div id="product_img_01" class="product-images" data-rtl="false">
													<div class="product-images-container clearfix thumbnail-bottom">
														<!-- Image Slider -->
														<div class="slider product-responsive">
															<div class="item-img-slider">
																<div class="images">
																	<a href="{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-03-1920x1080-285553599.jpg?h=1080&resize=1&w=1920')}}" data-rel="prettyPhoto[product-gallery]" class="zoom">
																		<img width="600" height="600" src="{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-03-1920x1080-285553599.jpg?h=1080&resize=1&w=1920')}}" class="attachment-shop_single size-shop_single" alt="" srcset="{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-03-1920x1080-285553599.jpg?h=1080&resize=1&w=1920')}} 600w, {{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-03-1920x1080-285553599.jpg?h=1080&resize=1&w=1920')}} 150w,{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-03-1920x1080-285553599.jpg?h=1080&resize=1&w=1920')}} 300w, {{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-03-1920x1080-285553599.jpg?h=1080&resize=1&w=1920')}} 180w" sizes="(max-width: 600px) 100vw, 600px">
																	</a>
																</div>
															</div>

															{{-- <div class="item-img-slider">
																<div class="images">
																	<a href="{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920')}}" data-rel="prettyPhoto[product-gallery]" class="zoom">
																		<img width="600" height="600" src="{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920')}}" class="attachment-shop_single size-shop_single" alt="" srcset="{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920')}} 600w, {{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920')}} 150w,{{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920')}} 300w, {{url('https://cdn2.unrealengine.com/egs-outriders-peoplecanfly-g1a-04-1920x1080-285553574.jpg?h=1080&resize=1&w=1920')}} 180w" sizes="(max-width: 600px) 100vw, 600px">
																	</a>
																</div>
															</div> --}}

															{{-- <div class="item-img-slider">
																<div class="images">
																	<a href="{{asset('images/1903/47.jpg')}}" data-rel="prettyPhoto[product-gallery]" class="zoom">
																		<img width="600" height="600" src="{{asset('images/1903/47.jpg')}}" class="attachment-shop_single size-shop_single" alt="" srcset="{{asset('images/1903/47.jpg')}} 600w, {{asset('images/1903/47-150x150.jpg')}} 150w,{{asset(' images/1903/47-300x300.jpg')}} 300w, {{asset('images/1903/47-180x180.jpg')}} 180w" sizes="(max-width: 600px) 100vw, 600px">
																	</a>
																</div>
															</div>

															<div class="item-img-slider">
																<div class="images">
																	<a href="{{asset('images/1903/46.jpg')}}" data-rel="prettyPhoto[product-gallery]" class="zoom">
																		<img width="600" height="600" src="{{asset('images/1903/46.jpg')}}" class="attachment-shop_single size-shop_single" alt="" srcset="{{asset('images/1903/46.jpg')}} 600w, {{asset('images/1903/46-150x150.jpg')}} 150w,{{asset(' images/1903/46-300x300.jpg')}} 300w, {{asset('images/1903/46-180x180.jpg')}} 180w" sizes="(max-width: 600px) 100vw, 600px">
																	</a>
																</div>
															</div>

															<div class="item-img-slider">
																<div class="images">
																	<a href="{{asset('images/1903/49.jpg')}}" data-rel="prettyPhoto[product-gallery]" class="zoom">
																		<img width="600" height="600" src="{{asset('images/1903/49.jpg')}}" class="attachment-shop_single size-shop_single" alt="" srcset="{{asset('images/1903/49.jpg')}} 600w, {{asset('images/1903/49-150x150.jpg')}} 150w,{{asset(' images/1903/49-300x300.jpg')}} 300w, {{asset('images/1903/49-180x180.jpg')}} 180w" sizes="(max-width: 600px) 100vw, 600px">
																	</a>
																</div>
															</div>

															<div class="item-img-slider">
																<div class="images">
																	<a href="{{asset('images/1903/43.jpg')}}" data-rel="prettyPhoto[product-gallery]" class="zoom">
																		<img width="600" height="600" src="{{asset('images/1903/43.jpg')}}" class="attachment-shop_single size-shop_single" alt="" srcset="{{asset('images/1903/43.jpg')}} 600w, {{asset('images/1903/43-150x150.jpg')}} 150w,{{asset(' images/1903/43-300x300.jpg')}} 300w, {{asset('images/1903/43-180x180.jpg')}} 180w" sizes="(max-width: 600px) 100vw, 600px">
																	</a>
																</div>
															</div> --}}
														</div>

														<!-- Thumbnail Slider -->
														{{-- <div class="slider product-responsive-thumbnail" id="product_thumbnail_247">
															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img width="180" height="180" src="{{asset('images/1903/49-180x180.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="{{asset('images/1903/49-180x180.jpg')}} 180w, {{asset('images/1903/49-150x150.jpg')}} 150w, {{asset('images/1903/49-300x300.jpg')}} 300w, {{asset('images/1903/49.jpg')}} 600w" sizes="(max-width: 180px) 100vw, 180px">
																</div>
															</div>

															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img width="180" height="180" src="{{asset('images/1903/48-180x180.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="{{asset('images/1903/48-180x180.jpg')}} 180w, {{asset('images/1903/48-150x150.jpg')}} 150w, {{asset('images/1903/48-300x300.jpg')}} 300w, {{asset('images/1903/48.jpg')}} 600w" sizes="(max-width: 180px) 100vw, 180px">
																</div>
															</div>

															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img width="180" height="180" src="{{asset('images/1903/47-180x180.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="{{asset('images/1903/47-180x180.jpg')}} 180w, {{asset('images/1903/47-150x150.jpg')}} 150w, {{asset('images/1903/47-300x300.jpg')}} 300w, {{asset('images/1903/47.jpg')}} 600w" sizes="(max-width: 180px) 100vw, 180px">
																</div>
															</div>

															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img width="180" height="180" src="{{asset('images/1903/46-180x180.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="{{asset('images/1903/46-180x180.jpg')}} 180w, {{asset('images/1903/46-150x150.jpg')}} 150w, {{asset('images/1903/46-300x300.jpg')}} 300w, {{asset('images/1903/46.jpg')}} 600w" sizes="(max-width: 180px) 100vw, 180px">
																</div>
															</div>

															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img width="180" height="180" src="{{asset('images/1903/49-180x180.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="{{asset('images/1903/49-180x180.jpg')}} 180w, {{asset('images/1903/49-150x150.jpg')}} 150w, {{asset('images/1903/49-300x300.jpg')}} 300w, {{asset('images/1903/49.jpg')}} 600w" sizes="(max-width: 180px) 100vw, 180px">
																</div>
															</div>

															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																<img width="180" height="180" src="{{asset('images/1903/43-180x180.jpg')}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" srcset="{{asset('images/1903/43-180x180.jpg')}} 180w, {{asset('images/1903/43-150x150.jpg')}} 150w, {{asset('images/1903/43-300x300.jpg')}} 300w, {{asset('images/1903/43.jpg')}} 600w" sizes="(max-width: 180px) 100vw, 180px">
																</div>
															</div>
														</div> --}}
													</div>
												</div>
											</div>
										</div>
                                        {{-- Isi Game --}}
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
											<div class="content_product_detail">
                                                {{-- Nama Game --}}
												<h1 class="product_title entry-title">{{$game->name}}</h1>

												{{-- <div class="reviews-content">
													<div class="star"></div>
													<a href="#reviews" class="woocommerce-review-link" rel="nofollow"><span class="count">0</span> Review(s)</a>
												</div> --}}
                                                {{-- Harga Game --}}
												<div>
													<p class="price"><span class="woocommerce-Price-amount amount">${{$game->price}}</span></p>
												</div>

												{{-- <div class="product-info clearfix">
													<div class="product-stock pull-left out-stock">
														<span>Out stock</span>
													</div>
												</div> --}}

												<div class="description" itemprop="description">
													<p>{{$game->description}}</p>
												</div>

												{{-- <p class="stock out-of-stock">Out of stock</p> --}}

												<div class="social-share">
													<div class="title-share">Follow Us</div>
													<div class="wrap-content">
                                                        @if ($game->instagram!=null)
                                                        <a href="{{url($game->instagram)}}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-instagram"></i></a>
                                                        @endif
                                                        @if ($game->website!=null)
                                                        <a href="{{url($game->website)}}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-dribbble"></i></a>
                                                        @endif
                                                        @if ($game->reddit!=null)
                                                        <a href="{{url($game->reddit)}}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-reddit"></i></a>
                                                        @endif
                                                        @if ($game->facebook!=null)
                                                        <a href="{{url($game->facebook)}}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
                                                        @endif
                                                        @if ($game->youtube!=null)
                                                        <a href="{{url($game->youtube)}}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-youtube"></i></a>
                                                        @endif
                                                        @if ($game->twitter!=null)
                                                        <a href="{{url($game->twitter)}}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
                                                        @endif
														{{-- <a href="http://www.facebook.com/" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
														<a href="http://twitter.com/" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
														<a href="https://plus.google.com/" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
														<a href="#"><i class="fa fa-dribbble"></i></a>
														<a href="#"><i class="fa fa-instagram"></i></a> --}}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tabs clearfix">
									<div class="tabbable">
										<ul class="nav nav-tabs">
											<li class="aboutGame_tab active">
												<a href="#tab-aboutGame" data-toggle="tab">About Game</a>
											</li>
											<li class="specification_tab">
												<a href="#tab-specification" data-toggle="tab">Specification</a>
											</li>
											<li class="reviews_tab ">
												<a href="#tab-reviews" data-toggle="tab">Reviews (0)</a>
											</li>
										</ul>

										<div class="clear"></div>

										<div class=" tab-content">
											<div class="tab-pane active" id="tab-aboutGame">
												<h2>About Game</h2>
                                                <h3>Release Date</h3>
                                                <h5>{{$game->release}}</h5>
                                                <h3>Developer</h3>
                                                <h5>{{$game->developer->name}}</h5>
                                                <h3>Publisher</h3>
                                                <h5>{{$game->publisher->name}}</h5>
                                                <h3>Tags</h3>
                                                <h5>
                                                    {{-- untuk memisah tag dengan koma --}}
                                                    @foreach ($game->tags as $curTag)
                                                        @if ($game->tags[0]->name == $curTag->name)
                                                            {{$curTag->name}}
                                                        @else
                                                            , {{$curTag->name}}
                                                        @endif
                                                    @endforeach
                                                </h5>
											</div>
											<div class="tab-pane" id="tab-specification">
												<h2>System </h2>
												<p>Proident adipisicing laborum beef ribs tri-tip dolore meatball tempor rump flank prosciutto elit do. Duis tenderloin culpa excepteur. Fugiat irure est cupim dolor, ut nulla id andouille chicken spare ribs eiusmod brisket biltong. Eiusmod minim tail cupim labore ad filet mignon, andouille esse enim. Sausage salami dolor ex adipisicing consequat. Ground round nostrud ut fatback voluptate consequat in minim drumstick culpa dolore. Ea beef prosciutto in sirloin fatback enim velit consectetur in pork belly pancetta culpa shank.</p>
												<p>Shank quis in duis, id officia nulla. Pancetta sunt filet mignon porchetta doner turkey occaecat. Meatball corned beef elit ut fugiat. Hamburger biltong tail beef in cupim proident turducken picanha. Sausage chicken incididunt ad occaecat porchetta pancetta corned beef ham hock laborum nisi ullamco pork loin kielbasa aliqua.</p>
												<p>In jerky minim chicken duis ground round nostrud pork belly occaecat pastrami commodo adipisicing tongue doner short loin. Officia est do, filet mignon shank pork loin anim esse quis kevin corned beef enim. Magna sint sirloin ham hock cupidatat laboris. Boudin spare ribs kevin meatloaf id short loin swine flank brisket aute. Reprehenderit turkey qui, boudin swine voluptate ipsum fugiat.</p>
												<p>Salami in ball tip pig eiusmod occaecat pork chop, consequat excepteur incididunt. Ground round picanha ut boudin exercitation jerky meatball strip steak ipsum labore spare ribs turducken ribeye ut aliquip. Id ipsum esse nisi ball tip chuck adipisicing sint culpa t-bone brisket bresaola mollit. Enim eu kevin, tail in nisi nulla sirloin adipisicing veniam dolore.</p>
											</div>
											<div class="tab-pane " id="tab-reviews">
												<div id="reviews">
													<div id="comments">
														<h2>Reviews</h2>
														<p class="woocommerce-noreviews">There are no reviews yet.</p>
													</div>

													<div id="review_form_wrapper">
														<div id="review_form">
															<div id="respond" class="comment-respond">
																<h3 id="reply-title" class="comment-reply-title">
																	Be the first to review "turkey qui"
																	<small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small>
																</h3>

																<form action="#" method="post" id="commentform" class="comment-form">
																	<p class="comment-form-rating">
																		<label for="rating">Your Rating</label>
																		<select name="rating" id="rating">
																			<option value="">Rate ...</option>
																			<option value="5">Perfect</option>
																			<option value="4">Good</option>
																			<option value="3">Average</option>
																			<option value="2">Not that bad</option>
																			<option value="1">Very Poor</option>
																		</select>
																	</p>

																	<p class="comment-form-comment">
																		<label for="comment">Your Review</label>
																		<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
																	</p>

																	<p class="form-submit">
																		<input name="submit" type="submit" id="submit" class="submit" value="Submit">
																	</p>
																</form>
															</div>
														</div>
													</div>

													<div class="clear"></div>
												</div>
											</div>
										</div>
									</div>
                                </div>

{{-- Related Product
								<div class="bottom-single-product theme-clearfix">
									<div class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
										<div class="widget-inner">
											<div id="slider_sw_related_upsell_widget-2" class="sw-woo-container-slider related-products responsive-slider clearfix loading" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
												<div class="resp-slider-container">
													<div class="box-slider-title">
														<h2><span>Related Products</span></h2>
													</div>

													<div class="slider responsive">
														<div class="item ">
															<div class="item-wrap">
																<div class="item-detail">
																	<div class="item-img products-thumb">
																		<a href="simple_product.html">
																			<div class="product-thumb-hover">
																				<img width="300" height="300" src="{{asset('images/1903/49-300x300.jpg')}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset={{asset('"images/1903/49-300x300.jpg 300w, {{asset('images/1903/49-150x150.jpg 150w, {{asset('images/1903/49-180x180.jpg 180w, {{asset('images/1903/49.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
																			</div>
																		</a>

																		<!-- add to cart, wishlist, compare -->
																		<div class="item-bottom clearfix">
																			<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

																			<a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

																			<div class="yith-wcwl-add-to-wishlist ">
																				<div class="yith-wcwl-add-button show" style="display:block">
																					<a href="wishlist.html" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																					<img src="{{asset('images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
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
																		</div>
																	</div>

																	<div class="item-content">
																		<!-- rating  -->
																		<div class="reviews-content">
																			<div class="star"></div>
																			<div class="item-number-rating">
																				0 Review(s)
																			</div>
																		</div>
																		<!-- end rating  -->

																		<h4><a href="simple_product.html" title="turkey qui">Turkey Qui</a></h4>

																		<!-- price -->
																		<div class="item-price">
																				$300.00
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="item ">
															<div class="item-wrap">
																<div class="item-detail">
																	<div class="item-img products-thumb">
																		<span class="onsale">Sale!</span>
																		<a href="simple_product.html">
																			<div class="product-thumb-hover">
																				<img width="300" height="300" src="{{asset('images/1903/39-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset={{asset('"images/1903/39-300x300.jpg 300w, {{asset('images/1903/39-150x150.jpg 150w, {{asset('images/1903/39-180x180.jpg 180w, {{asset('images/1903/39.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
																			</div>
																		</a>

																		<!-- add to cart, wishlist, compare -->
																		<div class="item-bottom clearfix">
																			<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

																			<a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

																			<div class="yith-wcwl-add-to-wishlist ">
																				<div class="yith-wcwl-add-button show" style="display:block">
																					<a href="wishlist.html" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
																					<img src="{{asset('images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
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
																		</div>
																	</div>

																	<div class="item-content">
																		<!-- rating  -->
																		<div class="reviews-content">
																			<div class="star"></div>
																			<div class="item-number-rating">
																				0 Review(s)
																			</div>
																		</div>
																		<!-- end rating  -->

																		<h4><a href="simple_product.html" title="iPad Mini 2 Retina">iPad Mini 2 Retina</a></h4>

																		<!-- price -->
																		<div class="item-price">
																				<del>
																					$300.00
																				</del>

																				<ins>
																					$290.00
																				</ins>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="item ">
															<div class="item-wrap">
																<div class="item-detail">
																	<div class="item-img products-thumb">
																		<a href="simple_product.html">
																			<div class="product-thumb-hover">
																				<img width="300" height="300" src="{{asset('images/1903/22-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset={{asset('"images/1903/22-300x300.jpg 300w, {{asset('images/1903/22-150x150.jpg 150w, {{asset('images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
																			</div>
																		</a>

																		<!-- add to cart, wishlist, compare -->
																		<div class="item-bottom clearfix">
																			<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

																			<a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

																			<div class="yith-wcwl-add-to-wishlist ">
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
																		</div>
																	</div>

																	<div class="item-content">
																		<!-- rating  -->
																		<div class="reviews-content">
																			<div class="star"></div>
																			<div class="item-number-rating">
																				0 Review(s)
																			</div>
																		</div>
																		<!-- end rating  -->

																		<h4><a href="simple_product.html" title="Philips HR2195">Philips HR2195</a></h4>

																		<!-- price -->
																		<div class="item-price">
																				$200.00
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="item ">
															<div class="item-wrap">
																<div class="item-detail">
																	<div class="item-img products-thumb">
																		<a href="simple_product.html">
																			<div class="product-thumb-hover">
																				<img width="300" height="300" src="images/1903/14-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="images/1903/14-300x300.jpg 300w, images/1903/14-150x150.jpg 150w, images/1903/14-180x180.jpg 180w, images/1903/14.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
																			</div>
																		</a>

																		<!-- add to cart, wishlist, compare -->
																		<div class="item-bottom clearfix">
																			<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

																			<a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

																			<div class="yith-wcwl-add-to-wishlist ">
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
																		</div>
																	</div>

																	<div class="item-content">
																		<!-- rating  -->
																		<div class="reviews-content">
																			<div class="star"></div>
																			<div class="item-number-rating">
																				0 Review(s)
																			</div>
																		</div>
																		<!-- end rating  -->

																		<h4><a href="simple_product.html" title="sony xperia s">sony xperia s</a></h4>

																		<!-- price -->
																		<div class="item-price">
																				$300.00
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="item ">
															<div class="item-wrap">
																<div class="item-detail">
																	<div class="item-img products-thumb">
																		<a href="simple_product.html">
																			<div class="product-thumb-hover">
																				<img width="300" height="300" src="images/1903/58-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="images/1903/58-300x300.jpg 300w, images/1903/58-150x150.jpg 150w, images/1903/58-180x180.jpg 180w, images/1903/58.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
																			</div>
																		</a>

																		<!-- add to cart, wishlist, compare -->
																		<div class="item-bottom clearfix">
																			<a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

																			<a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

																			<div class="yith-wcwl-add-to-wishlist ">
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
																		</div>
																	</div>

																	<div class="item-content">
																		<!-- rating  -->
																			<div class="reviews-content">
																			<div class="star"></div>
																			<div class="item-number-rating">
																				0 Review(s)
																			</div>
																		</div>
																		<!-- end rating  -->

																		<h4><a href="simple_product.html" title="nikon d7000">nikon d7000</a></h4>

																		<!-- price -->
																		<div class="item-price">
																				$300.00
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="widget-2 widget-last widget sw_related_upsell_widget-3 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
										<div class="widget-inner"></div>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
