@extends('app')

<head>
    <title>{{ $product->product_name }} - StoreX</title>
</head>

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="label m-5">
                <p class="subtitle is-4">{{ $product->product_name }}</p>
            </div>

            <div class="box card-body">
                <div class="label">
                    <p class="subtitle is-5">Specifications Of {{ $product->product_name }}</p>
                </div>
                <table class="table">
                    <tr>
                        <li>Buy Price: Rs: {{ number_format($product->product_buy_price) }}/.</li>
                        <li>Sell Price: Rs: {{ number_format($product->product_sell_price) }}/.</li>
                        <li>Quantity: {{ $product->product_quantity }}</li>
                    </tr>
                </table>
                <div class="label">
                    <p class="subtitle is-5">More About {{ $product->product_name }}</p>
                </div>
                <div class="text-base">
                    <p class="card-text">{{ $product->product_description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
