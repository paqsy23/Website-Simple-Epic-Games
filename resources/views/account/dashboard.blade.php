@extends('layout.my_account')

@section('content')
    <p>
        Hello <strong>{{ Session::get('user-login')->nama }}</strong> (not {{ Session::get('user-login') }}? <a href="{{ url('logout') }}">Sign out</a>)
    </p>
    <p>
        From your account dashboard you can view your
        <a href="{{ url('account/orders') }}">recent orders</a>,
        manage your <a href="{{ url('account/address') }}">shipping and billing addresses</a>
        and <a href="{{ url('account/detail') }}">edit your password and account details</a>.
    </p>
@endsection
