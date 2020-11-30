@extends('layout.app')

@section('title')
    Top Up Wallet
@endsection

@section('body')
<body class="page woocommerce-checkout woocommerce-page">
	<div class="body-wrapper theme-clearfix">
        @include('header.header')

  {{-- Title + Breadcrumb --}}
<div class="listings-title">
    <div class="container">
        <div class="wrap-title">
            <h1>TOP UP YOUR WALLET</h1>
            <div class="bread">
                <div class="breadcrumbs theme-clearfix">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                                <span class="go-page"></span>
                            </li>

                            <li class="active">
                                <span>Top Up</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div style="margin-bottom:10%">
            <h3>Top Up Wallet<span style="float:right">Your Wallet : ${{number_format(Session::get('user-login')->money, 2)}}</span> </h3>
            <hr>
            <div class="col-md-7 col-sm-12" style="background-color:rgb(44, 41, 41);margin-bottom:3%;color:white;padding-top:2%;padding-left:5%">
                <div class="row">
                    <div class="col-md-7 col-sm-7"style="height:100%;float:left">
                        <h2>Add $5</h2>
                        <h5>Minimum fund level</h5>
                    </div>
                    <div class="col-md-5 col-sm-5 align-middle" style="height:100%;float:left;">
                        <a href="{{url('account/topup/5')}}"><button class="btn btn-success" style="width:100%;font-size:15px">Add Funds</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12" style="background-color:rgb(44, 41, 41);margin-bottom:3%;color:white;padding-top:2%;padding-left:5%">
                <div class="row">
                    <div class="col-md-7 col-sm-7"style="height:100%;float:left">
                        <h2>Add $10</h2>
                        <br>
                    </div>
                    <div class="col-md-5 col-sm-5 align-middle" style="height:100%;float:left;">
                        <a href="{{url('account/topup/10')}}"><button class="btn btn-success" style="width:100%;font-size:15px">Add Funds</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12" style="background-color:rgb(44, 41, 41);margin-bottom:3%;color:white;padding-top:2%;padding-left:5%">
                <div class="row">
                    <div class="col-md-7 col-sm-7"style="height:100%;float:left">
                        <h2>Add $15</h2><br>
                    </div>
                    <div class="col-md-5 col-sm-5 align-middle" style="height:100%;float:left;">
                        <a href="{{url('account/topup/15')}}"><button class="btn btn-success" style="width:100%;font-size:15px">Add Funds</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12" style="background-color:rgb(44, 41, 41);margin-bottom:3%;color:white;padding-top:2%;padding-left:5%">
                <div class="row">
                    <div class="col-md-7 col-sm-7"style="height:100%;float:left">
                        <h2>Add $20</h2><br>
                    </div>
                    <div class="col-md-5 col-sm-5 align-middle" style="height:100%;float:left;">
                        <a href="{{url('account/topup/20')}}"><button class="btn btn-success" style="width:100%;font-size:15px">Add Funds</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12" style="background-color:rgb(44, 41, 41);margin-bottom:3%;color:white;padding-top:2%;padding-left:5%">
                <div class="row">
                    <div class="col-md-7 col-sm-7"style="height:100%;float:left">
                        <h2>Add $25</h2><br>
                    </div>
                    <div class="col-md-5 col-sm-5 align-middle" style="height:100%;float:left;">
                        <a href="{{url('account/topup/25')}}"><button class="btn btn-success" style="width:100%;font-size:15px">Add Funds</button></a>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
@endsection
