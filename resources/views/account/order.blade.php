@extends('layout.my_account')

@section('title', 'Order List')

@section('content')
    @foreach ($orders as $order)
        <table class="shop_table shop_table_responsive my_account_orders account-orders-table">
            <thead>
                <tr>
                    <th class="order-number"><span class="nobr">Order</span></th>
                    <th class="order-date"><span class="nobr">Date</span></th>
                    <th class="order-game-name"><span class="nobr">Game Name</span></th>
                    <th class="order-total"><span class="nobr">Total</span></th>
                </tr>
            </thead>

            <tbody>
                <tr class="order">
                    <td class="order-number" data-title="Order">
                        <a href="order_details.html">#{{ $order->id }}</a>
                    </td>
                    <td class="order-date" data-title="Date">
                        {{ \Carbon\Carbon::parse($order->tanggal_trans)->format('F d, Y') }}
                    </td>
                    <td class="order-game-name" data-title="Game Name">
                        {{ $order->games->name }}
                    </td>
                    <td class="order-total" data-title="Total">
                        ${{ number_format($order->game_price, 2) }}
                    </td>
                </tr>
            </tbody>
        </table>
    @endforeach
@endsection
