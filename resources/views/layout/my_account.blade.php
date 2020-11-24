@extends('layout.app')

@section('body')
<body class="page woocommerce-account woocommerce-page">
	<div class="body-wrapper theme-clearfix">

        @include('header.header')

        <div class="listings-title">
			<div class="container">
				<div class="wrap-title">
					<h1>My Account</h1>
					<div class="bread">
						<div class="breadcrumbs theme-clearfix">
							<div class="container">
								<ul class="breadcrumb">
									<li>
										<a href="home_page_1.html">Home</a>
										<span class="go-page"></span>
									</li>

									<li class="active">
										<span>My account</span>
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
					<div class="post-6 page type-page status-publish hentry">
						<div class="entry">
							<div class="entry-content">
								<header>
									<h2 class="entry-title">My Account</h2>
								</header>

								<div class="entry-content">
									<div class="woocommerce">
										<nav class="woocommerce-MyAccount-navigation">
											<ul>
												<li class="@if ($location == 'dashboard') is-active @endif">
													<a href="{{ url('account') }}">Dashboard</a>
												</li>

												<li class="@if ($location == 'orders') is-active @endif">
												   <a href="{{ url('account/orders') }}">Orders</a>
												</li>

												<li class="@if ($location == 'addresses') is-active @endif">
													<a href="{{ url('account/address') }}">Addresses</a>
												</li>

												<li class="@if ($location == 'account-details') is-active @endif">
												   <a href="{{ url('account/detail') }}">Account Details</a>
												</li>

												<li>
													<a href="{{ url('logout') }}">Logout</a>
												</li>
											</ul>
										</nav>

										<div class="woocommerce-MyAccount-content">
											@yield('content')
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
@endsection
