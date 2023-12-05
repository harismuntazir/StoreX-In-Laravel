@extends('app')

<head>
    <title>Everything Available At - StoreX</title>
</head>

@section('content')
    <div class="container">

        @include('tools.search-bar')

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Sell Price</th>
                <th>Quantity</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        <a href="{{ route('products.product', $product->id) }}">
                            {{ $product->product_name }}
                        </a>
                    </td>
                    <td>{{ number_format($product->product_sell_price) }}</td>
                    <td>{{ $product->product_quantity }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No products found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {{-- Pagination Links --}}
        @if($products->hasPages())
            <div class="pagination-wrapper">
                {{ $products->links('vendor.pagination.default') }}
            </div>
        @endif

    </div>
@endsection
