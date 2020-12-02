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
                                    @yield('content')
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
