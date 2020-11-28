@extends('layout.app')

@section('body')
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
                <div id="contents" role="main" class="main-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single page type-page status-publish hentry">
                        <div class="entry">
                            <div class="entry-content">
                                {{-- <header>
                                    <h2 class="entry-title">My Account</h2>
                                </header> --}}

                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="col2-set row" id="customer_login">
                                            {{-- <div class="col-lg-6">
                                                <h2>Login</h2>

                                                <form method="post" class="login">
                                                    <p class="form-row form-row-wide">
                                                        <label for="username">
                                                            Username or email address <span class="required">*</span>
                                                        </label>

                                                        <input type="text" class="input-text" name="username" id="username" />
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="password">
                                                            Password <span class="required">*</span>
                                                        </label>

                                                        <input class="input-text" type="password" name="password" id="password" />
                                                    </p>

                                                    <p class="form-row">
                                                        <label for="rememberme" class="inline">
                                                            <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me
                                                        </label>
                                                    </p>

                                                    <p class="form-row">
                                                        <input type="submit" class="button" name="login" value="Login" />
                                                    </p>

                                                    <p class="lost_password">
                                                        <a href="lost_password.html">Lost your password?</a>
                                                    </p>
                                                </form>
                                            </div> --}}

                                            <div class="col-lg-6 col-lg-offset-3">
                                                <h2>Register</h2>
                                                @if (Session::get('message') != null)
                                                    <div class="alert alert-success">
                                                        {{ Session::get('message') }}
                                                    </div>
                                                @endif

                                                <form method="post" class="register">
                                                    @csrf
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_name">
                                                            Name <span class="required">*</span>
                                                        </label>

                                                        <input type="text" class="input-text" name="nama" id="reg_name" value="" />
                                                        @error('nama')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_username">
                                                            Username <span class="required">*</span>
                                                        </label>

                                                        <input type="text" class="input-text" name="username" id="reg_username" value="" />
                                                        @error('username')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">
                                                            Email address <span class="required">*</span>
                                                        </label>

                                                        <input type="email" class="input-text" name="email" id="reg_email" value="" />
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">
                                                            Password <span class="required">*</span>
                                                        </label>

                                                        <input type="password" class="input-text" name="password" id="reg_password" />
                                                        @error('password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="confirm_password">
                                                            Confirm Password <span class="required">*</span>
                                                        </label>

                                                        <input type="password" class="input-text" name="confirm_password" id="confirm_password" />
                                                        @error('confirm_password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </p>

                                                    <p class="form-row">
                                                        <input type="submit" class="button" name="register" value="Register" />
                                                    </p>

                                                    <p class="lost_password">
                                                        Already have an account? <a href="{{ url('account/login') }}">Login Now!</a>
                                                    </p>
                                                </form>
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
    </div>
@endsection

