<!DOCTYPE html>
<html lang="en">
<head>
    {{-- title --}}
    <title>@yield('title')</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('icons/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('icons/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('icons/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('icons/apple-touch-icon-57-precomposed.png')}}" />
    <link rel="shortcut icon" href="{{asset('icons/favicon.png')}}" />

	<!-- GOOGLE WEB FONTS -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

	<!-- BOOTSTRAP 3.3.7 CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

	<!-- SLICK v1.6.0 CSS -->
	<link rel="stylesheet" href="{{asset('css/slick-1.6.0/slick.css')}}" />

	<link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}" />
	<link rel="stylesheet" href="{{asset('css/yith-woocommerce-compare/colorbox.css')}}" />
	<link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/owl-carousel/owl.theme.default.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/js_composer/js_composer.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/woocommerce/woocommerce.css')}}" />
	<link rel="stylesheet" href="{{asset('css/woocommerce/woocommerce-layout.css')}}" />
	<link rel="stylesheet" href="{{asset('css/woocommerce/woocommerce-smallscreen.css')}}" />
	<link rel="stylesheet" href="{{asset('css/prettyphoto/prettyPhoto.css')}}" />
	<link rel="stylesheet" href="{{asset('css/yith-woocommerce-wishlist/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="{{asset('css/custom.css')}}" />
	<link rel="stylesheet" href="{{asset('css/app-orange.css')}}" id="theme_color" />
	<link rel="stylesheet" href="#" id="rtl" />
	<link rel="stylesheet" href="{{asset('css/app-responsive.css')}}" />
</head>

{{-- include header di body --}}
@yield('body')

@include('footer.footer')

{{-- DIALOGS --}}
<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-login">
        <a href="javascript:void(0)" title="Close" class="close close-login" data-dismiss="modal">Close</a>

        <div class="tt_popup_login">
            <strong>Sign in Or Register</strong>
        </div>

        <div class="block-content">
            <div class="col-reg registered-account">
                <div class="email-input">
                    <input type="text" class="form-control input-text username" name="username" id="username" placeholder="Username" />
                </div>

                <div class="pass-input">
                    <input class="form-control input-text password" type="password" placeholder="Password" name="password" id="password" />
                </div>

                <div class="ft-link-p">
                    <a href="lost_password.html" title="Forgot your password">Forgot your password?</a>
                </div>

                <div class="actions">
                    <div class="submit-login">
                        <input type="submit" class="button btn-submit-login" name="login" value="Login" />
                    </div>
                </div>
            </div>

            <div class="col-reg login-customer">
                <h2>NEW HERE?</h2>

                <p class="note-reg">Registration is free and easy!</p>

                <ul class="list-log">
                    <li>Faster checkout</li>

                    <li>Save multiple game</li>

                    <li>View and track orders and more</li>
                </ul>

                <a href="{{ url('register') }}" title="Register" class="btn-reg-popup">Create an account</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

</div>
{{-- <a id="etrostore-totop" href="#"></a> --}}

<script type="text/javascript" src="{{asset('js/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery/jquery-migrate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery/js.cookie.min.js')}}"></script>

	<!-- OPEN LIBS JS -->
	<script type="text/javascript" src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/slick-1.6.0/slick.min.js')}}"></script>

	<script type="text/javascript">
		/* <![CDATA[ */
			var woocommerce_price_slider_params = {"currency_symbol":"$","currency_pos":"left","min_price":"100","max_price":"500"};
			var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};
		/* ]]> */
	</script>

	<script type="text/javascript" src="{{asset('js/widget.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/mouse.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/slider.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js_composer/js_composer_front.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/yith-woocommerce-compare/jquery.colorbox-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/isotope/isotope.js')}}"></script>
	{{-- <script type="text/javascript" src="{{asset('js/fancybox/jquery.fancybox.pack.js')}}"></script> --}}
	<script type="text/javascript" src="{{asset('js/sw_woocommerce/category-ajax.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/sw_woocommerce/jquery.countdown.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/woocommerce/price-slider.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/woocommerce/single-product.min.js')}}"></script>
	{{-- <script type="text/javascript" src="{{asset('js/woocommerce/prettyPhoto/jquery.prettyPhoto.init.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/woocommerce/prettyPhoto/jquery.prettyPhoto.min.js')}}"></script> --}}

	<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/megamenu.min.js')}}"></script>
	{{-- <script type="text/javascript" src="{{asset('js/main.min.js')}}"></script> --}}

	<script type="text/javascript">
		// var sticky_navigation_offset_top = $("#header .header-bottom").offset().top;
		// var sticky_navigation = function(){
        // var scroll_top = $(window).scrollTop();
        //     if (scroll_top > sticky_navigation_offset_top) {
        //         $("#header .header-bottom").addClass("sticky-menu");
        //         $("#header .header-bottom").css({ "top":0, "left":0, "right" : 0 });
        //     } else {
        //         $("#header .header-bottom").removeClass("sticky-menu");
        //     }
        // };
		// sticky_navigation();
		// $(window).scroll(function() {
		// 	sticky_navigation();
		// });

		$(document).ready (function () {
			$( ".show-dropdown" ).each(function(){
				$(this).on("click", function(){
					$(this).toggleClass("show");
					var $element = $(this).parent().find( "> ul" );
					$element.toggle( 300 );
				});
			});
		});
   </script>
</body>
</html>
@include('tawkto')
