@extends('app')

<head>
    <title>{{ $product->product_name }} - StoreX</title>
</head>

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="columns is-flex is-justify-content-space-between is-align-items-center m-2">
                <div class="column is-narrow">
                    <p class="subtitle is-4">{{ $product->product_name }}</p>
                </div>

                <div class="column is-narrow">
                    @auth
                        <a href="{{ route('products.edit', $product->id) }}" class="button is-primary">Edit</a>
                    @endauth
                </div>
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
